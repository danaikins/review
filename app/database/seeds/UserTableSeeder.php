<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('users')->truncate();
        for ($i=0; $i<20; $i++) {
            $email = $faker->email;
            $password = Hash::make($email);
            User::create(array(
                'email' => $email,
                'password' => $password,
            ));
        }
    }

}
