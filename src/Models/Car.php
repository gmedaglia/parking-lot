<?php

namespace Models;

class Car extends Vehicle
{
    function getType(): string
    {
        return 'Car';
    }

    function getAvgHeight(): int
    {
        return 10;
    }

    function getSize(): float
    {
        return 1;
    }
}
