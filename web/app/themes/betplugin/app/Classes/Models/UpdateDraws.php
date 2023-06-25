<?php

namespace App\Classes\Models;

use App\Classes\Models\GetDraws;
use DateTime;
// date_default_timezone_set("Europe/Stockholm");

/**
 * UpdateDraws class provides a static method to manipulate and update draw data to suite display needs
 */
class UpdateDraws
{
    /**
     * A cached array of updated draws
     * @var array|null
     */
    protected static $updatedDraws = null;


    /**
     * Calculate how much time is left untill closing
     * Convert date object to a formatted string
     *
     * @param DateTime $time_end_object The closing time converted to DateTime object
     *
     * @return string Formatted interval string.
     */
    private function countdownTimer($time_current, $time_end)
    {
        $time_current_obj = new DateTime($time_current);
        $time_end_obj = new DateTime($time_end);
        $difference = $time_current_obj->diff($time_end_obj);

        //  Format an interval to show all existing components.
        $result = "";
        if ($difference->i) {
            $result = $difference->format("%r%i min ");
        }
        if ($difference->h) {
            $result = $difference->format("%r%h h %i min");
        }
        if ($difference->d) {
            $result = $difference->format("%r%d d %h h %i min");
        }

        return $result;
    }

    /**
     * Convert given time to desired format
     * Convert date object to a formatted string
     * Check if the date is today
     * If so return date with "Idag" in it (meaning "today")
     *
     * @param DateTime $date The closing time converted to DateTime object
     *
     * @return string Formatted date string.
     */
    private function formatTime($givenTime, $format, $current_time = null)
    {
        $date = new DateTime($givenTime);
        if (!is_null($current_time)) {
            $closeTime_compare = $date->format('Y-j-m');
            $currentDate = $current_time->format('Y-j-m');

            // Check if it's the same day
            if ($closeTime_compare === $currentDate) {
                return "Idag " . $date->format('H:i');
            }
        }
        return $date->format($format);
    }
    /**
     * Check if json encoded
     *
     *
     * @return bool if it is encoded then true, else false
     */
    function isJsonEncoded($string)
    {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }

    /**
     * Update raw draws data for desired display format.
     * @return array An array of updated draws that can be displayed in the products widget
     */
    public function updateDraws(): array
    {
        // Raw draws fromt Svenska API
        $getDraws = new GetDraws();
        $draws = json_decode(json_encode($getDraws->getDraws()), true);

        $current_time = current_datetime();

        for ($k = 0; $k < count($draws); $k++) {
            // Decode json encoded data
            $draws[$k] = array_map(function ($val) {
                return $this->isJsonEncoded($val) ? json_decode($val) : $val;
            }, $draws[$k]);

            $close_time = $draws[$k]['closeTime'];
            // Close time in desired format to display
            $draws[$k]['closeTimeFormatted'] = $this->formatTime($close_time, 'j M H:i', $current_time);

            // Product name to display
            $draw_name = $draws[$k]['description'] ?: $draws[$k]['productName'];
            $draws[$k]['displayName'] = $draw_name . ' ' . $this->formatTime($close_time, 'o-m-j');

            // Format thousands to have a space
            $turnover = number_format(floatval($draws[$k]['turnover']), 2, ',', ' ');
            $draws[$k]['turnover'] = $turnover;

            // Product name to lower case for images
            $draws[$k]['productName'] = strtolower($draws[$k]['productName']);
            
            $draws[$k]['countDownTime'] = $this->countdownTimer($current_time->format("Y-m-d H:i"), $close_time);
        }


        // Sort ascending by time
        for ($i = 0; $i < count($draws) - 1; $i++) {

            for ($j = 0; $j < count($draws) - 1; $j++) {
                if (strtotime($draws[$j]['closeTime']) > strtotime($draws[$j + 1]['closeTime'])) {
                    $temp = $draws[$j + 1];
                    $draws[$j + 1] = $draws[$j];
                    $draws[$j] = $temp;
                }
            }
        }

        return $draws;
    }
}
