<?php

namespace App\Abstracts;

abstract class Sensor {

    protected $reading;

    protected abstract function read();

    protected function getLastReading();
}
