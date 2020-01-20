<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LOM_General extends Model
{
    protected $table = 'lom_general';

    protected $primaryKey = 'id';

    protected $fillatable = [
        'id_oa',
        'lom_genambito',
        'lom_gendescripcion',
        'lom_genpalabra_clave',
        'lom_gentitulo'
    ];

    public function oa(){
        return $this->belongsTo('App\OA', 'id_oa', 'id');
    }
}
