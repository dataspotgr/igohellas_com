<?php
namespace DIPI\Modules\Divider;

if (!defined("ABSPATH")) {
    die("Direct access forbidden.");
}

use ET\Builder\FrontEnd\Module\Style;
use ET\Builder\Packages\Module\Options\Text\TextStyle;
use ET\Builder\Packages\Module\Options\Css\CssStyle;
use ET\Builder\Packages\Module\Layout\Components\StyleCommon\CommonStyle;
use ET\Builder\Packages\Module\Options\Border\BorderStyle;
use ET\Builder\Packages\Module\Options\Spacing\SpacingStyle;

trait ModuleStylesTrait
{
    use CustomCssTrait;
    use StyleDeclarationTrait;
    private static $props = [];
    public static function getAttr(
        $attrs,
        $attr,
        $default = null,
        $zoom = "",
        $unit = "",
        $wrap_func = ""
    ) {
        $AttrValue = (($attrs ?? [])[$attr] ?? [])["innerContent"] ?? [
            "desktop" => ["value" => $default ?? ""],
        ];
        return $AttrValue;
    }

    public static function getDipiAttr(
        $attrs,
        $attr,
        $default = null,
        $zoom = "",
        $unit = "",
        $wrap_func = ""
    ) {
        $beforeAttrValue = (($attrs ?? [])[$attr] ?? [])["innerContent"] ?? [
            "desktop" => ["value" => $default ?? ""],
        ];
        $afterAttrValue = $beforeAttrValue;
        if (empty($afterAttrValue["tablet"])) {
            $afterAttrValue["tablet"] = $afterAttrValue["desktop"];
        }
        if (empty($afterAttrValue["phone"])) {
            $afterAttrValue["phone"] = $afterAttrValue["tablet"];
        }
        $slug_value = $afterAttrValue["desktop"]["value"] ?? $default;
        $slug_value_tablet = $afterAttrValue["tablet"]["value"];
        $slug_value_phone = $afterAttrValue["phone"]["value"];
        if ($zoom === "") {
            $slug_value = $slug_value . $unit;
            $slug_value_tablet = $slug_value_tablet . $unit;
            $slug_value_phone = $slug_value_phone . $unit;
        } else {
            $slug_value = (float) $slug_value * $zoom . $unit;
            $slug_value_tablet = (float) $slug_value_tablet * $zoom . $unit;
            $slug_value_phone = (float) $slug_value_phone * $zoom . $unit;
        }
        if ($wrap_func !== "") {
            $slug_value = "$wrap_func($slug_value)";
            $slug_value_tablet = "$wrap_func($slug_value_tablet)";
            $slug_value_phone = "$wrap_func($slug_value_phone)";
        }
        $afterAttrValue["desktop"]["value"] = $slug_value;
        if (isset($beforeAttrValue["tablet"])) {
            $afterAttrValue["tablet"]["value"] = $slug_value_tablet;
        }
        if (isset($beforeAttrValue["phone"])) {
            $afterAttrValue["phone"]["value"] = $slug_value_phone;
        }
        return $afterAttrValue;
    }
    public static function getDipiAttrNumber(
        $attrs,
        $attr,
        $default = null,
        $delta = 0
    ) {
        $beforeAttrValue = (($attrs ?? [])[$attr] ?? [])["innerContent"] ?? [
            "desktop" => ["value" => $default ?? ""],
        ];
        $afterAttrValue = $beforeAttrValue;
        $afterAttrValue["desktop"]["value"] =
            (float) $beforeAttrValue["desktop"]["value"] + (float) $delta;
        if (isset($beforeAttrValue["tablet"])) {
            $afterAttrValu["tablet"]["value"] =
                (float) $beforeAttrValue["tablet"]["value"] + (float) $delta;
        }
        if (isset($beforeAttrValue["phone"])) {
            $afterAttrValue["phone"]["value"] =
                (float) $beforeAttrValue["phone"]["value"] + (float) $delta;
        }
        return $afterAttrValue;
    }

