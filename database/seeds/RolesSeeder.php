<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{

    public function run(){

         $admin = Role::create([
          
           'name' => 'Admin',
           'slug' => 'admin',
           'permissions' => json_encode([
             'admin' => true
           ])

        ]);
        $user = Role::create([
          
           'name' => 'User',
           'slug' => 'user',
           'permissions' => json_encode([
             'user' => true
           ])  

        ]);
    }
}
