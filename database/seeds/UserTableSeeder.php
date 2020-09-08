<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name','user')->first();
        $role_admin= Role::where('name','admin')->first();
        $role_jefe= Role::where('name','jefe')->first();
        
        $user = new User();
        $user->name = "User";
        $user->email = "user@mail.com";
        $user->password = bcrypt('query');
    
        $user->save();
        $user->roles()->attach($role_user);


        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@mail.com";
        $user->password = bcrypt('query');
    
        $user->save();
        $user->roles()->attach($role_admin);


        $user = new User();
        $user->name = "Jefe";
        $user->email = "jefe@mail.com";
        $user->password = bcrypt('query');
     
        $user->save();
        $user->roles()->attach($role_jefe);
    }
}