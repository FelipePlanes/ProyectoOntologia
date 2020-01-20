<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\LOM_Educativo;
use App\LOM_General;
use App\LOM_Clasificacion;
use App\LOM_Tecnica;

class OA extends Model
{
    protected $table = 'oa';

    protected $primaryKey = 'id';

    protected $fillatable = [

        'id_educativo',
        'id_general',
        'id_clasificacion',
        'id_tecnica'
        
    ];

    public function lom_educativo(){
        return $this->hasOne('App\LOM_Educativo', 'id_oa');
    }

    public function lom_general(){
        return $this->hasOne('App\LOM_General', 'id_oa');
    }

    public function lom_clasificacion(){
        return $this->hasOne('App\LOM_Clasificacion', 'id_oa');
    }

    public function lom_tecnica(){
        return $this->hasOne('App\LOM_Tecnica', 'id_oa');
    }

    public function oa_visitados(){
        return $this->hasOne('App\OA_Visitados', 'id_oa');
    }

    /*REVISAR*/
    
}
