<?php
use App\Departamento;

use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Default = new Departamento();
        $Default->Nombre = "Default";
        $Default->save();

        $Default2 = new Departamento();
        $Default2->Nombre = "Default2";
        $Default2->save();

    }
}
