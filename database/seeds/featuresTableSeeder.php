<?php

use Illuminate\Database\Seeder;

class featuresTableSeeder extends Seeder
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
                    'name' => 'marketer/saler:',
                    'image' => 'zalo.png',
                    'product_id' => '1',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                ],[
                    'name' => 'Là chủ shop/chủ doanh nghiệp:',
                    'image' => 'zalo.png',
                    'product_id' => '1',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'QUÉT KHÁCH HÀNG MỤC TIÊU',
                    'image' => 'zalo.png',
                    'product_id' => '1',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                ],[
                    'name' => 'KẾT BẠN TỰ ĐỘNG',
                    'image' => 'zalo.png',
                    'product_id' => '2',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                ],[
                    'name' => 'QUẢN LÝ PROFILE ',
                    'image' => 'zalo.png',
                    'product_id' => '2',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                ],
            ];
        }
        DB::table('product_features_title') -> insert($data);
    }
}
