<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Safarkhoush admin',
 -            'email' => 'admin@safarkhoush.com',
 -            'username' => 'admin',
 -            'password' => bcrypt('123'),
 -            'role_id' => 2,
 -            'is_del' => 0,
        ]);
    }
}
