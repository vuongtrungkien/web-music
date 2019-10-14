<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AddUserAdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'vuogtrungkien@gmail.com';
        $admin->password = Hash::make('12345678');
        $admin->role = 999;
        $admin->save();
    }
}
