<?php
class SmartDate {
    private $date;

    public function __construct($date) {
        $this->date = new DateTime($date);
    }

    public function isWeekend() {
        $dayOfWeek = $this->date->format('N');
        return $dayOfWeek >= 6;
    }

    public function getDifference($unit) {
        $now = new DateTime();
        $interval = $now->diff($this->date);
        return $interval->$unit;
    }

    public function isLeapYear() {
        $year = $this->date->format('Y');
        return (($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0);
    }
}