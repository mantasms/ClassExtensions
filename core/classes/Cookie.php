<?php

namespace Core\Classes;

abstract class Cookie {

    protected $name;

    abstract public function __construct(string $name): void;
}
