<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->email = 'yanchukserhiy96@gmail.com';
        $user->password = bcrypt(123456);
        $user->save();
    }
}
