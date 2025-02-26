<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        Category::create(
            [
                "category" => ucfirst("trending"),
                "slug" => Str::slug("trending "),
                "description" => "Lattest trend and viral topics for your feed."
            ]
        );
        Category::create(
            [
                "category" => ucfirst("extreme sports"),
                "slug" => Str::slug("extreme sports "),
                "description" => "Challenging, exciting and extreme sport boost your adrenaline."
            ]
        );
        Category::create(
            [
                "category" => ucfirst("food & beverage"),
                "slug" => Str::slug("extreme and beverage "),
                "description" => "Viral foods & beverage, delicious & healthy recipe, Cooking hack."
            ]
        );
        Category::create(
            [
                "category" => ucfirst("IT"),
                "slug" => Str::slug("Information Technology "),
                "description" => "Latest innovation of human kind in digital era."
            ]
        );
        Category::create(
            [
                "category" => ucfirst("Travel"),
                "slug" => Str::slug("Travel "),
                "description" => "Trip advisor, hidden gems of travel'places, tips & plan for your vacation place."
            ]
        );
    }
}
