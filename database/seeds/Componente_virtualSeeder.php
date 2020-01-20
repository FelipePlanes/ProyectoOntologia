<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class Componente_virtualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('componente_virtual')->delete();

        DB::table('componente_virtual')->insert([
            
            /*'id' => 1,*/
            'id_usuario' => 1,
            'plathardware' => 'TP-LINK',
            'platsoftware' => 'Router',
            'reqhardware' => 'Cisco',
            'reqsoftware' => 'Linux',
            'created_at' => Carbon::now(),
            
        ]);    
    }
}
