<?php

namespace Models;

interface Vehicle
{
    public function getType(): string;
    public function getAvgHeight(): int;
    public function getSize(): float;
}
