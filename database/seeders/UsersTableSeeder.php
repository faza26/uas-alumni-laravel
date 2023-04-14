<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        User::create([
          
            'password'  => Hash::make('aufazaki'),
            'name'      => 'Administrator',
            'email'     => 'admin@admin.com',
            'is_admin'  => true,
        ]);

        User::create([
          
            'password'  => Hash::make('operator'),
            'name'      => 'Operator',
            'email'     => 'operator@operator.com',
            'is_admin'  => false,
        ]);
    }
}
