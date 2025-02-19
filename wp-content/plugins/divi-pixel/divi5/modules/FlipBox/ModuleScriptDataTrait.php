<?php
namespace DIPI\Modules\FlipBox;

if ( ! defined( 'ABSPATH' ) ) {
    die( 'Direct access forbidden.' );
}
use ET\Builder\Packages\Module\Layout\Components\MultiView\MultiViewScriptData;
use ET\Builder\Packages\Module\Options\Element\ElementScriptData;

trait ModuleScriptDataTrait {
  public static function module_script_data( $args ) {
    // Assign variables.
		$id             = $args['id'] ?? '';
		$name           = $args['name'] ??
    
    '';
		$selector       = $args['selector'] ?? '';
		$attrs          = $args['attrs'] ?? [];
		$store_instance = $args['storeInstance'] ?? null;

		// Module decoration attributes.
		$module_decoration_attrs = $attrs['module']['decoration'] ?? [];

		// Element Script Data Options.
		ElementScriptData::set(
			[
				'id'            => $id,
				'selector'      => $selector,
				'attrs'         => array_merge(
					$module_decoration_attrs,
					[
						'link' => $args['attrs']['module']['advanced']['link'] ?? [],
					]
				),
				'storeInstance' => $store_instance,
			]
		);

		MultiViewScriptData::set(
			[
				'id'            => $id,
				'name'          => $name,
				'hoverSelector' => $selector,
				'setContent'    => [
					[
						'selector'      => $selector . ' .example_flip_box__title',
						'data'          => $attrs['title']['innerContent'] ?? [],
						'valueResolver' => function( $value ) {
							return $value ?? '';
						},
					],
					[
						'selector'      => $selector . ' .example_flip_box__content',
						'data'          => $attrs['content']['innerContent'] ?? [],
						'valueResolver' => function( $value ) {
							return $value ?? '';
						},
						'sanitizer'     => 'et_core_esc_previously',
					],
				],
				'setAttrs'      => [
					[
						'selector'      => $selector . ' .example_flip_box__image img',
						'data'          => [
							'src' => $attrs['image']['innerContent'] ?? [],
						],
						'valueResolver' => function( $value ) {
							return $value['src'] ?? '';
						},
						'tag'           => 'img',
					],
				],
			]
		);
  }
}