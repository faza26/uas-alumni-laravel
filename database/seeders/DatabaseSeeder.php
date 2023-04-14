<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kuliah;
use App\Models\Biodata;
use App\Models\Angkatan;
use App\Models\Pekerjaan;
use App\Models\DataOrangTua;
use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        User::create([
            'username'  => 'admin',
            'password'  => Hash::make('aufazaki'),
            'name'      => 'Administrator',
            'email'     => 'zaki@gmail.com',
            'is_admin'  => true,
        ]);

        
        // Biodata::factory(50)->create();
        // Kuliah::factory(38)->create();
        // Pekerjaan::factory(33)->create();
        // DataOrangTua::factory(50)->create();

        // Angkatan::factory(4)->create();
        Kelas::factory(4)->create();
    }
}
