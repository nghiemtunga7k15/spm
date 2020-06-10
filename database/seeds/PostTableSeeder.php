<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
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

            $name = $faker->randomElement(['8 CÁCH TĂNG LƯỢT THEO DÕI TRÊN FACEBOOK AN TOÀN VÀ HIỆU QUẢ', '5 PHƯƠNG PHÁP MARKETING ONLINE HIỆU QUẢ VỚI CHI PHÍ THẤP NHẤT', '3 CÔNG CỤ GIÚP TỐI ƯU HÓA QUẢNG CÁO TRÊN FACEBOOK TỐT NHẤT', 'LÀM THẾ NÀO ĐỂ CÓ NHIỀU NGƯỜI THEO DÕI TRÊN FACEBOOK???', '5 Cách bán hàng Online trên Facebook hiệu quả nhất', 'VĂN HÓA ẢNH HƯỞNG ĐẾN HOẠT ĐỘNG MARKETING NHƯ THẾ NÀO?', 'Truyền thông ảnh hưởng tới thời đại 4.0 như thế nào?', 'VNP SOFTWARE - GIẢI PHÁP TRUYỀN THÔNG TRÊN FACEBOOK HIỆU QUẢ NHẤT', '10 CÁCH TĂNG TƯƠNG TÁC CHO BÀI VIẾT TRÊN FB', 'CÁCH TĂNG LƯỢT THEO DÕI TRÊN FACEBOOK']);
    		$image = $faker->randomElement(['blog1', 'blog2', 'blog3']).'.png';
            $description = $faker->text(50);
    		$content = Str::random(5000);
            $post_file = $faker->text(50);
    		$note = $faker->text(50);
    		$post_link = $faker->text(50);

    		\DB::table('posts')->insert([
                // 'user_id' => $faker->text(11),
    			'name' => $name,
    			'image' => $image,
    			'description' => $description,
    			'content' => $content,
                'post_view' => $faker->numberBetween(1, 500),
    			'category_id' => $faker->numberBetween(1, 5),
    			'post_share' => $faker->numberBetween(1, 500),
    			'comment_count' => $faker->numberBetween(1, 500),
    			'post_file' => $post_file,
    			'post_time' => $faker->dateTime()->format('Y-m-d H:i:s'),
    			'note' => $note,
    			'post_link' => $post_link,
                'post_status' => $faker->numberBetween(0, 1),
    			'user_id' => $faker->numberBetween(1, 2),
    			'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    		]);
    	}
    }
}
