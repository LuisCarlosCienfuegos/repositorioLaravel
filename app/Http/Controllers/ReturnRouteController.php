<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReturnRouteController extends Controller
{
    public function index()
    {
        return route('nameUno');
    }
}
