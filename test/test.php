<?php

require __DIR__ . '/../vendor/autoload.php';

use Crater\StdoutLogger;

$logger = new StdoutLogger();
$logger->LOG('NOTICE', 'test message');