<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Example;

class BindController extends Controller
{
    public function index() {
        
        $computer = resolve('bind');
        $computer->name ='Bind example';
        echo $computer->name;


        // $student = app()->make(Example::class);
        // $student = app();
        // $student = app()['Student'];
        // echo $student;


        // $computer = app('App\Models\Example');
        // $computer->name ='My Computer';
        // echo $computer->name;


        // $first = resolve('bind');
        // $second = resolve('bind');
        // $first->name ='First Computer. ';
        // $second->name = 'Second Computer';
        // echo $first->name;
        // echo $second->name;
    }
}
