<?php

namespace DIPI\Modules;

if (!defined('ABSPATH')) {
    die('Direct access forbidden.');
}

use DIPI\Modules\BeforeAfterSlider\BeforeAfterSlider;
use DIPI\Modules\Breadcrumbs\Breadcrumbs;
use DIPI\Modules\ButtonGrid\ButtonGrid;
use DIPI\Modules\ButtonGridItem\ButtonGridItem;
use DIPI\Modules\ContentToggle\ContentToggle;
use DIPI\Modules\Counter\Counter;
use DIPI\Modules\Divider\Divider;
use DIPI\Modules\FlipBox\FlipBox;
use DIPI\Modules\HoverBox\HoverBox;
use DIPI\Modules\HoverGallery\HoverGallery;
use DIPI\Modules\HoverGalleryItem\HoverGalleryItem;
use DIPI\Modules\LottieIcon\LottieIcon;
use DIPI\Modules\PriceList\PriceList;
use DIPI\Modules\PriceListItem\PriceListItem;
use DIPI\Modules\PricingTable\PricingTable;
use DIPI\Modules\PricingTableItem\PricingTableItem;
use DIPI\Modules\TiltImage\TiltImage;

add_action(
    'divi_module_library_modules_dependency_tree',
    function ($dependency_tree) {
        $dependency_tree->add_dependency(new BeforeAfterSlider());
        $dependency_tree->add_dependency(new Breadcrumbs());
        $dependency_tree->add_dependency(new ButtonGrid());
        $dependency_tree->add_dependency(new ButtonGridItem());
        $dependency_tree->add_dependency(new ContentToggle());
        $dependency_tree->add_dependency(new Counter());
        $dependency_tree->add_dependency(new Divider());
        $dependency_tree->add_dependency(new FlipBox());
        $dependency_tree->add_dependency(new HoverBox());
        $dependency_tree->add_dependency(new HoverGallery());
        $dependency_tree->add_dependency(new HoverGalleryItem());
        $dependency_tree->add_dependency(new LottieIcon());
        $dependency_tree->add_dependency(new PriceList());
        $dependency_tree->add_dependency(new PriceListItem());
        $dependency_tree->add_dependency(new PricingTable());
        $dependency_tree->add_dependency(new PricingTableItem());
        $dependency_tree->add_dependency(new TiltImage());
    }
);