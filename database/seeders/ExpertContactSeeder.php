<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ExpertContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('expert_contacts')->insert([

            [
                "name" => "Matthew Terrance S.",
                "desc" => "Available",
                "img" => "img/placeholderperson.png",
                "link"=> "",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Matthew Liawensius",
                "desc" => "Available",
                "img" => "img/placeholderperson.png",
                "link"=> "",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Youkomi",
                "desc" => "Available",
                "img" => "img/placeholderperson.png",
                "link"=> "",
                "created_at" => now(),
                "updated_at" => now(),
            ]

        ]);
    }
}
