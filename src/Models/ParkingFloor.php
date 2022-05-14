<?php

namespace Models;

class ParkingFloor
{
    private int $number;

    /** @var ParkingSlot[]  */
    public array $slots = [];

    public function __construct(int $slotCount, public int $height)
    {
        for ($i = 1; $i <= $slotCount; $i++) {
            array_push($this->slots, new ParkingSlot($this, $i));
        }
    }

    public function setNumber(int $number)
    {
        $this->number = $number;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function vehicleFitsHeight(Vehicle $vehicle): bool
    {
        return $this->height >= $vehicle->getAvgHeight();
    }
}
