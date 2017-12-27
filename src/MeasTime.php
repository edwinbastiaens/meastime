<?php
namespace meastime;

class MeasTime{
    private static $startTime = null;
    private static $stopTime = null;

    public static function strt(){
        self::$startTime = self::microtime_float();
        return self::$startTime;
    }

    public static function stop(){
        self::$stopTime = self::microtime_float();
        if (self::$startTime == null) {
            self::$startTime = self::$stopTime;
        }
        return self::$stopTime - self::$startTime;
    }

    private static function microtime_float() {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }
}