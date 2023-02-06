<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'qwer',
                'email' => 'qwer@qwer.com',
                'password' => Hash::make('qwer'),
            ],
            [
                'name' => 'asdf',
                'email' => 'asdf@asdf.com',
                'password' => Hash::make('asdf'),
            ],
            [
                'name' => 'zxcv',
                'email' => 'zxcv@zxcv.com',
                'password' => Hash::make('zxcv'),
            ],
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
