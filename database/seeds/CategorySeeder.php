<?php

use Illuminate\Database\Seeder;
use App\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        
        $Default = new Category();
        $Default->name = "Sociedad";
        $Default->save();

        $Default2 = new Category();
        $Default2->name = "Salud";
        $Default2->save();


        $Default3 = new Category();
        $Default3->name = "Tecnologia";
        $Default3->save();


        $Default4 = new Category();
        $Default4->name = "Seguridad";
        $Default4->save();
    }
}
