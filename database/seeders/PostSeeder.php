<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,100)as $index){
        DB::table('posts')->insert([
            'title' => $faker->sentence(2),
            'body' => $faker->paragraph(2),
            'created_at'=>$faker->date($format = 'Y-m-d H:i:s', $max = 'now'),
        ]);
        }
        
    }
}