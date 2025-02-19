<?php
namespace DIPI\Modules\HoverGallery;

if ( ! defined( 'ABSPATH' ) ) {
    die( 'Direct access forbidden.' );
}

use ET\Builder\Framework\Utility\HTMLUtility;
use ET\Builder\Packages\IconLibrary\IconFont\Utils;
use ET\Builder\FrontEnd\BlockParser\BlockParserStore;
use ET\Builder\Packages\Module\Options\Element\ElementComponents;
use ET\Builder\Packages\Module\Module;

trait RenderCallbackTrait {
  public static function render_callback( $attrs, $content, $block, $elements ) {
    $children_ids = $block->parsed_block['innerBlocks'] ? array_map(
			function( $inner_block ) {
				return $inner_block['id'];
			},
			$block->parsed_block['innerBlocks']
		) : [];

    // const galleryAnimation = getAttrByMode(attrs?.module?.advanced?.galleryAnimation);


    $parent = BlockParserStore::get_parent( $block->parsed_block['id'], $block->parsed_block['storeInstance'] );
    $parent_attrs = $parent->attrs ?? [];

    $gallery_animation = $attrs['module']['advanced']['galleryAnimation']['desktop']['value'];
 
    
    $index = 0;
    $images = array_map(

      function( $child ) use ( $gallery_animation, &$index ){
        $extrac_class = '';
        if($index === 0){
          $extrac_class = 'active';
          $index++;
        }
        
        $image = $child['attrs']['image']['innerContent']['desktop']['value']['src'];
        if($gallery_animation['animationName'] === 'SliceAnim'){
          return sprintf(
            '<div class="dipi-hg-image dipi-hg-%2$s" data-item="%3$s">
              <div class="dipi-hg-slice-clones">
                  <div key="hg-slice-0" class="dipi-hg-slice" >
                    <img src="%1$s"  />
                  </div>
                  <div key="hg-slice-1" class="dipi-hg-slice"   >
                    <img src="%1$s"   />
                  </div>
                  <div key="hg-slice-2" class="dipi-hg-slice"  >
                    <img src="%1$s"   />
                  </div>
                  <div key="hg-slice-3" class="dipi-hg-slice"  >
                    <img src="%1$s"  />
                  </div>
                  <div key="hg-slice-4" class="dipi-hg-slice"  >
                    <img src="%1$s"   />
                  </div>
              </div>
            </div>',
            esc_url($image),
            esc_attr($gallery_animation['animationName']),
            esc_attr($child['id'])
          );
        }
 
        $gallery_animation['animationName'] = ucfirst($gallery_animation['animationName']);
        return sprintf('
          <div class="dipi-hg-image dipi-hg-%1$s %4$s" data-item="%2$s">
				    <div style="background-image : url(%3$s)"></div>
			    </div>',
          esc_attr($gallery_animation['animationName']),
          esc_attr($child['id']),
          $image,
          $extrac_class
        );
        
      },
      $block->parsed_block['innerBlocks']
    );
    $images = sprintf('<div class="dipi-hg__images">%1$s</div>', implode('', $images));
  

    $html_attrs = [
      'data-animation-speed' => $gallery_animation['animationSpeed'],
      'data-animation' => $gallery_animation['animationName'],
      'data-animation-delay' => $gallery_animation['animationDelay'],
      'data-test' => 'test'
    ];
   
    $content = ElementComponents::component(
      [
        'attrs'         => $attrs['module']['decoration'] ?? [],
        'id'            => $block->parsed_block['id'],
        'htmlAttrs'     => [
          'data-item' => $block->parsed_block['id']
        ],
        // FE only.
        'orderIndex'    => $block->parsed_block['orderIndex'],
        'storeInstance' => $block->parsed_block['storeInstance'],
      ]
    ) . $content;

    $content = sprintf('<div class="dipi-hg__items">%1$s</div>', $content);



    return Module::render(
      [
        // FE only.
        'orderIndex'          => $block->parsed_block['orderIndex'],
        'storeInstance'       => $block->parsed_block['storeInstance'],

        // VB equivalent.
        'attrs'               => $attrs,
        'elements'            => $elements,
        'id'                  => $block->parsed_block['id'],
        'moduleClassName'     => '',
        'name'                => $block->block_type->name,
        'classnamesFunction'  => [ ModuleClassnamesTrait::class, 'module_classnames' ],
        'moduleCategory'      => $block->block_type->category,
        'stylesComponent'     => [ ModuleStylesTrait::class, 'module_styles' ],
        'scriptDataComponent' => [ ModuleScriptDataTrait::class, 'module_script_data' ],
        // 'htmlAttrs' => $html_attrs,
        'parentAttrs'         => $parent_attrs,
        'parentId'            => $parent->id ?? '',
        'parentName'          => $parent->blockName ?? '',
        'children'            => $images. $content,
				'childrenIds'         => $children_ids,
      ]
    );
  }
}