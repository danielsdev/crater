<?php

namespace Crater;

class FileLogWritter implements LogWritter
{
    private $file;
    public function __construct(string $filepath, string $mode = 'a+')
    {
        $this->file = fopen($filepath, $mode);
    }

    public function write(string $message): void
    {
        fwrite($this->file, $message.PHP_EOL);
    }

    public function __destruct()
    {
        fclose($this->file);
    }
}
