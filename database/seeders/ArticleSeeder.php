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
        DB::table('articles')->insert([
            [
                "title" => "Depression",
                "desc" => "A common but serious mood disorder that affects daily activities.",
                "image" => "img/article/depression.jpg",
                "dateposted" => "2024-09-15",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Anxiety Disorders",
                "desc" => "A group of mental health conditions characterized by excessive fear or worry.",
                "image" => "img/article/anxiety.jpg",
                "dateposted" => "2024-08-22",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Bipolar Disorder",
                "desc" => "A condition marked by extreme mood swings, including emotional highs and lows.",
                "image" => "img/article/bipolar.jpg",
                "dateposted" => "2024-07-10",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "PTSD",
                "desc" => "A disorder that develops after experiencing or witnessing a traumatic event.",
                "image" => "img/article/ptsd.jpg",
                "dateposted" => "2024-06-01",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Eating Disorders",
                "desc" => "A range of psychological conditions involving abnormal eating habits.",
                "image" => "img/article/eating_disorders.jpg",
                "dateposted" => "2024-05-18",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "OCD",
                "desc" => "Obsessive-Compulsive Disorder involves unwanted, intrusive thoughts and repetitive behaviors.",
                "image" => "img/article/ocd.jpg",
                "dateposted" => "2023-11-06",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "ADHD",
                "desc" => "Attention-Deficit/Hyperactivity Disorder affects focus, self-control, and organization.",
                "image" => "img/article/adhd.jpg",
                "dateposted" => "2024-10-30",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Schizophrenia",
                "desc" => "A severe mental health condition that affects thinking, emotions, and behavior.",
                "image" => "img/article/schizophrenia.jpg",
                "dateposted" => "2023-09-05",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Panic Disorder",
                "desc" => "A type of anxiety disorder marked by sudden and repeated panic attacks.",
                "image" => "img/article/panic_disorder.jpg",
                "dateposted" => "2023-12-12",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Autism Spectrum Disorder",
                "desc" => "A developmental condition that affects communication, behavior, and interaction.",
                "image" => "img/article/autism.jpg",
                "dateposted" => "2024-01-15",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
