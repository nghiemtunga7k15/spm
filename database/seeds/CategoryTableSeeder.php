<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        {
            $data = [
                [
                    'name'=>'zalo',
                    'image'=>'zalo.png',
                    'description'=>$faker->text(100),
                    'category_view'=>'123321',
                    'product_id'=>'1',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name'=>'facebook',
                    'image'=>'facebook.png',
                    'description'=>$faker->text(100),
                    'category_view'=>'123321',
                    'product_id'=>'2',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name'=>'erp',
                    'image'=>'erp.png',
                    'description'=>$faker->text(100),
                    'category_view'=>'123321',
                    'product_id'=>'3',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name'=>'instagram',
                    'image'=>'instagram.png',
                    'description'=>$faker->text(100),
                    'category_view'=>'123321',
                    'product_id'=>'4',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name'=>'web',
                    'image'=>'web.png',
                    'description'=>$faker->text(100),
                    'category_view'=>'123321',
                    'product_id'=>'5',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                ],

            ];
            DB::table('product_categories') -> insert($data);
        }
    }
}
