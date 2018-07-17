<?php

use Illuminate\Database\Seeder;
use Charlie\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = new User;

        $user->name = 'Jefferson Frade';
        $user->email = 'jefferrson.frade@gmail.com';
        $user->password = bcrypt(123);

        $user->save();

        factory(User::class, 20)->create();
    }
}
