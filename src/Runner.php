<?php

namespace Hexlet\Php\Runner;

require __DIR__ . '/../vendor/autoload.php';

use Tightenco\Support\Collection;

function run()
{
    $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
        return strtoupper($name);
    });
        return $collection;
}
