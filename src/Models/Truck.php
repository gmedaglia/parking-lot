<?php

namespace Models;

class Truck extends Vehicle
{
    function getType(): string
    {
        return 'Truck';
    }

    function getAvgHeight(): int
    {
        return 15;
    }

    function getSize(): float
    {
        return 1;
    }
}
