<?php

use Illuminate\Support\Collection;

require_once(__DIR__ . '/vendor/autoload.php');

Collection::macro('sliceOff', function ($count) {
    $sliced = $this->slice(0, $count)->values();
    $this->items = $this->slice($count)->values()->all();
    return $sliced;
});