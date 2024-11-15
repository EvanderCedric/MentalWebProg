<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Articles')->insert([
            [
                'title' => 'ADHD',
                'desc' => 'This is one of the most common mental health',
                'image'=> 'img/article/img1',
                'dateposted'=>'2024-10-30',
            ],
            [
                'title' => 'Schrinopenia',
                'desc' => 'This is one of the most common mental health',
                'image'=> 'img/article/img2',
                'dateposted'=>'2023-09-05',
            ],
            [
                'title' => 'OCD',
                'desc' => 'This is one of the most common mental health',
                'image'=> 'img/article/img3',
                'dateposted'=>'2023-11-06',
            ]
        ]);
    }
}
