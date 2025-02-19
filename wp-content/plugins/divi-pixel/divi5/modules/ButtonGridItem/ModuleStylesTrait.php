<?php
namespace DIPI\Modules\ButtonGridItem;

if ( ! defined( 'ABSPATH' ) ) {
    die( 'Direct access forbidden.' );
}

use ET\Builder\FrontEnd\Module\Style;
use ET\Builder\Packages\Module\Options\Text\TextStyle;
use ET\Builder\Packages\Module\Options\Css\CssStyle;
use ET\Builder\Packages\Module\Layout\Components\StyleCommon\CommonStyle;
use ET\Builder\Packages\Module\Options\Spacing\SpacingStyle;
use ET\Builder\Packages\ModuleLibrary\Icon\IconModule;

trait ModuleStylesTrait {

  use CustomCssTrait;
 

  public static function module_styles( $args ) {
    
    $attrs    = $args['attrs'] ?? [];
    $elements = $args['elements'];
     
    $settings = $args['settings'] ?? [];
    $order_class = $args['orderClass'] ?? '';
  
    $itemType = $attrs['module']['advanced']['itemType']['desktop']['value'] ?? 'Text';
    $ribbonType = $attrs['ribbon']['decoration']['ribbonType']['desktop']['value'] ?? 'Text';

    $styles = [
      $elements->style(
        [
          'attrName'   => 'module',
          'styleProps' => [
            'disabledOn' => [
              'disabledModuleVisibility' => $settings['disabledModuleVisibility'] ?? null,
            ],
            'advancedStyles' => [
              [
                'componentName' => 'divi/text',
                'props' => [
                  'selector'=> "{$order_class} .dipi-pt-text, {$order_class} .dipi-pt-price-container",
                  'attr'=> $attrs['module']['advanced']['text'],
                ],
              ]
            ]
          ],
        ]
      ),
      CssStyle::style(
        [
          'selector'  => $order_class,
          'attr'      => $attrs['css'] ?? [],
          'cssFields' => self::custom_css(),
        ]
      ),
      $elements->style([
        'attrName' => 'text_style',
      ]),
      $elements->style([
        'attrName' => 'button',
      ]),
    ];
    

      Style::add(
      [
        'id'            => $args['id'],
        'name'          => $args['name'],
        'orderIndex'    => $args['orderIndex'],
        'storeInstance' => $args['storeInstance'],
        'styles'        => $styles
      ]
    );
  }
}