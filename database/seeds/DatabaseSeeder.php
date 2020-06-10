<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(CategoryTableSeeder::class);
        $this->call(CategoriesPostTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(TagPostTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(featuresTableSeeder::class);
        $this->call(featuresDescriptionTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(PostTagsPostTableSeeder::class);
    }
}
