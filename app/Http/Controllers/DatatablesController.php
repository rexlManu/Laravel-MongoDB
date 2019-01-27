<?php

namespace App\Http\Controllers;

use App\Car;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;

class DatatablesController extends Controller
{
    public function cars()
    {
        return Laratables::recordsOf(Car::class);
    }
}
