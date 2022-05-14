<?php

namespace Models;

class ParkingSlot
{
    /** @var Vehicle[] */
    private array $vehicles = [];

    public function __construct(public ParkingFloor $floor, public int $key)
    {
    }

    public function parkVehicle(Vehicle $vehicle)
    {
        $this->vehicles[] = $vehicle;
    }

    public function isAvailable(Vehicle $vehicle): bool
    {
        return $this->vehicleFitsWidth($vehicle);
    }

    private function getOccupiedSize(): float
    {
        $ret = (float) 0;
        foreach ($this->vehicles as $vehicle) {
            $ret = $ret + $vehicle->getSize();
        };
        return $ret;
    }

    private function vehicleFitsWidth(Vehicle $vehicle): bool
    {
        $occupiedSize = $this->getOccupiedSize();
        $size = $vehicle->getSize();
        return ($occupiedSize + $size) <= 1;
    }
}
