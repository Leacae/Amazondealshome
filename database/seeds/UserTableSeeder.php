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
        \App\User::create([
            'name'=>'amazondeal',
            'email'=>'amazondeal@amazon.com',
            'password'=>bcrypt('amazondeal')
        ]);
    }
}
