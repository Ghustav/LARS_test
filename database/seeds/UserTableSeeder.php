<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
       {
           $role_user = Role::where('name', 'user')->first();
           $role_admin = Role::where('name', 'admin')->first();
           $user = new User();
           $user->name = 'User';
           $user->email = 'user@example.com';
           $user->latitude = '40.6643';
           $user->longitude = '-73.9385';
           $user->password = 'password';
           $user->save();
           $user->roles()->attach($role_user);
           $user = new User();
           $user->name = 'Admin';
           $user->email = 'admin@example.com';
           $user->latitude = '8.5897';
           $user->longitude = '-71.1561';
           $user->password = 'password';
           $user->save();
           $user->roles()->attach($role_admin);
        }
}
