<?php

namespace App\Classes\Ajax;

class AjaxTest
{
    public function __construct()
    {
        $this->addAjaxActions();
    }

    public function addAjaxActions()
    {
        add_action('wp_ajax_nopriv_ajaxTest', [
            $this,
            'ajaxTest',
        ]);
        add_action('wp_ajax_ajaxTest', [
            $this,
            'ajaxTest',
        ]);
    }

    public function ajaxTest()
    {
        $params = $_POST['params'];

        if (!$params) {
            wp_send_json_error('Missing parameters');
        }

        wp_send_json_success($params);
    }
}
