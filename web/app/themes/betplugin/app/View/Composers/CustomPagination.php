<?php

namespace App\View\Composers;

use App\Classes\Controllers\BuildCustomPagination;
use Roots\Acorn\View\Composer;

class CustomPagination extends Composer 
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views
        = [
            'partials.custom-pagination',
        ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'pagination' => $this->getCustomPagination(),
        ];
    }

    public function getCustomPagination(): array
    {
        global $wp_query;

        $pagination = new BuildCustomPagination($wp_query);

        return $pagination->getPagination();
    }
}
