<?php

use App\Patient;
use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patient::create([
            'nombres' => 'Hugo Emilio',
            'apellidos' => 'Lira Quezada',
            'sexo' => 'masculino',
            'ocupacion' => 'Estudiante',
            'estado_civil' => 'soltero',
            'dni'=> '47253512',
            'fnacimiento' => '1993-08-07',
            'lnacimiento' => 'Trujillo',
            'lprocedencia' => 'Trujillo',
            'direccion' => 'Mansiche 475',
            'fijo' => '044-254385',
            'movil' => '#968437417',
        ]);
    }
}
