<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        if(\App\User::whereEmail('demo@demo.com')->count() > 0) return false;

        factory(\App\User::class)->create([
            'name' => 'Demo',
            'email' => 'demo@demo.com',
            'password' => \Hash::make('demo')
        ]);
    }
}
