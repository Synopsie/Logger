<?php
declare(strict_types=1);

namespace logger;

use Closure;

interface AttachableLogger extends Logger {

    public function addAttachment(Closure $attachment) : void;

    public function removeAttachment(Closure $attachment) : void;

    public function clearAttachments() : void;

    /**
     * @return array<Closure>
     */
    public function getAttachments() : array;

}