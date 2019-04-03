<?php

namespace App;

class SensorFartHumidity extends Abstracts\Sensor {

    public function read() {
        return rand(0, 100) . ' %';
    }

}
