<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LOM_Componente_Virtual extends Model
{
    protected $table = 'componente_virtual';

    protected $primaryKey = 'id';

    protected $fillatable = [
        
        'id_usuario',
        'plathardware',
        'platsoftware',
        'reqhardware',
        'reqsoftware'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'id_usuario', 'id');
    }
}
