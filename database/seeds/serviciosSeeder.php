<?php

use Illuminate\Database\Seeder;
use App\Servicio;

class serviciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicio = new Servicio();
        $servicio->nombre= "GYM";
        $servicio->costo= 200;
        $servicio->mora= 50;
        $servicio->horario= "L-V 10:00 AM - 20:00 PM";
        $servicio->imagen= "pic2.jpg";
        $servicio->slug="GYM";
        $servicio->save();
    }
}
 