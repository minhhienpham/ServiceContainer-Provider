<?php

namespace App\Models;

use App\Contracts\Vehicle;

class Car implements Vehicle {

  public function run() {
    echo 'This is a car.';
  }

}
