<?php

namespace Core\Classes;

class extends Cookie {

    protected $name;

    abstract public function __construct(string $name): void;
}
