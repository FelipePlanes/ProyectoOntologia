<?php

use Illuminate\Database\Seeder;

class Lom_tecnicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('lom_tecnica')->delete();

        DB::table('lom_tecnica')->insert([
            
            /*'id' => 1,*/
            /*'id_oa' => 1,*/
            'lom_tecduracion' => '30 min',
            'lom_tecformato' => '.mp4',
            'lom_teclocalizacion' => 'https://www.youtube.com/watch?v=NgLVxhNEbn4',
            'lom_tectamano' => '30MB',
        ]);
    }
}
