<?php
namespace DIPI\Modules\FlipBox;

if ( ! defined( 'ABSPATH' ) ) {
    die( 'Direct access forbidden.' );
}

use ET\Builder\FrontEnd\Module\Style;
use ET\Builder\Packages\Module\Options\Text\TextStyle;
use ET\Builder\Packages\Module\Options\Css\CssStyle;
use ET\Builder\Packages\Module\Layout\Components\StyleCommon\CommonStyle;

trait ModuleStylesTrait {

  use CustomCssTrait;
  use StyleDeclarationTrait;
	public static function getAttrByMode($attrs, $attr, $default = null, $mode = null) {
		return (((($attrs??[])[$attr]??[])['innerContent']??[])[$mode??'desktop']??[])['value']??$default??'';
	}
	public static function getAttr($attrs, $attr, $default = null) {
		return (($attrs??[])[$attr]??[])['innerContent']??['desktop'=>['value'=>$default??'']];
	}
  public static function module_styles( $args ) {
    
    $attrs    = $args['attrs'] ?? [];
		$elements = $args['elements'];
		$settings = $args['settings'] ?? [];
		$order_class  = $args['orderClass'] ?? '';
		$icon_selector = "$order_class  .et-pb-icon";
		$front_icon_color = self::getAttrByMode($attrs, 'front_icon_color', '#7EBEC5');
        $front_circle_icon = self::getAttrByMode($attrs, 'front_circle_icon', 'off');
        $front_circle_color = self::getAttrByMode($attrs, 'front_circle_color', '');
        $front_circle_border = self::getAttrByMode($attrs, 'front_circle_border', 'off');
        $front_circle_border_color = self::getAttrByMode($attrs, 'front_circle_border_color', 'on');
        $front_icon_size = self::getAttrByMode($attrs, 'front_icon_size', '40px');
        $back_icon_color = self::getAttrByMode($attrs, 'back_icon_color', '#7EBEC5');
        $back_circle_icon = self::getAttrByMode($attrs, 'back_circle_icon', 'off');
        $back_circle_color = self::getAttrByMode($attrs, 'back_circle_color', '');
        $back_circle_border = self::getAttrByMode($attrs, 'back_circle_border', 'off');
        $back_circle_border_color = self::getAttrByMode($attrs, 'back_circle_border_color', '');
        $back_icon_size = self::getAttrByMode($attrs, 'back_icon_size', '40px');
        $flip_box_speed = self::getAttrByMode($attrs, 'flip_box_speed', '600ms');
        $flip_box_align_front = self::getAttrByMode($attrs, 'flip_box_align_front', 'center');
        $flip_box_align_back = self::getAttrByMode($attrs, 'flip_box_align_back', 'center');
        $flip_box_3d_flank_color = self::getAttrByMode($attrs, 'flip_box_3d_flank_color', '');
		$flip_box_align_front_vertical = self::getAttrByMode($attrs, 'flip_box_align_front_vertical', 'center');
        $flip_box_align_back_vertical = self::getAttrByMode($attrs, 'flip_box_align_back_vertical', 'center');
		$use_dynamic_height = self::getAttrByMode($attrs, 'use_dynamic_height', 'off');
		$use_force_square = self::getAttrByMode($attrs, 'use_force_square', 'off');
		$use_3d_flip_box =  self::getAttrByMode($attrs, 'use_3d_flip_box', 'off');

		Style::add(
			[
				'id'            => $args['id'],
				'name'          => $args['name'],
				'orderIndex'    => $args['orderIndex'],
				'storeInstance' => $args['storeInstance'],
				'styles'        => [
					// Module.
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
					TextStyle::style(
						[
							'selector' => "{$args['orderClass']} .example_flip_box__content-container",
							'attr'     => $attrs['module']['advanced']['text'] ?? [],
						]
					),
					CssStyle::style(
						[
							'selector'  => $args['orderClass'],
							'attr'      => $attrs['css'] ?? [],
							'cssFields' => self::custom_css(),
						]
					),

					// Image.
					$elements->style(
						[
							'attrName' => 'front_image',
						]
					),

					// Title.
					$elements->style(
						[
							'attrName' => 'front_title',
						]
					),

					// Content.
					$elements->style(
						[
							'attrName' => 'front_content',
						]
					),
					$elements->style(
						[
							'attrName' => 'front_button',
						]
					),
					// Image.
					$elements->style(
						[
							'attrName' => 'back_image',
						]
					),
					// Icon.
					CommonStyle::style(
						[
							'selector'            => $icon_selector,
							'attr'                => $attrs['front_icon']['innerContent'],
							'declarationFunction' => [ self::class, 'icon_font_declaration' ],
						]
					),
					// Title.
					$elements->style(
						[
							'attrName' => 'back_title',
						]
					),

					// Content.
					$elements->style(
						[
							'attrName' => 'back_content',
						]
					),
					$elements->style(
						[
							'attrName' => 'back_button',
						]
					),
					'off' === $use_dynamic_height 
					&& 'off' === $use_force_square ?
					CommonStyle::style(
						[
							'selector'            => "$order_class .dipi-flip-box-inner-wrapper",
							'attr'                => self::getAttr($attrs, 'flip_box_height','250px'),
							'property' => 'height',
						]
					) : null,
					CommonStyle::style(
						[
							'selector'            => "$order_class .dipi-flip-box-front-side .dipi-image-wrap",
							'attr'                => self::getAttr($attrs, 'front_image_width', '100%'), 
							'property' => 'max-width',
						]
					),
					CommonStyle::style(
						[
							'selector'            => "$order_class  .dipi-flip-box-back-side .dipi-image-wrap",
							'attr'                => self::getAttr($attrs, 'back_image_width', '100%'),
							'property' => 'max-width',
						]
					),
					CommonStyle::style([
						'selector' => "$order_class .dipi-flip-box-front-side-wrapper",
						'important' => true,
						'attr'      => self::getAttr($attrs, 'flip_box_align_front_vertical', 'center'),
						'property' => "justify-content",
					]),
			
					CommonStyle::style([
						'selector' => "$order_class .dipi-flip-box-back-side-wrapper",
						'important' => true,
						'attr'      => self::getAttr($attrs, 'flip_box_align_back_vertical', 'center'),
						'property' => "justify-content",
					]),
			
					CommonStyle::style([
						'selector' => "$order_class .dipi-back-button:after",
						'important' => true,
						'attr'      => ['desktop'=>['value'=>'inherit']],
						'property' => "font-size",
					]),
					CommonStyle::style([
						'selector' => "$order_class .dipi-back-button:after",
						'important' => true,
						'attr'      => ['desktop'=>['value'=>'inherit']],
						'property' => "line-height",
					]),
          
					('on' == $use_3d_flip_box) ?
						CommonStyle::style([
							'selector' => "$order_class .dipi-flip-box-3d-cube",
							'important' => true,
							'attr'      => self::getAttr($attrs, 'flip_box_speed', '600ms'),
							'property' => "transition-duration",
						])
			
					 :
						CommonStyle::style([
							'selector' => "$order_class  .dipi-flip-box-front-side, $order_class .dipi-flip-box-back-side",
							'important' => true,
							'attr'      => self::getAttr($attrs, 'flip_box_speed', '600ms'),
							'property' => "transition-duration",
						])
			
					,
					'left' == $flip_box_align_front ?
			
						CommonStyle::style([
							'selector' => "$order_class .dipi-flip-box-front-side-innner",
							'important' => true,
							'attr'      => ['desktop'=>['value'=>'left']],
							'property' => "text-align",
						]) : null
					,
					'left' == $flip_box_align_front ?
						CommonStyle::style([
							'selector' => "$order_class .dipi-front-image-icon-wrap",
							'important' => true,
							'attr'      => ['desktop'=>['value'=>'0']],
							'property' => "margin-left",
						]) : null
					,
					'left' == $flip_box_align_front ?
						CommonStyle::style([
							'selector' => "$order_class .dipi-front-image-icon-wrap",
							'important' => true,
							'attr'      => ['desktop'=>['value'=>'auto']],
							'property' => "margin-right",
						]) : null
					,					
					'center' == $flip_box_align_front ?
			
						CommonStyle::style([
							'selector' => "$order_class .dipi-flip-box-front-side-innner",
							'important' => true,
							'attr'      => ['desktop'=>['value'=>'center']],
							'property' => "text-align",
						]) : ''
					,
					'right' == $flip_box_align_front ?
			
						CommonStyle::style([
							'selector' => "$order_class .dipi-flip-box-front-side-innner",
							'important' => true,
							'attr'      => ['desktop'=>['value'=>'right']],
							'property' => "text-align",
						]) : null
					,
					'right' == $flip_box_align_front ?
						CommonStyle::style([
							'selector' => "$order_class .dipi-front-image-icon-wrap",
							'important' => true,
							'attr'      => ['desktop'=>['value'=>'0']],
							'property' => "margin-right",
						]) : null
					,
					'right' == $flip_box_align_front ?
					CommonStyle::style([
						'selector' => "$order_class .dipi-front-image-icon-wrap",
						'important' => true,
						'attr'      => ['desktop'=>['value'=>'auto']],
						'property' => "margin-left",
					]) : null
				,
					'left' == $flip_box_align_back ?
						CommonStyle::style([
							'selector' => "$order_class .dipi-flip-box-back-side-innner",
							'important' => true,
							'attr'      => ['desktop'=>['value'=>'left']],
							'property' => "text-align",
						]) : null
					,
					'left' == $flip_box_align_back?
						CommonStyle::style([
							'selector' => "$order_class .dipi-back-image-icon-wrap",
							'important' => true,
							'attr'      => ['desktop'=>['value'=>'auto']],
							'property' => "margin-right",
						]): null
					,
					'left' == $flip_box_align_back?
						CommonStyle::style([
							'selector' => "$order_class .dipi-back-image-icon-wrap",
							'important' => true,
							'attr'      => ['desktop'=>['value'=>'0']],
							'property' => "margin-left",
						]): null						
					,
					'center' == $flip_box_align_back ?
			
						CommonStyle::style([
							'selector' => "$order_class .dipi-flip-box-back-side-innner",
							'important' => true,
							'attr'      => ['desktop'=>['value'=>'center']],
							'property' => "text-align",
						]) : null
					,
					'right' == $flip_box_align_back ?
			
						CommonStyle::style([
							'selector' => "$order_class .dipi-flip-box-back-side-innner",
							'important' => true,
							'attr'      => ['desktop'=>['value'=>'right']],
							'property' => "text-align",
						]) : null
					,
					'right' == $flip_box_align_back ?
						CommonStyle::style([
							'selector' => "$order_class .dipi-back-image-icon-wrap",
							'important' => true,
							'attr'      => ['desktop'=>['value'=>'0']],
							'property' => "margin-right",
						]) : null
					,
					'right' == $flip_box_align_back ?
						CommonStyle::style([
							'selector' => "$order_class .dipi-back-image-icon-wrap",
							'important' => true,
							'attr'      => ['desktop'=>['value'=>'auto']],
							'property' => "margin-left",
						]) : null
					,			
					CommonStyle::style([
						'selector' => "$order_class .dipi-flip-box-3d-cube .dipi-flip-box-3d-flank",
						'important' => true,
						'attr'      => self::getAttr($attrs, 'flip_box_3d_flank_color', ''),
						'property' => "background-color",
					]),
			
					CommonStyle::style([
						'selector' => "$order_class .dipi-flip-box-front-side .dipi-flip-box-front-icon",
						'important' => true,
						'attr'      => self::getAttr($attrs, 'front_icon_color'),
						'property' => "color",
					]),
			
					'on' === $front_circle_icon ?
						CommonStyle::style([
							'selector' => "$order_class .dipi-flip-box-front-side .dipi-front-icon-circle",
							'important' => true,
							'attr'      => self::getAttr($attrs, 'front_circle_color'),
							'property' => "background-color",
						]): null
					,
			
					'on' == $front_circle_border ?
						CommonStyle::style([
							'selector' => "$order_class .dipi-flip-box-front-side .dipi-front-icon-border",
							'important' => true,
							'attr'      => self::getAttr($attrs, 'front_circle_border_color'),
							'property' => "border-color",
						]) : null,
			
					CommonStyle::style([
						'selector' => "$order_class .dipi-flip-box-front-side .dipi-flip-box-front-icon",
						'important' => true,
						'attr'      => self::getAttr($attrs, 'front_icon_size','40px'),
						'property' => "font-size",
					]),
			
					CommonStyle::style([
						'selector' => "$order_class .dipi-flip-box-back-side .dipi-flip-box-back-icon",
						'important' => true,
						'attr'      => self::getAttr($attrs, 'back_icon_color','#7EBEC5'),
						'property' => "color",
					]),
			
					'on' == $back_circle_icon ?
						CommonStyle::style([
							'selector' => "$order_class .dipi-flip-box-back-side .dipi-back-icon-circle",
							'important' => true,
							'attr'      => self::getAttr($attrs, 'back_circle_color'),
							'property' => "background-color",
						]) : null,
			
					'on' == $back_circle_border ?
						CommonStyle::style([
							'selector' => "$order_class .dipi-flip-box-back-side .dipi-back-icon-border",
							'important' => true,
							'attr'      => self::getAttr($attrs, 'back_circle_border_color'),
							'property' => "border-color",
						]) : null,
					
					CommonStyle::style([
						'selector' => "$order_class .dipi-flip-box-back-side .dipi-flip-box-back-icon",
						'important' => true,
						'attr'      => self::getAttr($attrs, 'back_icon_size', '40px'),
						'property' => "font-size",
					])
				],
			]
		);
  }
}