<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OAController extends Controller
{
    //

    public function OA(){

        //return (LOM_OA::get());

        $records = OA::with('lom_general','lom_clasificacion','lom_educacion','lom_tecnica')->get();
    }
}
