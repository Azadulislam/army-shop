<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Sluggable\SlugOptions;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=> 'Men', 'slug' => Str::slug('Men')],
            ['name'=> 'Women', 'slug' => Str::slug('Women')]
        ];

        Type::insert($data);
    }
}
