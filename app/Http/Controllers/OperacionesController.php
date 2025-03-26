<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function suma($x, $y)
    {
        return $x + $y;
    }

    public function sumaConValidacion($x, $y)
    {
        return $x + $y;
    }
}
