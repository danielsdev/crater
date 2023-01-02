<?php

namespace Crater;

interface LogWritter
{
    public function write(string $message): void;
}
