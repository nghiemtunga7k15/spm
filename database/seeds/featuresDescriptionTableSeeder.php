<?php

use Illuminate\Database\Seeder;

class featuresDescriptionTableSeeder extends Seeder
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
            \DB::table('product_features_description')->insert([
                'name' => $name,
                'id_feature_title' => $faker->numberBetween(1, 5),
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
