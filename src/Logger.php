<?php
declare(strict_types=1);

namespace logger;

use Throwable;

interface Logger {

    const INFO = 'info';
    const NOTICE = 'notice';
    const WARNING = 'warning';
    const ERROR = 'error';
    const DEBUG = 'debug';

    /**
     * - Cette fonction est une fonction principale qui permet d'envoyer un message dans la console.
     *
     * @param string $level
     * @param string $message
     * @return void
     */
    public function log(string $level, string $message) : void;

    /**
     * - Cette fonction permet d'envoyer un message dans la console en cas d'erreur (Throwable).
     *
     * @param Throwable $throwable
     * @return void
     */
    public function logThrowable(Throwable $throwable) : void;

    public function info(string $message) : void;

    public function notice(string $message) : void;

    public function warning(string $message) : void;

    public function error(string $message) : void;

    public function debug(string $message) : void;

}