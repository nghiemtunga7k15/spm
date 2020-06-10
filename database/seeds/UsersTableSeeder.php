<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 2; $i++) {

            $name = $faker->randomElement(['lan', 'my']);
            $image = $faker->randomElement(['lan', 'my']).'.png';
            $facebook = Str::random(10).'@facebook.com';
            $zalo = Str::random(10).'@zalo.com';
            $email = Str::random(10).'@gmail.com';

            \DB::table('users')->insert([
                'name' => $name,
                'image' => $image,
                'facebook' => $facebook,
                'zalo' => $zalo,
                'email' => $email,
                'phone' => $faker->phoneNumber(10),
                'password' => bcrypt('password'),
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
