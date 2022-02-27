<?php

namespace Models;

class ParkingFloor
{
    /** @var ParkingSlot[]  */
    public array $slots = [];

    public function __construct(public int $number, int $slotCount, public int $height)
    {
        for ($i = 1; $i <= $slotCount; $i++) {
            array_push($this->slots, new ParkingSlot($this, $i));
        }
    }
}
