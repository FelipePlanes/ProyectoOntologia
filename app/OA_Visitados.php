<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OA_Visitados extends Model
{
    protected $table = 'oa_visitados';

    protected $primaryKey = 'id';

    protected $fillatable = [
        'id_usuario',
        'id_oa'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'id_usuario', 'id');
    }

    public function oa(){
        return $this->belongsTo('App\OA', 'id_oa', 'id');
    }

    /*REVISAR*/
   
    
}
