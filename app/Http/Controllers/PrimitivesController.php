<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Vehicle;

class PrimitivesController extends Controller
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
      $this->name = $name;
      $this->age = $age;
    }

    public function index() {
      echo $this->name;
      echo $this->age;
    }
}
