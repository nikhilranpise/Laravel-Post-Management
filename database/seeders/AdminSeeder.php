<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('admin');

        $admin = new Admin;
        $admin->name = 'Super Admin';
        $admin->role = '1';
        $admin->username = 'admin';
        $admin->password = $password;
        $admin->save();
    }
}
