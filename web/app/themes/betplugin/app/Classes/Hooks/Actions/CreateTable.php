<?php

namespace App\Classes\Hooks\Actions;

/**
 * This class creates a table to store draws
 */
class CreateTable
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        add_action('after_switch_theme', [
            $this,
            'createTable',
        ]);
    }

    /**
     * Creates a table to store draws
     */
    public function createTable()
    {
        global $wpdb;
        // set the default character set and collation for the table
        $charset_collate = $wpdb->get_charset_collate();
        // Check that the table does not already exist before continuing
        $sql = "CREATE TABLE IF NOT EXISTS `{$wpdb->base_prefix}draws` (
            betIndex INT,
            description VARCHAR(255),
            drawComment VARCHAR(255),
            extraInfo VARCHAR(255),
            drawState VARCHAR(255),
            fund VARCHAR(255),
            lastDateWithoutTimeOfDay VARCHAR(255),
            events TEXT,
            jackpotItems VARCHAR(255),
            productName VARCHAR(255),
            productId INT,
            drawNumber INT,
            openTime DATETIME, 
            closeTime DATETIME,
            turnover TEXT,
            sport VARCHAR(255),
            sportId INT,
            checksum VARCHAR(255)
        ) $charset_collate;";
        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        dbDelta($sql);
        $is_error = empty($wpdb->last_error);
        return $is_error;
    }
}
