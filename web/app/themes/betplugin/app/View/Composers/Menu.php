<?php

namespace App\View\Composers;

use App\Classes\Controllers\MenuBuilder;
use App\Classes\Models\GetOptions;
use Roots\Acorn\View\Composer;

class Menu extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views
    = [
        'sections.header',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'main_menu'      => $this->mainMenu(),
            'product_menu'   => $this->productMenu(),
            // 'secondary_menu' => $this->secondaryMenu(),
            'acf_options'    => $this->getOptions(),
        ];
    }

    public function mainMenu(): array
    {
        $menu_builder = new MenuBuilder('primary_navigation');

        return $menu_builder->getOutput();
    }

    private function secondaryMenu(): array
    {
        $secondary_menu = new MenuBuilder('secondary_navigation');

        return $secondary_menu->getOutput();
    }

    private function productMenu(): array
    {
        $product_menu = new MenuBuilder('product_navigation');

        return $product_menu->getOutput();
    }

    private function getOptions()
    {
        return GetOptions::getOptions();
    }
}
