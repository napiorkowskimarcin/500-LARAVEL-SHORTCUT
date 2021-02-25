<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class CommentSeeder extends Seeder
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
        DB::table('comments')->insert([
            'comment' => $faker->paragraph(1),
            'post_id' => $faker->numberBetween($min = 1, $max = 100),
            'created_at'=>$faker->date($format = 'Y-m-d H:i:s', $max = 'now'),
        ]);
        }
    }
}