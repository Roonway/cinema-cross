<?php

namespace common\helpers;

use DateTime;

class DateHelper
{

    /**
     * @param mixed $date
     * @return string
     * @throws \Exception
     */
    public static function RegistrationDate($date)
    {
        $dateFormatted = new DateTime();

        if (is_int($date)) {
            $dateFormatted->setTimestamp($date);
        } else {
            $dateFormatted = $date;
        }

        return $dateFormatted->format('M \d\e Y');
    }
}