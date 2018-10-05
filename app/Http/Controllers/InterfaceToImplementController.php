<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Vehicle;

class InterfaceToImplementController extends Controller
{
    public function index(Vehicle $vehicle)
    {
        $vehicle->run();
    }
}
