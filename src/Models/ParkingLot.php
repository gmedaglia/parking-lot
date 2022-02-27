<?php

namespace Models;

use Exceptions\NoSlotAvailableException;

class ParkingLot
{
    /** @var ParkingFloor[]  */
    public array $floors = [];

    public function getFloor(int $floor): ParkingFloor
    {
        return $this->floors[$floor - 1];
    }

    public function parkVehicle(Vehicle $vehicle): ParkingSlot
    {
        foreach ($this->floors as $floor) {
            foreach ($floor->slots as $slot) {
                if ($slot->isAvailable($vehicle)) {
                    $slot->parkVehicle($vehicle);
                    return $slot;
                }
            }
        }

        throw new NoSlotAvailableException;
    }

    public function __toString(): string
    {
        $str = '';
        foreach ($this->floors as $floor) {
            $str .= "FLOOR $floor->number: " . PHP_EOL;
            foreach ($floor->slots as $slot) {
                $str .= "SLOT $slot->key: {$slot->getOccupiedSize()}." . PHP_EOL;
            }
        }

        return $str;
    }
}
