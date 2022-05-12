<?php

include 'autoload.php';

use Exceptions\NoSlotAvailableException;
use Models\Car;
use Models\Motorcycle;
use Models\ParkingFloor;
use Models\ParkingLot;
use Models\Truck;

$parkingLot = new ParkingLot;

array_push($parkingLot->floors, new ParkingFloor(1, 10, 15));
array_push($parkingLot->floors, new ParkingFloor(2, 10, 10));

for ($i = 1; $i <= 7; $i++) {
    $motorcycle = new Motorcycle;
    try {
        $slot = $parkingLot->parkVehicle($motorcycle);
        echo "Motorcycle parked at floor {$slot->floor->number} slot $slot->key" . PHP_EOL;
    } catch (NoSlotAvailableException $e) {
        echo $e->getMessage() . PHP_EOL;
    }
}

for ($i = 1; $i <= 10; $i++) {
  $car = new Car;
  try {
      $slot = $parkingLot->parkVehicle($car);
      echo "Car parked at floor {$slot->floor->number} slot $slot->key" . PHP_EOL;
  } catch (NoSlotAvailableException $e) {
      echo $e->getMessage() . PHP_EOL;
  }
}
