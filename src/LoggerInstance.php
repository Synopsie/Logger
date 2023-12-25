<?php
declare(strict_types=1);

namespace logger;

class LoggerInstance {
    private static Logger $logger;

    public static function get() : Logger {
        if(!isset(self::$logger)) {
            self::$logger = new SimpleLogger();
        }
        return self::$logger;
    }

    public static function set(Logger $logger) : void {
        self::$logger = $logger;
    }

}