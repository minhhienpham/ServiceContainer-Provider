
<?php

use App\Contracts\Vehicle;

class TransportService {

  private $vehicle;

  public function __construct(Vehicle $vehicle) {

    $this->vehicle = $vehicle;
  }

  public function transport() {

    $this->vehicle->move();
  }
}

