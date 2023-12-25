<?php
declare(strict_types=1);

namespace logger;

use Throwable;

class SimpleLogger implements Logger {

    public function log(string $level, string $message) : void {
        echo sprintf('[%s] %s', strtoupper($level), $message) . PHP_EOL;
    }
    public function logThrowable(Throwable $throwable) : void {
        $this->log(Logger::ERROR, $throwable->getMessage());
    }
    public function info(string $message) : void {
        $this->log(Logger::INFO, $message);
    }
    public function notice(string $message) : void {
        $this->log(Logger::NOTICE, $message);
    }
    public function warning(string $message) : void {
        $this->log(Logger::WARNING, $message);
    }
    public function error(string $message) : void {
        $this->log(Logger::ERROR, $message);
    }
    public function debug(string $message) : void {
        $this->log(Logger::DEBUG, $message);
    }

}