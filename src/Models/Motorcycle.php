<?php

namespace Models;

class Motorcycle extends Vehicle
{
    function getType(): string
    {
        return 'Motorcycle';
    }

    function getAvgHeight(): int
    {
        return 8;
    }

    function getSize(): float
    {
        return 0.5;
    }
}
