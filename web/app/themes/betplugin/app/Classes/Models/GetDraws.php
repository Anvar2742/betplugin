<?php

namespace App\Classes\Models;

/**
 * GetDraws class provides a static method to fetch draws from the DB
 */
class GetDraws
{
    /**
     * A cached array of draws
     * @var array|null
     */
    protected static $draws = null;

    /**
     * Fetch data from the DB.
     * @return array An array of draws from the DB.
     */
    public static function getDraws(): array
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'draws';
        $draws = $wpdb->get_results( "SELECT * FROM $table_name");

        return $draws;
    }
}
