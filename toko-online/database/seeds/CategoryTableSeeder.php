<?php

use Illuminate\Database\Seeder;
use App\Categories;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kategori1 = new Categories;
        $kategori1->name = 'Sepatu';
        $kategori1->save();

        $kategori2 = new Categories;
        $kategori2->name = 'Tas';
        $kategori2->save();

        $kategori3 = new Categories;
        $kategori3->name = 'Elektronik';
        $kategori3->save();

        $kategori4 = new Categories;
        $kategori4->name = 'Kemeja';
        $kategori4->save();

        $kategori5 = new Categories;
        $kategori5->name = 'Celana';
        $kategori5->save();

        $kategori6 = new Categories;
        $kategori6->name = 'Buku';
        $kategori6->save();

        $kategori7 = new Categories;
        $kategori7->name = 'Kosmetik';
        $kategori7->save();

        $kategori8 = new Categories;
        $kategori8->name = 'komputer';
        $kategori8->save();

        $kategori9 = new Categories;
        $kategori9->name = 'sandal';
        $kategori9->save();

        $kategori10 = new Categories;
        $kategori10->name = 'Furniture';
        $kategori10->save();

    }
}
