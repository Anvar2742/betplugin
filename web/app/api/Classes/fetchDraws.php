<?php

/**
 * FetchDraws class provides a static method to fetch draws from Svenska API.
 */
class FetchDraws
{
    /**
     * A cached array of draws
     * @var array|null
     */
    protected static $draws = null;

    /**
     * Fetch data from API.
     * @return array An array of draws from the Svenska API.
     */
    public static function fetchDraws(): array
    {
        $dirUpOne = dirname(__DIR__, 1);
        $dotenv = Dotenv\Dotenv::createImmutable($dirUpOne);
        $dotenv->load();

        // Array of draws
        $draws = [];
        // Array of products names
        $product_names = ['stryktipset', 'europatipset', 'topptipset', 'powerplay', 'bomben'];

        function fetchData($product)
        {
            $dirUpOne = dirname(__DIR__, 1);

            // Create log folder if doesn't exist
            $filename = $dirUpOne . '/log/error.log';
            $dirname = dirname($filename);
            if (!is_dir($dirname)) {
                mkdir($dirname, 0755, true);
            }

            // Open error log file
            $errorLog = fopen($dirUpOne . "/log/error.log", 'a');

            // Init datetime
            $datetime = new DateTime();
            $datetimeFormat = $datetime->format('d/m/Y G:i');

            // API endpoint
            $url = $_ENV['BASE_URL'] . $product . '/draws';

            // API request parameters
            $params = [
                "accesskey" => $_ENV['SVENSKA_API_KEY'],
            ];

            // Initialize cURL
            $curl = curl_init();

            // Set cURL options
            curl_setopt_array($curl, [
                CURLOPT_URL => $url . "?" . http_build_query($params),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
            ]);

            // Execute cURL request
            $response = curl_exec($curl);

            // Check for errors
            if ($response === false) {
                $errMsg = $datetimeFormat . " cURL error: " . curl_error($curl) . PHP_EOL;
                fwrite($errorLog, $errMsg);

                exit();
            }

            // Parse JSON response
            $data = json_decode($response, true);

            // Check for API errors
            if (isset($data["error"])) {
                $errMsg = $datetimeFormat . " API error: " . PHP_EOL . print_r($data["error"], true)  . PHP_EOL . "######" . PHP_EOL;
                fwrite($errorLog, $errMsg);
                exit();
            }

            // Close cURL
            curl_close($curl);
            return $data;
        }

        $draw_key = 0;
        // for each product name fetch data
        foreach ($product_names as $product) {
            // Fetch product data using its name as the argument
            $response = fetchData($product);

            if (empty($response['error'])) {
                for ($i = 0; $i < count($response['draws']); $i++) {
                    if (!empty($response['draws'][$i])) {
                        $draws[$draw_key] = $response['draws'][$i];
                        $draw_key++;
                    }
                }
            }
        }

        return $draws;
    }
}
