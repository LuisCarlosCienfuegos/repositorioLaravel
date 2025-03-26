<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NombreController extends Controller
{
    public function nombreObligatorio($nombre = "Luis")
    {
        return "tu nombre es: ".$nombre;
    }

    public function nombreOpcional($nombre = "Luis")
    {
        return "tu nombre es: ".$nombre;
    }

    public function nombreConValidacion($nombre = "Luis")
    {
        return "tu nombre es: ".$nombre;
    }
}
