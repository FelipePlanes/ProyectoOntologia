<?php

use Illuminate\Database\Seeder;

class Lom_clasificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('lom_clasificacion')->delete();

        DB::table('lom_clasificacion')->insert([
            /*'id' => 1,*/
            /*'id_oa' => 1,*/
            'lom_cladescripcion' => 'Videos animados para niños',
            'lom_clapalabra_clave' => 'Infantiles',
            'lom_claproposito' => 'Videos infantiles',
        ]);
    }
}
