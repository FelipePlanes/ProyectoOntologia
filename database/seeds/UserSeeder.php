<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();

        DB::table('users')->insert([
            /*'id' => 1,*/
            'name' => 'Jessika',
            'email' => 'jessika@gmail.com',
            'email_verified_at' => '07-11-2019 14:17:57'/*=> Carbon::now()*/,
            'password' => bcrypt('12345678'),
            'apellido' => 'Carvajal',
            'sexo' => 'Femenino',
            'lugar_nac' => 'Bolivar',
            'fecha_nac' => '29-08-1995 14:17:57'/*=> Carbon::now()*/,
            'pregunta_seguridad' => '¿Nombre de la mascota?',
            'respuesta_seguridad' => 'tommy',
        ]);


        /*quitar comentario de Carbon::now() luego de hacer otras pruebas*/ 

        $this->call(Componente_virtualSeeder::class);
        /*$this->call(OA_visitadosSeeder::class);*/
    }
}
