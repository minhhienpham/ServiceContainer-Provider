<?php

namespace App\Models;

use App\Contracts\Vehicle;

class Bike implements Vehicle {

  public function run() {
    echo 'This is a bike.';
  }
  
}
