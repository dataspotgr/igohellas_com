<?php
/**
 * Divider::render_callback()
 *
 * @package DIPI\Modules\Divider
 * @since ??
 */

namespace DIPI\Modules\Divider;

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

// phpcs:disable ET.Sniffs.ValidVariableName.UsedPropertyNotSnakeCase -- WP use snakeCase in \WP_Block_Parser_Block

use ET\Builder\Packages\Module\Module;
use ET\Builder\Framework\Utility\HTMLUtility;
use ET\Builder\Packages\IconLibrary\IconFont\Utils;
use ET\Builder\FrontEnd\BlockParser\BlockParserStore;
use ET\Builder\Packages\Module\Options\Element\ElementComponents;

trait RenderCallbackTrait {
	private static $props = [];
	public static $classname_content = 'dipi-td-content';
	public static $classname_first_decoration = 'dipi-td-first';
    public static $classname_second_decoration = 'dipi-td-second';

	private static function render_content_text() {
        $content_text_tag = self::$props["content_text_tag"];
        return sprintf('<%1$s class="%2$s">%3$s</%1$s>', $content_text_tag, self::$classname_content, self::$props["content_text"]);
    }

    private static function render_content_image() {
        return sprintf('
            <img class="%1$s" src="%2$s" />',
            self::$classname_content,
            self::$props["content_image"]['src']
        );
    }

    private static function render_content_icon() {
		$content_icon = Utils::process_font_icon( self::$props['content_icon']?? [] );


        return sprintf(
            '<div class="%1$s"><span class="et-pb-icon">%2$s</span></div>',
                self::$classname_content,
				$content_icon
        );
    }

    private static function render_content_lottie() {
        $lottie_file = self::$props["content_lottie"];
        return sprintf('
        <div class="%1$s">
            <lottie-player autoplay loop mode="normal" src="%2$s" style="width: 100%%">
            </lottie-player>
        </div>',
      self::$classname_content,
      $lottie_file);
    }


    private static function render_first_decoration() {
       
        return self::render_decoration(self::$classname_first_decoration, true);
    }

    private static function render_second_decoration () {
        $use_custom_second_decoration = self::$props["use_custom_second_decoration"];
        $isFirst = $use_custom_second_decoration !== 'on';
        return self::render_decoration(self::$classname_second_decoration, $isFirst);
    }

    private static function render_decoration ($classname, $isFirst) {
        $decoration_style = $isFirst ? self::$props['first_decoration_style'] : self::$props['second_decoration_style'];
 
        $classnames = sprintf('dipi-td-decoration  dipi-td-decoration-%1$s %2$s', $decoration_style, $classname);
        $render = '';
      
        $render .= $decoration_style === 'line' ? self::render_line_decoration($classnames, $isFirst) : '';
        $render .= $decoration_style === 'image' ? self::render_image_decoration($classnames, $isFirst) : '';
        $render .= $decoration_style === 'icon' ? self::render_icon_decoration($classnames, $isFirst) : '';
        $render .= $decoration_style === 'lottie' ? self::render_lottie_decoration($classnames, $isFirst) : '';
        $render .= $decoration_style === 'empty' ? self::render_line_decoration($classnames, $isFirst) : '';
       
        return $render;
    }

