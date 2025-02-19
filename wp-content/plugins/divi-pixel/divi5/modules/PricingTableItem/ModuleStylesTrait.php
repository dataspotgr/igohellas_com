<?php
namespace DIPI\Modules\PricingTableItem;

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
        'attrName' => 'content',
      ]),
      $elements->style([
        'attrName' => 'pricePrefix',
      ]),
      $elements->style([
        'attrName' => 'priceSuffix',
      ]),
      $elements->style([
        'attrName' => 'price',
      ]),
      
      $elements->style([
        'attrName' => 'featureText',
      ]),
      $elements->style([
        'attrName' => 'featureIcon',
      ]),
      $elements->style([
        'attrName' => 'image',
      ]),
      $elements->style(
        [
          'attrName'   => 'icon',
          'styleProps' => [
            // 'isAdvancedTransitionStyle' => ET_BUILDER_5_ADVANCED_TRANSITION_STYLE,
            'advancedStyles' => [
              [
                'componentName' => 'divi/common',
                'props'         => [
                  'selector' => $order_class,
                  'attr'     => $attrs['icon']['advanced']['align'] ?? [],
                  'declarationFunction' => [ IconModule::class, 'icon_alignment_declaration' ],
                ],
              ],
              [
                'componentName' => 'divi/common',
                'props'         => [
                  'attr' => $attrs['icon']['innerContent'] ?? [],
                  'selector'=> $order_class. " .dipi-pt-icon .et_pb_image_wrap .et-pb-icon",
                  'declarationFunction' => [ IconModule::class, 'icon_style_declaration' ],
                ],
              ],
              [
                'componentName' => 'divi/common',
                'selector'=> $order_class. " .dipi-pt-icon .et_pb_image_wrap .et-pb-icon",
                'props'         => [
                  'attr'     => $attrs['icon']['decoration']['color'] ?? [],
                  'property' => 'color',
                ],
              ],
             
            ],
          ],
        ]
      ),
      $elements->style([
        'attrName' => 'ribbonImage',
      ])];

      if($itemType === 'Price') {
        $styles[] = CommonStyle::style([
          'selector' => $order_class . ' .dipi-pt-price-prefix',
          'attr' => $attrs['price']['decoration']['pricePrefixPlacement'] ?? [],
          'property' => "vertical-align"
        ]);
      }
      
      if($itemType === 'Icon') {
        $styles[] = CommonStyle::style([
          'selector' => $order_class . ' .dipi-pt-icon .et_pb_image_wrap ',
          'attr' => $attrs['icon']['decoration']['backgroundColor'] ?? [],
          'property' => "background-color"
        ]);
        $styles[] = CommonStyle::style([
          'selector' => $order_class . ' .dipi-pt-icon .et_pb_image_wrap .et-pb-icon',
          'attr' => $attrs['icon']['decoration']['imageIconWidth'] ?? [],
          'property' => "font-size",
          'defaultValue'=>"20px"
        ]);
      }   

      if($itemType === 'Image') {
        $styles[] = CommonStyle::style([
          'selector' => $order_class . ' .dipi-pt-image .et_pb_image_wrap',
          'attr' => $attrs['icon']['decoration']['imageIconWidth'] ?? [],
          'property' => "width",
          'defaultValue'=>"100%"
        ]);
      }

      if($itemType === 'Icon' || $itemType === 'Image') {
        $styles[] = CommonStyle::style([
          'selector' => $order_class . ' .dipi-pt-image, '. $order_class . ' .dipi-pt-icon',
          'attr' => $attrs['icon']['decoration']['alignment'] ?? [],
          'declarationFunction' => function ( array $args ) {
            $attrValue = $args['attrValue'];
            $flex_alignments = [
              "left" => 'flex-start',
              "center" => 'center',
              "right" => 'flex-end'
            ];
            $val = $flex_alignments[ $attrValue ];
            return "justify-content: {$val};";
          }
        ]);
      }

      if($itemType === 'Feature') {
        $styles[] = CommonStyle::style([
          'selector' => $order_class . ' .dipi-pt-feature .dipi-pt-feature-icon',
          'attr' => $attrs['featureIcon']['decoration']['iconSize'] ?? [],
          'property' => "font-size"
        ]);
        $styles[] = CommonStyle::style([
          'selector' => $order_class . ' .dipi-pt-feature',
          'attr' => $attrs['icon']['decoration']['alignment'] ?? [],
          'declarationFunction' => function ( array $args ) {
            $attrValue = $args['attrValue'];
            $flex_alignments = [
              'left'   => 'flex-start',
            'center' => 'center',
            'right'  => 'flex-end'
            ];
            $val = $flex_alignments[ $attrValue ];
            return "justify-content: {$val};";
          }
        ]);
        $styles[] = CommonStyle::style([
          'selector' =>  "{$order_class} .dipi-pt-feature-icon, {$order_class} .dipi-pt-feature-icon:hover",
          'attr' => $attrs['featureIcon']['decoration']['iconColor'] ?? [],
          'property' => "color"
        ]);
        $styles[] = CommonStyle::style([
          'selector' =>  "{$order_class} .dipi-pt-feature-icon, {$order_class} .dipi-pt-feature-icon:hover",
          'attr' => $attrs['featureIcon']['decoration']['iconBackgroundColor'] ?? [],
          'property' => "background-color"
        ]);
        $styles[] = SpacingStyle::style([
          'selector' => $order_class . ' .dipi-pt-feature-icon',
          'attr' => $attrs['featureIcon']['decoration']['iconSpacing'] ?? []
        ]);
      }

      if($itemType === 'Ribbon') {
        $styles[] = CommonStyle::style([
          'selector' => $order_class,
          'attr' => $attrs['ribbon']['decoration']['ribbonPosition'] ?? [],
          'declarationFunction' => function ( array $args ) {
            $horizontal = $args['attrValue']['horizontal'] ?? '0%';
            $vertical = $args['attrValue']['vertical'] ?? '0%';
            return "transform: translate({$horizontal}, {$vertical});";
          }
        ]);
        $styles[] = CommonStyle::style([
          'selector' =>  "{$order_class} .dipi-pt-ribbon-image",
          'attr' => $attrs['ribbonImage']['decoration']['imageWidth'] ?? [],
          'property' => "width"
        ]);
      }
      if($itemType === 'Button') {
        $styles[] = $elements->style([
          'attrName' => 'button',
        ]);
      }
    

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