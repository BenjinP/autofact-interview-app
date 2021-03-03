<?php
use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder {
    public function run() {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();                   

        $user = new User();
        $user->name = 'User';
        $user->email = 'user@site.com';
        $user->password = Hash::make('secret');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@site.com';
        $user->password = Hash::make('secret');
        $user->save();
        $user->roles()->attach($role_admin);
     }
}