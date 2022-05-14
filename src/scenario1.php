<?php

include 'autoload.php';

use Exceptions\NoSlotAvailableException;
use Models\Car;
use Models\ParkingFloor;
use Models\ParkingLot;
use Models\Truck;

$parkingLot = new ParkingLot([
    new ParkingFloor(1, 10, 15),
    new ParkingFloor(2, 10, 10),
]);

for ($i = 1; $i <= 4; $i++) {
    $car = new Car;
    try {
        $slot = $parkingLot->parkVehicle($car);
        echo "Car parked at floor {$slot->floor->number} slot $slot->key" . PHP_EOL;
    } catch (NoSlotAvailableException $e) {
        echo $e->getMessage() . PHP_EOL;
    }
}

for ($i = 1; $i <= 21; $i++) {
    $vehicle = new Truck;
    try {
        $slot = $parkingLot->parkVehicle($vehicle);
        echo "Truck parked at floor {$slot->floor->number} slot $slot->key." . PHP_EOL;
    } catch (NoSlotAvailableException $e) {
        echo $e->getMessage() . PHP_EOL;
    }
}
