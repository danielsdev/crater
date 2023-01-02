<?php

namespace Crater;

class StdoutLogWritter implements LogWritter
{
    public function write(string $message): void
    {
        fwrite(STDOUT, $message . PHP_EOL);
    }
}
