<?php

namespace Crater;

class FileLogger extends Logger
{
    private string $filepath;

    public function __construct(string $filepath)
    {
        $this->filepath = $filepath;   
    }

    public function createLogWritter(): LogWritter
    {
        return new FileLogWritter($this->filepath);
    }
}