    private static function render_line_decoration($classname, $isFirst = true){
         
        return sprintf('<div class="%1$s"></div>', $classname);
    }
    private static function render_image_decoration($classname, $isFirst = true){
        $decoration_image = $isFirst ? self::$props['decoration_first_image'] : self::$props['decoration_second_image'];
        return sprintf('<div class="%1$s"><img src="%2$s" /></div>', $classname, $decoration_image['src']);
    }
    private static function render_icon_decoration($classname, $isFirst = true){
        $decoration_icon = $isFirst ? Utils::process_font_icon( self::$props['decoration_first_icon']?? [] ) :
			Utils::process_font_icon( self::$props['decoration_second_icon']?? [] );
        
        return sprintf('<div class="%1$s"><span class="et-pb-icon">%2$s</span></div>',
		
			$classname, 
		 $decoration_icon
		);
    }
    private static function render_lottie_decoration($classname, $isFirst = true){
        $decoration_lottie = $isFirst ? self::$props['decoration_first_lottie_file'] : self::$props['decoration_second_lottie_file'];
        return sprintf('<div class="%1$s">
            <lottie-player autoplay loop mode="normal" src="%2$s" style="width: 100%%">
            </lottie-player>
        </div>', $classname, $decoration_lottie);
    }
   
	/**
	 * Static module render callback which outputs server side rendered HTML on the Front-End.
	 *
	 * @since ??
	 * @param array          $attrs    Block attributes that were saved by VB.
	 * @param string         $content  Block content.
	 * @param WP_Block       $block    Parsed block object that being rendered.
	 * @param ModuleElements $elements ModuleElements instance.
	 *
	 * @return string HTML rendered of Static module.
	 */
	public static function render_callback( $attrs, $content, $block, $elements ) {
        wp_enqueue_script('dipi_lottie_interactivity');
        wp_enqueue_script('dipi_lottie_player');
		self::$props = array_map(function($attr) {
			return is_array($attr) && array_key_exists('innerContent', $attr) ? $attr['innerContent']['desktop']['value'] : $attr;
		}, $attrs); 
		$content_type = self::$props["content_type"];
        $hide_first_element = self::$props["hide_first_element"];
        $hide_second_element = self::$props["hide_second_element"];
        $use_custom_second_decoration = self::$props["use_custom_second_decoration"];
        $className = sprintf('dipi-pixel-divider dipi-pixel-divider-%1$s dipi-pixel-divider-%2$s', 
            self::$props["divider_layout"], 
            $content_type
        );   
        $className .= $hide_first_element === 'on' ? ' dipi-pixel-divider-hide-first' : '';
        $className .= $hide_second_element === 'on' ? ' dipi-pixel-divider-hide-second' : '';
        $className .= $use_custom_second_decoration !== 'on' ? ' dipi-pixel-divider-mirror' : '';
        $content  = '';
        $content = ($content_type === 'text') ? self::render_content_text() : $content;
        $content = ($content_type === 'image') ? self::render_content_image() : $content;
        $content = ($content_type === 'icon') ? self::render_content_icon() : $content;
        $content = ($content_type === 'lottie') ? self::render_content_lottie() : $content;
      
       
        $first_decoration = $hide_first_element !== 'on'? self::render_first_decoration() : '';
        $second_decoration = $hide_second_element !== 'on'? self::render_second_decoration() : '';
		$render_html =  sprintf('
		<div class="%1$s">%3$s%2$s%4$s</div>',
			$className,
			$content,
			$first_decoration,
			$second_decoration

		);
		$parent       = BlockParserStore::get_parent( $block->parsed_block['id'], $block->parsed_block['storeInstance'] );
		$parent_attrs = $parent->attrs ?? [];
		
		return Module::render(
			[
				// FE only.
				'orderIndex'          => $block->parsed_block['orderIndex'],
				'storeInstance'       => $block->parsed_block['storeInstance'],

				// VB equivalent.
				'attrs'               => $attrs,
				'elements'            => $elements,
				'id'                  => $block->parsed_block['id'],
				'name'                => $block->block_type->name,
				'moduleCategory'      => $block->block_type->category,
				'classnamesFunction'  => [ ModuleClassnamesTrait::class, 'module_classnames' ],
				'stylesComponent'     => [ ModuleStylesTrait::class, 'module_styles' ],
				'scriptDataComponent' => [ ModuleScriptDataTrait::class, 'module_script_data' ],
				'parentAttrs'         => $parent_attrs,
				'parentId'            => $parent->id ?? '',
				'parentName'          => $parent->blockName ?? '',
				'children'            => ElementComponents::component(
					[
						'attrs'         => $attrs['module']['decoration'] ?? [],
						'id'            => $block->parsed_block['id'],

						// FE only.
						'orderIndex'    => $block->parsed_block['orderIndex'],
						'storeInstance' => $block->parsed_block['storeInstance'],
					]
				) . $render_html,
			]
		);
	}
}
