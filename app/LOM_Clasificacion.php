<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LOM_Clasificacion extends Model
{
    protected $table = 'lom_clasificacion';

    protected $primaryKey = 'id';

    protected $fillatable = [
        
        'id_oa',
        'lom_cladescripcion',
        'lom_clapalabra_clave',
        'lom_claproposito'
    ];

    public function oa(){
        return $this->belongsTo('App\OA', 'id_oa', 'id');
    }
}
