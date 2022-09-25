<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

    /**
     * Other Resources:
     * https://www.w3schools.com/php/php_ref_date.asp
     * https://www.php.net/manual/en/datetime.format.php
     */

    /* Date Today ('Y-m-d')
     * get the date today , the default format is Y-m-d H:i:s or you can specify the format you want using the $format parameter
     * For more format options Goto: https://www.php.net/manual/en/datetime.format.php
     */
        function date_today($format='Y-m-d H:i:s')
        {
            return date($format);
        }

    /* Change Format of a Date
     * 
     */
        function change_date_format($date, $format='l, F j, Y') // default format is l, F j, Y (e.i.: Thu, December 5, 2021)
        {
            if($date=='')
                return null;
            else
                return date($format, strtotime($date));
        }

    /* Count Date - count the remaining days from datenow to a specific date
     * 
     */
        function count_date($until)
        {
            $d1=strtotime($until);
            return ceil(($d1-time())/60/60/24);
        }

    /* Add Days,Months,Weeks,or Years
     * 
     */
        function add_date($date, $num = 1, $type='days', $format='Y-m-d H:i:s') //type = days,months,weeks,years
        {
            $date=date_create($date);
            date_add($date,date_interval_create_from_date_string("$num $type"));
            return date_format($date,$format);
        }
    /* Add Days,Months,Weeks,or Years
     * 
     */
        function sub_date($date, $num = 1, $type='days', $format='Y-m-d H:i:s') //type = days,months,weeks,years
        {
            $date=date_create($date);
            date_sub($date,date_interval_create_from_date_string("$num $type"));
            return date_format($date,$format);
        }
    /* Substract Days,Months,Weeks,or Years
     * 
     */
        function sub_date_current($num = 1, $type='days', $format='Y-m-d H:i:s') //type = days,months,weeks,years
        {
            $d=strtotime("-" + $num + " " + $type); // "-2 days"
            return date($format, $d);
        }

    /**
     * Get last day of the month
     */

     function last_day_of_month($date, $format = 'Y-m-t')
     {
        $lastDateOfMonth = date($format, strtotime($date));
        return $lastDateOfMonth;
     }

     function last_year($format = 'Y-m-t')
     {
        $d=strtotime("-365 days"); // "-2 days"
        return date($format, $d);
     }


?>