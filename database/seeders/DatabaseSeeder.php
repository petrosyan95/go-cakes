<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Reviews;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
//
//        \App\Models\ProductCategory::create([
//            'name_en' => 'tort',
//            'name_se' => 'test se ',
//        ]);

         \App\Models\Product::factory(10)->create();
//
//         \App\Models\Reviews::create([
//             'name'=> 'sam',
//             'email'=> 'samel@gmail.com',
//             'img'=>'img/user.jpg',
//             'description_en'=> 'swswswswswswswswsw',
//         ]);
    }
}
