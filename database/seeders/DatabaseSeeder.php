<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
//        User::truncate();
//        Category::truncate();
//        Post::truncate();
//         \App\Models\User::factory(10)->create();
//         Category::factory(15)->create();
         Post::factory(50)->create();
//        Category::create([
//            'name'=>'HTML',
//            'slug'=>'html'
//        ]);
//        Category::create([
//            'name'=>'CSS',
//            'slug'=>'css'
//        ]);
//        Category::create([
//            'name'=>'JAVASCRIPT',
//            'slug'=>'javascript'
//        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
