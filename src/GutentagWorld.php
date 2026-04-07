<?php

declare(strict_types=1);

namespace GutentagWorld;

function gutentag_world(): string
{
    return 'Gutentag, World!';
}

if (php_sapi_name() === 'cli' && realpath(__FILE__) === realpath($_SERVER['SCRIPT_FILENAME'] ?? '')) {
    echo gutentag_world() . PHP_EOL;
}
