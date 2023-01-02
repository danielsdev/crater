<?php

namespace Crater;

class StdoutLogger extends Logger
{
    public function createLogWritter(): LogWritter
    {
        return new StdoutLogWritter();
    }
}
