<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Arif Budiman Arrosyid',
        //     'email' => 'admin@admin.com',
        //     'password' => bcrypt('admin'),
        // ]);
        // User::create([
        //     'name' => 'Arif',
        //     'email' => 'arif@admin.com',
        //     'password' => bcrypt('admin'),
        // ]);
        User::factory(3)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        Post::factory(25)->create();

    }
}
