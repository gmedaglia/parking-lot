<?php

namespace Models;

use Exceptions\NoSlotAvailableException;

class ParkingLot
{
    /** @var ParkingFloor[] $floors */
    public function __construct(private array $floors)
    {
        $this->assignFloorNumbers();
    }

    public function parkVehicle(Vehicle $vehicle): ParkingSlot
    {
        foreach ($this->floors as $floor) {
            if (!$floor->vehicleFitsHeight($vehicle)) {
                continue;
            }
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

    private function assignFloorNumbers()
    {
        foreach ($this->floors as $index => $floor) {
            $floor->setNumber($index + 1);
        }
    }
}
