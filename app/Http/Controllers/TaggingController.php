<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaggingController extends Controller
{
    public function index() {
        $tag = resolve('FastFood');
        $tag->showFood();
    }
}
