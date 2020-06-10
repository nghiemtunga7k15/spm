<?php

use Illuminate\Database\Seeder;

class PostTagsPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = \Faker\Factory::create();
    	for ($i = 0; $i < 10; $i++) {

    		\DB::table('post_tagspost')->insert([
                'post_id' => $faker->numberBetween(1, 10),
    			'tagpost_id' => $faker->numberBetween(1, 10),
//    			'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
//    			'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    		]);
    	}
    }
}
