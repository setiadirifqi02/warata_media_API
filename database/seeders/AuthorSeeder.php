<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Author::create(
            [
                "name" => ucfirst("tomoe gozen"),
                "slug" => Str::slug("tomoe gozen"),
                "email" => "tomoegozen@email.com",
                "bio" => "This is Tomoe gozen's BIO",
                "profile_picture" => ucfirst("tomoe gozen")
            ]
        );
        Author::create(
            [
                "name" => ucfirst("ruminas valentine"),
                "slug" => Str::slug("ruminas valentine"),
                "email" => "ruminasvalentine@email.com",
                "bio" => "This is Ruminas's BIO",
                "profile_picture" => ucfirst("ruminas valentine")
            ]
        );
    }
}
