<?php
/**
 * viewHelpers.php
 * 
 * Defines some helper functions useful for formatting data when rendering views
 */

if (!function_exists('format_currency')) {
    /**
     * Function format_currency
     * Takes a decimal value and returns it rounded to exactly two decimal places, with a comma as the thousands
     * separator, and with a dollar sign at the front. 
     * 
     * @param $value
     * @return string
     */
    function format_currency($value)
    {
        return '$' . number_format(round($value, 2), 2);
    }
}

if (!function_exists('format_date')) {
    /**
     * Function format_date
     * 
     * Takes a date string compatible with PHP's DateTime class and returns it formatted into dd/mm/yyyy format
     * 
     * @param $date
     * @return string
     */
    function format_date($date)
    {
        $dateObj = new DateTime($date);
        return $dateObj->format('d/m/Y');
    }
}