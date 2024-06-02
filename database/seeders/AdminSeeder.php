<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        Admin::create([
            'name' => 'said sayed',
            'email' => 'said.sayed@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
