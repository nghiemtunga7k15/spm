<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
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

    		$name = $faker->text(25);
    		$image = $faker->text(25);
    		$description = $faker->text(50);
            $short_describe = $faker->text(50);
    		$feature = $faker->text(50);
    		$link_product_use = $faker->text(50);
    		$link_product_detail = $faker->text(50);
    		$link_document = $faker->text(50);

    		\DB::table('products')->insert([
                // 'user_id' => $faker->text(11),
    			'name' => $name,
    			'image' => 'all-in-one.png',
    			'description' => $description,
    			'short_describe'=>$short_describe,
    			'feature' => $feature,
    			'link_product_use' => $link_product_use,
    			'link_product_detail' => $link_product_detail,
    			'link_document' => $link_document,
//                'image' => $faker->image('public/storage/product',640,480, null, false),
    			'status' => $faker->numberBetween(1, 5),
    			'product_category' => $faker->numberBetween(1, 5),
    			'product_view' => $faker->numberBetween(1, 200),
    			'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    		]);
    	}
    }
}
