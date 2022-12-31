<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {    
        Category::create([
            "name"=>"Frontend",
            "slug"=>"frontend"
        ]);
        Category::create([
            "name"=>"Backend",
            "slug"=>"backend"
        ]);
        Category::create([
            "name"=>"Knowledge",
            "slug"=>"knowledge"
        ]);
        Category::create([
            "name"=>"Database",
            "slug"=>"database"
        ]);
        Category::create([
            "name"=>"Resources",
            "slug"=>"resources"
        ]);
        Category::create([
            "name"=>"Career",
            "slug"=>"career"
        ]);
        Category::create([
            "name"=>"Server",
            "slug"=>"server"
        ]);
        Category::create([
            "name"=>"DesignPattern",
            "slug"=>"designPattern"
        ]);
        Category::create([
            "name"=>"Softskill",
            "slug"=>"softskill"
        ]);
              
    }
}
