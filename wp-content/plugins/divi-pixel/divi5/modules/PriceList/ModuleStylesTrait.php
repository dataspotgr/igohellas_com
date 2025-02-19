<?php
namespace DIPI\Modules\PriceList;

if ( ! defined( 'ABSPATH' ) ) {
    die( 'Direct access forbidden.' );
}

use ET\Builder\FrontEnd\Module\Style;
use ET\Builder\Packages\Module\Options\Text\TextStyle;
use ET\Builder\Packages\Module\Options\Css\CssStyle;
use ET\Builder\Packages\Module\Layout\Components\StyleCommon\CommonStyle;
 
use ET\Builder\Packages\Module\Options\Spacing\SpacingStyle;


trait ModuleStylesTrait {

  use CustomCssTrait;

  public static function module_styles( $args ) {
    $attrs    = $args['attrs'] ?? [];
    $elements = $args['elements'];
    $settings = $args['settings'] ?? [];
    $order_class = $args['orderClass'] ?? '';
  
    $styles = [
      $elements->style(
        [
          'attrName'   => 'module',
          'styleProps' => [
            'disabledOn' => [
              'disabledModuleVisibility' => $settings['disabledModuleVisibility'] ?? null,
            ],
          ],
        ]
      ),
      CssStyle::style(
        [
          'selector'  => $args['orderClass'],
          'attr'      => $attrs['css'] ?? [],
          'cssFields' => self::custom_css(),
        ]
      ),

      $elements->style([
          'attrName' => 'image',
      ]),
      $elements->style([
          'attrName' => 'title',
      ]),
      $elements->style([
          'attrName' => 'content',
      ]),
      $elements->style([
          'attrName' => 'price',
      ]),
      CommonStyle::style([
          'selector' => $order_class . ' .dipi_price_list_item_wrapper',
          'attr' => $attrs['module']['decoration']['layout'] ?? [],
          'property' => "flex-direction"
      ]),
      CommonStyle::style([
          'selector' => $order_class . ' .dipi_price_list_item_wrapper',
          'attr' => $attrs['module']['advanced']['imageAlignment'] ?? [],
          'property' => "align-items"
      ]),
      CommonStyle::style([
          'selector' => $order_class . ' .dipi_price_list_header',
          'attr' => $attrs['item']['decoration']['headerAlignment'] ?? [],
          'property' => "align-items"
      ]),
      CommonStyle::style([
          'selector' => $order_class . ' .dipi_price_list_item .dipi_price_list_separator',
          'attr' => $attrs['separator']['decoration']['separatorStyle'] ?? [],
          'property' => "border-bottom-style"
      ]),
      CommonStyle::style([
          'selector' => $order_class . ' .dipi_price_list_item .dipi_price_list_separator',
          'attr' => $attrs['separator']['decoration']['separatorWeight'] ?? [],
          'property' => "border-bottom-width"
      ]),
      CommonStyle::style([
          'selector' => $order_class . ' .dipi_price_list_item .dipi_price_list_separator',
          'attr' => $attrs['separator']['decoration']['separatorColor'] ?? [],
          'property' => "border-bottom-color"
      ]),
      CommonStyle::style([
          'selector' => $order_class . ' .dipi_price_list_item .dipi_price_list_separator',
          'attr' => $attrs['separator']['decoration']['separatorSpacing'] ?? [],
          'declarationFunction' => function ( array $args ) {
            $attrValue = $args['attrValue'];
            return "margin-left: {$attrValue};margin-right: {$attrValue};";
         }
      ]),
      CommonStyle::style([
          'selector' => $order_class . ' .dipi_price_list_image_wrapper',
          'attr' => $attrs['image']['decoration']['imageSpacing'] ?? [],
          'property' => "margin-right"
      ]),
      CommonStyle::style([
          'selector' => $order_class . ' .dipi_price_list_image_wrapper',
          'attr' => $attrs['image']['decoration']['imageWidth'] ?? [],
          'property' => "width"
      ]),
      CommonStyle::style([
          'selector' => $order_class . ' .dipi_price_list_image_wrapper',
          'attr' => $attrs['image']['decoration']['imageMinWidth'] ?? [],
          'property' => "min-width"
      ]),
      CommonStyle::style([
          'selector' => $order_class . '.dipi_price_list .dipi_price_list_item:not(:last-child)',
          'attr' => $attrs['item']['decoration']['itemSpacing'] ?? [],
          'property' => "margin-bottom"
      ]),
      SpacingStyle::style([
          'selector' => $order_class . ' .dipi_price_list_item',
          'attr' => $attrs['item']['decoration']['itemPadding'] ?? [],
      ]),
      SpacingStyle::style([
          'selector' => $order_class . ' .dipi_price_list_item .dipi_price_list_text_wrapper',
          'attr' => $attrs['item']['decoration']['textSpacing'] ?? [],
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