    public static function module_styles($args)
    {
        $attrs = $args["attrs"] ?? [];
        $elements = $args["elements"];
        $settings = $args["settings"] ?? [];
        $order_class = $args["orderClass"] ?? "";
        self::$props = array_map(function ($attr) {
            return is_array($attr) && array_key_exists("innerContent", $attr)
                ? $attr["innerContent"]["desktop"]["value"]
                : $attr;
        }, $attrs);
        $divider_layout = self::$props["divider_layout"];
        $first_decoration_style = self::$props["first_decoration_style"];
        $first_decoration_line_style =
            self::$props["first_decoration_line_style"];
        $first_decoration_line_color =
            self::$props["first_decoration_line_color"];
        $first_decoration_width = self::$props["first_decoration_width"];
        $second_decoration_style = self::$props["second_decoration_style"];
        $second_decoration_width = self::$props["second_decoration_width"];

        $selector_module = "$order_class .dipi-pixel-divider";
        $selector_content = "$order_class .dipi-pixel-divider .dipi-td-content";
        $selector_first_decoration = "$order_class .dipi-pixel-divider .dipi-td-first";
        $selector_second_decoration = "$order_class .dipi-pixel-divider .dipi-td-second";
        $strong_selector_second_decoration = "$order_class .dipi-pixel-divider .dipi-td-second";

        $use_custom_second_decoration =
            self::$props["use_custom_second_decoration"];
        $second_decoration_line_style =
            self::$props["second_decoration_line_style"];
        $second_decoration_line_color =
            self::$props["second_decoration_line_color"];
        $use_custom_second_decoration_advanced_styling =
            self::$props["use_custom_second_decoration_advanced_styling"];
        $line_selector =
            $use_custom_second_decoration !== "on"
                ? "$selector_first_decoration, $selector_second_decoration"
                : $selector_first_decoration;
        $advanced_line_selector =
            $use_custom_second_decoration_advanced_styling !== "on"
                ? "$selector_first_decoration, $selector_second_decoration"
                : $selector_first_decoration;
        $decoration_icon_selector =
            $use_custom_second_decoration !== "on"
                ? "$selector_first_decoration .et-pb-icon, $selector_second_decoration .et-pb-icon"
                : "$selector_first_decoration  .et-pb-icon";
        $content_type = self::$props["content_type"];
        $flexAlignments = [
            "left" => "flex-start",
            "center" => "center",
            "right" => "flex-end",
        ];

        $styles = [
            // Module.
            $elements->style([
                "attrName" => "module",
                "styleProps" => [
                    "disabledOn" => [
                        "disabledModuleVisibility" =>
                            $settings["disabledModuleVisibility"] ?? null,
                    ],
                ],
            ]),
            TextStyle::style([
                "selector" => "{$args["orderClass"]} .example_flip_box__content-container",
                "attr" => $attrs["module"]["advanced"]["text"] ?? [],
            ]),
            CssStyle::style([
                "selector" => $args["orderClass"],
                "attr" => $attrs["css"] ?? [],
                "cssFields" => self::custom_css(),
            ]),

            // Title.
            $elements->style([
                "attrName" => "content",
            ]),
            $elements->style([
                "attrName" => "first_decoration",
            ]),
            $elements->style([
                "attrName" => "second_decoration",
            ]),
            $elements->style([
                "attrName" => "advanced_text",
            ]),
            $elements->style([
                "attrName" => "advanced_divider_content",
            ]),
            $elements->style([
                "attrName" => "advanced_first_decoration",
            ]),
            $elements->style([
                "attrName" => "advanced_second_decoration",
            ]),
            SpacingStyle::style([
                "selector" => $selector_content,
                "attr" => self::getAttr($attrs, "content_spacing"),
            ]),
            CommonStyle::style([
                "selector" => "$selector_content .et-pb-icon",
                "property" => "color",
                "attr" => self::getAttr($attrs, "content_icon_color", ""),
                "important" => true,
            ]),
        ];

        if ($divider_layout === "row") {
            $styles[] = CommonStyle::style([
                "selector" => $selector_module,
                "attr" => self::getAttr($attrs, "items_alignment", ""),
                "declarationFunction" => function (array $args) use (
                    $flexAlignments
                ) {
                    $attrValue = $args["attrValue"];
                    return "justify-content: " .
                        $flexAlignments[$attrValue] .
                        ";";
                },
            ]);
        } else {
            $styles[] = CommonStyle::style([
                "selector" => $selector_module,
                "attr" => self::getAttr($attrs, "items_alignment", ""),
                "declarationFunction" => function (array $args) use (
                    $flexAlignments
                ) {
                    $attrValue = $args["attrValue"];
                    return "align-items: " . $flexAlignments[$attrValue] . ";";
                },
            ]);
        }
        $styles[] = CommonStyle::style([
            "selector" => $line_selector,
            "attr" => self::getAttr($attrs, "first_icon_alignment", ""),
            "declarationFunction" => function (array $args) use (
                $flexAlignments
            ) {
                $attrValue = $args["attrValue"];
                return "justify-content: " . $flexAlignments[$attrValue] . ";";
            },
        ]);
        if ($divider_layout === "column") {
            if($first_decoration_width !== "auto") {
              $styles[] = CommonStyle::style([
                  "selector" => $line_selector,
                  "property" => "width",
                  "attr" => self::getAttr($attrs, "first_decoration_width", ""),
              ]);
            }
            if($use_custom_second_decoration === 'on' && $second_decoration_width !== "auto") { // use custom second decoration width
              $styles[] = CommonStyle::style([
                  "selector" => $selector_second_decoration,
                  "property" => "width",
                  "attr" => self::getAttr($attrs, "second_decoration_width", ""),
              ]);
            }
        } else {
            if($first_decoration_width !== "auto") {
                $styles[] = CommonStyle::style([
                    "selector" => $line_selector,
                    "property" => "flex-basis",
                    "attr" => self::getAttr($attrs, "first_decoration_width", ""),
                ]);
            }
            if (
                $first_decoration_width !== "auto" &&
                !empty(self::$props["first_decoration_width"])
            ) {
                $styles[] = CommonStyle::style([
                    "selector" => $line_selector,
                    "attr" => self::getAttr($attrs, "random", ""),
                    "declarationFunction" => function (array $args) {
                        return "flex-grow:0;";
                    },
                ]);
            }

            if ($use_custom_second_decoration === "on") {
                $styles[] = CommonStyle::style([
                    "selector" => $selector_second_decoration,
                    "property" => "flex-basis",
                    "attr" => self::getAttr(
                        $attrs,
                        "second_decoration_width",
                        ""
                    ),
                ]);

                if (
                    $second_decoration_width !== "auto" &&
                    !empty($second_decoration_width)
                ) {
                    $styles[] = CommonStyle::style([
                        "selector" => $selector_second_decoration,
                        "attr" => self::getAttr($attrs, "random", ""),
                        "declarationFunction" => function (array $args) {
                            return "flex-grow:0;";
                        },
                    ]);
                }
            }
        }

        if ($first_decoration_style === "icon") {
            $styles[] = CommonStyle::style([
                "selector" => $decoration_icon_selector,
                "property" => "font-size",
                "attr" => self::getAttr(
                    $attrs,
                    "first_decoration_icon_size",
                    ""
                ),
                "important" => true,
            ]);
        }

        if (
            $use_custom_second_decoration === "on" &&
            $second_decoration_style === "icon"
        ) {
            $styles[] = CommonStyle::style([
                "selector" => "$selector_second_decoration .et-pb-icon",
                "property" => "font-size",
                "attr" => self::getAttr(
                    $attrs,
                    "second_decoration_icon_size",
                    ""
                ),
                "important" => true,
            ]);
            $styles[] = CommonStyle::style([
                "selector" => $selector_second_decoration,
                "attr" => self::getAttr($attrs, "second_icon_alignment", ""),
                "declarationFunction" => function (array $args) {
                    $attrValue = $args["attrValue"];
                    return "justify-content: " .
                        $flexAlignments[$attrValue] .
                        ";";
                },
            ]);
        }

        if ($first_decoration_style === "line") {
            $styles[] = CommonStyle::style([
                "selector" => $line_selector,
                "attr" => $attrs,
                "declarationFunction" => function (array $args) use ($first_decoration_line_style, $first_decoration_line_color) {
                    return "border-top-style: $first_decoration_line_style;border-top-color: $first_decoration_line_color;";
                },
            ]);
            $styles[] = CommonStyle::style([
                "selector" => $line_selector,
                "property" => "border-width",
                "attr" => self::getAttr($attrs, "first_line_weight", ""),
                "important" => true,
            ]);
        }

        if (
            $use_custom_second_decoration === "on" &&
            $second_decoration_style === "line"
        ) {
            $styles[] = CommonStyle::style([
                "selector" => $selector_second_decoration,
                "attr" => $attrs,
                "declarationFunction" => function (array $args) use ($second_decoration_line_style,$second_decoration_line_color) {
                    return "border-top-style: $second_decoration_line_style;border-top-color: $second_decoration_line_color;";
                },
            ]);
            $styles[] = CommonStyle::style([
                "selector" => $selector_second_decoration,
                "property" => "border-width",
                "attr" => self::getAttr($attrs, "second_line_weight", ""),
                "important" => true,
            ]);
        }

        if ($use_custom_second_decoration !== "on") {
            if ($divider_layout === "column") {
                $styles[] = CommonStyle::style([
                    "selector" => $selector_second_decoration,
                    "attr" => null,
                    "declarationFunction" => function (array $args) {
                        return `transform: scaleY(-1);`;
                    },
                ]);
            } else {
                $styles[] = CommonStyle::style([
                    "attr" => null,
                    "selector" => $selector_second_decoration,
                    "declarationFunction" => function (array $args) {
                        return `transform: scaleX(-1)`;
                    },
                ]);
            }
        }

        if ($first_decoration_style === "icon") {
            $styles[] = CommonStyle::style([
                "selector" => $decoration_icon_selector,
                "property" => "color",
                "attr" => self::getAttr(
                    $attrs,
                    "first_decoration_icon_color",
                    ""
                ),
                "important" => true,
            ]);
        }
        if (
            $use_custom_second_decoration === "on" &&
            $second_decoration_style === "icon"
        ) {
            $styles[] = CommonStyle::style([
                "selector" => $selector_second_decoration,
                "property" => "color",
                "attr" => self::getAttr(
                    $attrs,
                    "second_decoration_icon_color",
                    ""
                ),
                "important" => true,
            ]);
        }

        $styles[] = CommonStyle::style([
            "selector" => "$selector_content .et-pb-icon",
            "attr" => $attrs["content_icon"]["innerContent"],
            "declarationFunction" => [self::class, "icon_font_declaration"],
        ]);
        $styles[] = CommonStyle::style([
            "selector" => "$selector_first_decoration .et-pb-icon, $selector_second_decoration .et-pb-icon",
            "attr" => $attrs["decoration_first_icon"]["innerContent"],
            "declarationFunction" => [self::class, "icon_font_declaration"],
        ]);

        $styles[] = CommonStyle::style([
            "selector" => "$selector_second_decoration .et-pb-icon",
            "attr" => $attrs["decoration_second_icon"]["innerContent"],
            "declarationFunction" => [self::class, "icon_font_declaration"],
        ]);
        $styles[] = SpacingStyle::style([
            "selector" => $advanced_line_selector,
            "attr" => self::getAttr($attrs, "first_decoration_spacing"),
        ]);

        if ($use_custom_second_decoration_advanced_styling === "on") {
            $styles[] = SpacingStyle::style([
                "selector" => $selector_second_decoration,
                "attr" => self::getAttr($attrs, "second_decoration_spacing"),
                "important" => true,
            ]);
        }
        if ($content_type !== "icon") {
            if ($divider_layout === "row") {
                $styles[] = CommonStyle::style([
                    "selector" => $selector_content,
                    "property" => "flex-basis",
                    "attr" => self::getAttr($attrs, "content_width", ""),
                ]);

                $styles[] = CommonStyle::style([
                    "selector" => $selector_content,
                    "property" => "width",
                    "attr" => self::getAttr($attrs, "content_width", ""),
                ]);
            }
            if ($divider_layout !== "row") {
                $styles[] = CommonStyle::style([
                    "selector" => $selector_content,
                    "property" => "width",
                    "attr" => self::getAttr($attrs, "content_width", ""),
                ]);
            }
        }
        if ($content_type === "icon") {
            $styles[] = CommonStyle::style([
                "selector" => "$selector_content .et-pb-icon",
                "property" => "font-size",
                "attr" => self::getAttr($attrs, "content_width", ""),
                "important" => true,
            ]);
        }
        Style::add([
            "id" => $args["id"],
            "name" => $args["name"],
            "orderIndex" => $args["orderIndex"],
            "storeInstance" => $args["storeInstance"],
            "styles" => $styles,
        ]);
    }
}
