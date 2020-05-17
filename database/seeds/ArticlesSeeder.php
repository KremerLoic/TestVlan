<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            DB::table('articles')->insert([
                'title' => Str::random(10),
                'content' => Str::random(100),
                'is_active' => (bool)rand(0,1),
                'created_at'=> \Faker\Provider\DateTime::dateTime(),
                'updated_at'=> date('Y-m-d H:i:s'),
            ]);
        }
    }
}
