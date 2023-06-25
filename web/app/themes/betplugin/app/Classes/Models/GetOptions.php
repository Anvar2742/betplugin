<?php

namespace App\Classes\Models;

/**
 * GetOptions class provides a static method to retrieve and cache ACF options fields.
 */
abstract class GetOptions
{
    /**
     * A cached array of ACF options fields.
     * @var array|null
     */
    protected static $options = null;

    /**
     * Retrieve and cache ACF options fields.
     * @return array An array of ACF options fields.
     */
    public static function getOptions(): array
    {
        // Check if options have already been retrieved and cached.
        if (!isset(self::$options)) {
            // Retrieve ACF options fields.
            self::$options = get_fields('options');

            // Ensure that options is an array, even if no fields were found.
            if (!is_array(self::$options)) {
                self::$options = [];
            }
        }

        // Return the cached options.
        return self::$options;
    }
}
