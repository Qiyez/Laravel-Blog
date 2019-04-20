<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::truncate();

        DB::table('users')->insert([
            'name' => 'lizhi',
            'email' => '644516361@qq.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
