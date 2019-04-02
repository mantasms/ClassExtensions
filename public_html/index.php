<?php

class Girl {

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
        return 'Eik nx';
    }

}
