<?php

namespace App\Providers;

/**
 * AjaxLocalization class provides a static method to localize script variables for use in Ajax requests.
 */
class AjaxLocalization
{
    /**
     * Localize script variables for use in Ajax requests.
     *
     * This method creates an array of script variables to be used in an Ajax request. It includes the URL for admin-ajax.php,
     * the URL for the template directory, and a nonce for security purposes. If the WP_ENV environment variable is set to 'development',
     * the URLs are modified to include the port number 3000.
     *
     * @return array An array of script variables.
     */
    public static function localizeScriptVars(): array
    {
        // Create an array of script variables.
        return [
            'admin_url'   => self::getAdminUrl(),
            'tpl_dir_uri' => self::getTemplateDirectoryUri(),
            'nonce'       => wp_create_nonce('rakes_and_spades'),
        ];
    }

    /**
     * Get the URL for admin-ajax.php, modified for development environments.
     *
     * This method returns the URL for admin-ajax.php. If the WP_ENV environment variable is set to 'development', the URL is modified
     * to include the port number 3000. This is useful for local development environments.
     *
     * @return string The URL for admin-ajax.php.
     */
    private static function getAdminUrl(): string
    {
        // Get the default URL for admin-ajax.php.
        $admin_url = admin_url('admin-ajax.php');

        // Modify the URL for development environments.
        if (getenv('WP_ENV') === 'development') {
            $admin_url = str_replace($_SERVER['HTTP_HOST'], $_SERVER['HTTP_HOST'] . ':3000', $admin_url);
        }

        return $admin_url;
    }

    /**
     * Get the URL for the template directory, modified for development environments.
     *
     * This method returns the URL for the template directory. If the WP_ENV environment variable is set to 'development', the URL is modified
     * to include the port number 3000. This is useful for local development environments.
     *
     * @return string The URL for the template directory.
     */
    private static function getTemplateDirectoryUri(): string
    {
        // Get the default URL for the template directory.
        $tpl_dir_uri = get_template_directory_uri();

        // Modify the URL for development environments.
        if (getenv('WP_ENV') === 'development') {
            $tpl_dir_uri = str_replace($_SERVER['HTTP_HOST'], $_SERVER['HTTP_HOST'] . ':3000', $tpl_dir_uri);
        }

        return $tpl_dir_uri;
    }
}
