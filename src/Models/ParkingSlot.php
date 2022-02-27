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

    public function getOccupiedSize(): int
    {
        $ret = 0;
        foreach ($this->vehicles as $vehicle) {
            var_dump($ret, $vehicle->getSize(), $ret + $vehicle->getSize());
            $ret = $ret + $vehicle->getSize();
        };
        return $ret;
    }

    public function isAvailable(Vehicle $vehicle): bool
    {
        return empty($this->vehicle)
            && $this->floor->height >= $vehicle->getAvgHeight()
            && ($this->getOccupiedSize() + $vehicle->getSize()) <= 1;
    }
}
