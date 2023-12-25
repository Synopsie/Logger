<?php
declare(strict_types=1);

namespace logger;

use Throwable;

class PrefixedLogger extends SimpleLogger {

    private Logger $logger;
    private string $prefix;

    public function __construct(
        Logger $logger,
        string $prefix
    ) {
        $this->logger = $logger;
        $this->prefix = $prefix;
    }

    public function log(string $level, string $message) : void {
        $this->logger->log($level, sprintf('[%s] %s', $this->prefix, "$this->prefix $message"));
    }

    public function logThrowable(Throwable $throwable) : void {
        $this->logger->logThrowable($throwable);
    }

    public function setPrefix(string $prefix) : void {
        $this->prefix = $prefix;
    }

}