<?php

namespace App\Classes\Controllers;

use Illuminate\Support\Facades\Http;

class BuildFetchApi
{

    public function __construct($product)
    {
        $this->getFetchData($product);
    }

    public function getFetchData($product)
    {
        $API_KEY = getenv("SVENSKA_API_KEY");
        $BASE_URL = getenv("BASE_URL");
        // to env the url
        $url = $BASE_URL . $product . '/draws';
        $response = Http::get($url, [
            'accesskey' => $API_KEY,
        ]);

        return $response->json();
    }
}
