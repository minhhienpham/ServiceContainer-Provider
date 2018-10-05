<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstanceController extends Controller
{
    public function index() {

        $instance = resolve('instance');
        $instance->name = 'abc';

        echo $instance->name;
        $instance2 = resolve('instance');
        echo $instance2->name;

        // $first = resolve('instance');
        // $second = resolve('instance');
        // $first->name = 'First instance';
        // $second->name = 'Second instance ';
        // echo $first->name;
        // echo $second->name;
    }
}
