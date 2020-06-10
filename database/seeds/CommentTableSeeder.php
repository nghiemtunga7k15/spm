<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
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
            $content = $faker->text(25);
    		$user_name = $faker->text(50);
    		$user_email = $faker->text(50);
    		$comment_file = $faker->text(50);

    		\DB::table('comments')->insert([
                // 'user_id' => $faker->text(11),
    			'post_id' => 1,
    			'content' => $content,
    			'parent_id' => 1,
    			'user_name' => $user_name,
    			'user_email' => $user_email,
    			'comment_file' => $comment_file,
                'user_id' => $faker->numberBetween(1, 2),
    			'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    		]);
    	}
    }
}
