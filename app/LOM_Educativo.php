<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LOM_Educativo extends Model
{
    protected $table = 'lom_educativo';

    protected $primaryKey = 'id';

    protected $fillatable = [
        
        'id_oa',
        'lom_educdescripcion',
        'lom_educnivel_interactividad',
        'lom_eductipo_interactividad',
        'lom_educrecurso_educativo'
    ];

    public function oa(){
        return $this->belongsTo('App\OA', 'id_oa', 'id');
    }

}
