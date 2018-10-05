<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Vehicle;

class CarController extends Controller
{
    public $vehicle;

    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function index() {
        $this->vehicle->run();
    }
}
