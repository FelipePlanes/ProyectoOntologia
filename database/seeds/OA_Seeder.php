<?php

use Illuminate\Database\Seeder;

class OA_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('oa')->delete();

        DB::table('oa')->insert([
            /*'id' => 1,*/
            /*'id_educativo' => 1,
            'id_general' => 1,
            'id_clasificacion' => 1,
            'id_tecnica' => 1,*/
        ]);

        $this->call(Lom_generalSeeder::class);
        $this->call(Lom_clasificacionSeeder::class);
        $this->call(Lom_educativoSeeder::class);
        $this->call(Lom_tecnicaSeeder::class);
    }
}
