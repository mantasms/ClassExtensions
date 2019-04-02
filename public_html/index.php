<?php

class Girl {

    protected $age;

    public function __construct($age) {
        $this->age = $age;
    }

    public function beSmart() {
        return 'Im smart';
    }

    public function beBeautiful() {
        return 'Im beautiful';
    }

}

class Girlfriend extends Girl {

    public function pistiProta() {
        return 'ka ten palaikinai FB?';
    }

}

class Wife extends Girlfriend {

    public function pistiProta() {
        return 'Miegosi balkone!';
    }

}

class HorribleWife extends Girlfriend {

    public function pistiProta() {
        return parent::pistiProta() . ' Surasi mane pas Petra!';
    }

}

class Boy {

    public function winArgument() {
        return 'You won. Congrats';
    }

}

class Boyfriend extends Boy {

    public function winArgument() {
        $rand = rand(0, 1);
        if ($rand) {
            return 'Not this time!'
        }
    }

}

$girl = new HorribleWife(30);
print $girl->pistiProta();
var_dump($girl);
?>