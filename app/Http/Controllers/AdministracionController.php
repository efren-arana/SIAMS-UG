<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministracionController extends Controller
{
    public function asociacion()
    {
        return view('administracionasociacion');
    }
}
