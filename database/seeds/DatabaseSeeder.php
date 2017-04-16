<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert(
            [
                'name'     => "user1",
                'email'    => "user@gmail.com",
                'password' => bcrypt('user123'),
            ],
            [
                'name'     => "user2",
                'email'    => "user2@gmail.com",
                'password' => bcrypt('user123'),]);
        DB::table('admins')->insert(
            [
                'name'     => "admin",
                'email'    => "admin@gmail.com",
                'password' => bcrypt('admin123'),
            ]
        );
    }
}
