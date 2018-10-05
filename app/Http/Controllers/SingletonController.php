<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingletonController extends Controller
{
    public function index() {

        $first = resolve('singleton');
        $second = resolve('singleton');
        $first->name = "First singleton";
        $second->name = "Second singleton ";
        echo $first->name;
        echo $second->name;
    }

}
