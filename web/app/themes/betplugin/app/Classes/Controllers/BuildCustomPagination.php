<?php

namespace App\Classes\Controllers;

use WP_Query;

class BuildCustomPagination
{
    private int      $big = 99999999999;
    private WP_Query $qry;

    public function __construct()
    {
        global $wp_query;
        $this->qry = $wp_query;
        $this->getPagination();
    }

    public function getPagination(): array
    {
        return $this->paginateLinks();
    }

    private function paginateLinks(): array
    {
        $paginated_links = paginate_links(
            [
                // Replace the page number in the URL with %#%.
                'base'      => str_replace($this->big, '%#%', esc_url(get_pagenum_link($this->big))),
                // Add the paged parameter to the URL.
                'format'    => '?paged=%#%',
                // Get the current page number.
                'current'   => max(1, get_query_var('paged')),
                // Return an array of links.
                'type'      => 'array',
                // Set the text for the previous page link.
                'prev_text' => '&larr;',
                // Set the text for the next page link.
                'next_text' => '&rarr;',
                // Get the total number of pages.
                'total'     => $this->qry->max_num_pages,
            ]
        );

        return $paginated_links ?: [];
    }
}
