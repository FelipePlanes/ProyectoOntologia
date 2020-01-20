<?php

use Illuminate\Database\Seeder;

class Lom_generalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('lom_general')->delete();

        DB::table('lom_general')->insert([
            
            /*'id' => 1,*/
            /*'id_oa' => 1,*/
            'lom_genambito' => '2017 en USA',
            'lom_gendescripcion' => 'Videos infantiles',
            'lom_genpalabra_clave' => 'Tom',
            'lom_gentitulo' => 'Video animado Tom y Jerry',

        ]);
    }
}
