<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=> 'Cloths', 'slug'=>'cloths'],
            ['name'=> 'Uniforms', 'slug'=>'uniforms'],
            ['name'=> 'Accessories', 'slug'=>'accessories'],
        ];

        Category::insert($data);
    }
}
