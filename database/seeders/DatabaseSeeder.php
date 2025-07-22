<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $categories=[
                [
                    'name'=>'Tv',
                    'color'=>'background-color: #FF7F50; color: black'
                ],
                [
                    'name'=>'Cinema e Serie Tv',
                    'color'=>'background-color: #9370DB; color: black'
                ],
                [
                    'name'=>'Attori',
                    'color'=>'background-color: #FF8C00; color: black'

                ],
                [
                     'name'=>'News Spettacolo',
                    'color'=>'background-color: #87CEEB; color: black'
                ],
                [
                     'name'=>'Hollywood',
                    'color'=>'background-color: #98FF98; color: black'
                ]
        ];

        foreach ($categories as $category) {
           Category::create($category);
        }
    }
}
