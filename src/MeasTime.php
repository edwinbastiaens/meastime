<?php
namespace tolima;

class MeasTime{
    private static $startTime;
    private static $stopTime;
    public static function strt(){
        self::$startTime = self::microtime_float();
        return self::$startTime;
    }

    public static function stop(){
        self::$stopTime = self::microtime_float();
        return self::$stopTime - self::$startTime;
    }

    private static function microtime_float() {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }
}