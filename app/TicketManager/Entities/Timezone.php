<?php
namespace TicketManager\Entities;

use Faker\Provider\DateTime;

class Timezone {
    static function convert($date, $input_timezone, $output_timezone, $format){
        $utc_time = $date;
        $date_obj = new DateTime($utc_time, new DateTimeZone($input_timezone));
        $date_obj->setTimezone(new DateTimeZone($output_timezone));
        return $date_obj->format($format);
    }
}