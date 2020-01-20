<?php

use Illuminate\Database\Seeder;

class Lom_educativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('lom_educativo')->delete();

        DB::table('lom_educativo')->insert([
            
            /*'id' => 1,*/
            /*'id_oa' => 1,*/
            'lom_educdescripcion' => 'Videos animados infantiles',
            'lom_educnivel_interactividad' => 'alto',
            'lom_eductipo_interactividad' => 'entretenimiento',
            'lom_eductipo_recurso_educativo' => 'video',

        ]);
    }
}
