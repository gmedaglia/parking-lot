<?php

namespace Models;

class Motorcycle implements Vehicle
{
    public function getType(): string
    {
        return 'Motorcycle';
    }

    public function getAvgHeight(): int
    {
        return 8;
    }

    public function getSize(): float
    {
        return 0.5;
    }
}
