<?php

namespace Crater;

abstract class Logger
{
    public function log(string $level, string $message): void
    {
        $logWritter = $this->createLogWritter();

        $nowDate = date('d/m/Y');
        $formattedMessage = "[{$nowDate}][{$level}]: {$message}";

        $logWritter->write($formattedMessage);
    }

    abstract function createLogWritter(): LogWritter;
}
