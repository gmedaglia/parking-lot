<?php

namespace Models;

class Car implements Vehicle
{
    public function getType(): string
    {
        return 'Car';
    }

    public function getAvgHeight(): int
    {
        return 10;
    }

    public function getSize(): float
    {
        return 1;
    }
}
