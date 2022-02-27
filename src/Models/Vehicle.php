<?php

namespace Models;

abstract class Vehicle
{
    public function __construct()
    {
    }

    abstract function getType(): string;
    abstract function getAvgHeight(): int;
    abstract function getSize(): float;
}
