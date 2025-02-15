<?php

namespace Yiisoft\Profiler\Tests\Logger;

use Psr\Log\AbstractLogger;

class ArrayLogger extends AbstractLogger
{
    private $messages = [];

    public function log($level, $message, array $context = array())
    {
        $this->messages[$level][$message] = $context;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }
}
