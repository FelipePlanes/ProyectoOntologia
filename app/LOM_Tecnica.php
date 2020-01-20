<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LOM_Tecnica extends Model
{
    protected $table = 'lom_tecnica';

    protected $primaryKey = 'id';

    protected $fillatable = [

        'id_oa',
        'lom_tecduracion',
        'lom_tecformato',
        'lom_teclocalizacion',
        'lom_tectamano'
    ];

    public function oa(){
        return $this->belongsTo('App\OA', 'id_oa', 'id');
    }
}
