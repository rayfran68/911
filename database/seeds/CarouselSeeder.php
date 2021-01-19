<?php
use App\Carousel;

use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default =  new Carousel();


$default->Foto = "/storage/images/carousel/JqiBBMDMTILDQ0RrmnjBNVCHvfy5gk0S1JjM5EZe.jpeg";
$default->save();

$default2 =  new Carousel();


$default2->Foto = "/storage/images/carousel/a4Z9W9lp3iYvgsBB0d7fzXBxxuOCLmki8cxNyZRM.jpeg";
$default2->save();

    }
}
