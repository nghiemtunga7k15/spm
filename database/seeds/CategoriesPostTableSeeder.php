<?php

use Illuminate\Database\Seeder;

class CategoriesPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = \Faker\Factory::create();
    	for ($i = 0; $i < 5; $i++) {

    		$name = $faker->text(25);
    		$description = $faker->text(50);
    		$count_category_post = $faker->text(50);

    		\DB::table('post_categories')->insert([
                // 'user_id' => $faker->text(11),
    			'name' => $name,
    			'description' => $description,
    			'count_category_post' => $count_category_post,
    			'status' => 1,
                'user_id' => $faker->numberBetween(1, 2),
    			'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    		]);
    	}
    }
}
