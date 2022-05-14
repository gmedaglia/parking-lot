<?php

namespace Models;

class Truck implements Vehicle
{
    public function getType(): string
    {
        return 'Truck';
    }

    public function getAvgHeight(): int
    {
        return 15;
    }

    public function getSize(): float
    {
        return 1;
    }
}
