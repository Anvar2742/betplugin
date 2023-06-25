<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use App\Classes\Models\UpdateDraws;


class FetchData extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views
    = [
        'partials.products-widget',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'draws' => $this->getFetchData(),
        ];
    }

    public function getFetchData()
    {
        $updateDraws = new UpdateDraws();
        $draws = $updateDraws->updateDraws();

        return $draws;
    }
}
