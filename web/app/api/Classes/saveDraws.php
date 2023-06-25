<?php

/**
 * SaveDraws class provides a static method to save draws to the DB.
 */
class SaveDraws
{
    /**
     * Save fetched data from Svenska API to the DB
     */
    public static function saveDraws($draws)
    {
        $dirUpOne = dirname(__DIR__, 1);
        $dotenv = Dotenv\Dotenv::createImmutable($dirUpOne);
        $dotenv->load();

        // Open error log files
        $errorLog = fopen($dirUpOne . "/log/error.log", 'a');
        $statusLog = fopen($dirUpOne . "/log/status.log", 'a');

        // Init datetime
        $datetime = new DateTime();
        $datetimeFormat = $datetime->format('d/m/Y G:i');

        // Database credentials
        $servername = "localhost";
        $username = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASSWORD'];
        $dbname = $_ENV['DB_NAME'];

        // // Create connection
        mysqli_report(MYSQLI_REPORT_STRICT);

        try {
            $conn = new mysqli($servername, $username, $password, $dbname);
        } catch (Exception $e) {
            $errMsg = $datetimeFormat . " Connection failed: " . $e->getMessage() . PHP_EOL;
            fwrite($errorLog, $errMsg);
            exit;
        }

        $sql = "DELETE FROM wp_draws;";

        // Execute SQL statement
        if ($conn->query($sql) === TRUE) {
            $statMsg = $datetimeFormat . " wp_draws cleaned rows successfully" . PHP_EOL;
            fwrite($statusLog, $statMsg);
        } else {
            $errMsg = $datetimeFormat . " Error: " . $sql . "<br>" . $conn->error . PHP_EOL;
            fwrite($errorLog, $errMsg);
        }

        if (is_array($draws)) {
            foreach ($draws as $draw) {
                // temporal for development
                $draw = json_decode(json_encode($draw), true);
                // Prepare SQL statement
                $columns = implode(", ", array_keys($draw));

                $escaped_values = array_map(function ($value) use ($conn) {
                    return is_string($value) ? $conn->real_escape_string($value) : $value;
                }, array_values($draw));

                $values  = implode(', ', array_map(function ($val) {
                    $val = is_array($val) ? json_encode($val) : $val;
                    return "'" . $val . "'";
                }, $escaped_values, array_keys($escaped_values)));

                $sql = "INSERT INTO wp_draws ($columns) VALUES ($values);";

                // Execute SQL statement
                if ($conn->query($sql) === TRUE) {
                    $statMsg = $datetimeFormat . " Data saved successfully" . PHP_EOL;
                    fwrite($statusLog, $statMsg);
                } else {
                    $errMsg = $datetimeFormat . " Error: " . $sql . "<br>" . $conn->error . PHP_EOL;
                    fwrite($errorLog, $errMsg);
                }
            }
        } else {
            $errMsg = $datetimeFormat . " Error: array expected, got " . gettype($draws) . " instead." . PHP_EOL;
            fwrite($errorLog, $errMsg);
        }


        // Close connection
        $conn->close();
    }
}
