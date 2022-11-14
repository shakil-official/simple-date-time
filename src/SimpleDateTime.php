<?php

namespace Shakil\SimpleDateTime;


use DateTime;

class SimpleDateTime extends DateTime
{
    /**
     * @param $value
     * @param $operator
     * @param $operateBy
     * @return void
     */
    public function commonModify($value = 1, $operator = '+', $operateBy = 'days')
    {
        $this->modify($operator . $value . $operateBy);

    }

    /**
     * @return SimpleDateTime
     */
    public static function now()
    {
        return new SimpleDateTime();
    }

    /**
     * @param $timezone
     * @return $this
     */
    public function timezone($timezone = 'UTC')
    {
        $this->setTimezone(new \DateTimeZone($timezone));
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function addDays($value = 1)
    {
        $this->commonModify($value);
        return $this;
    }


    /**
     * @param $value
     * @return $this
     */
    public function subDays($value = 1)
    {
        $this->commonModify($value, '-');
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function addMonths($value = 1)
    {
        $this->commonModify($value, '+', 'month');
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function subMonths($value = 1)
    {
        $this->commonModify($value, '-', 'month');
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function addYears($value = 1)
    {
        $this->commonModify($value, '+', 'year');
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function subYears($value = 1)
    {
        $this->commonModify($value, '-', 'year');
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function addMinute($value = 1)
    {
        $this->commonModify($value, '+', 'minutes');
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function subMinute($value = 1)
    {
        $this->commonModify($value, '-', 'minutes');
        return $this;
    }


    /**
     * @param $value
     * @return $this
     */
    public function addHour($value = 1)
    {
        $this->commonModify($value, '+', 'hour');
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function subHour($value = 1)
    {
        $this->commonModify($value, '-', 'hour');
        return $this;
    }


    public function interval($value)
    {
        try {
            $this->add(new \DateInterval($value));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return $this;
    }

    public function toDateTimeString($format = 'Y-m-d')
    {
        return $this->format($format);
    }

}
