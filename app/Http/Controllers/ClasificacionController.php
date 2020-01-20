<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClasificacionController extends Controller
{
    //

    public function lom_clasificacion(){
        
        return (LOM_Clasificacion::get());
    }
}
