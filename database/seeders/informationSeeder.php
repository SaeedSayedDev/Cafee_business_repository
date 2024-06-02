<?php

namespace Database\Seeders;

use App\Models\information;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class informationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        information::create([
            'location'=> "البدرشين، مدينة البدراشين، مركز البدرشين، الجيزة",
            'open_days'=> "Mon-Sat",
            'open_hours'=> "11:00 AM - 23:00 PM",
            'email1'=> "said@said.com",
            'email2'=> "abdo@abdo.com",
            'phone1'=> "01096505009",
            'phone2'=> "01096505009",
        ]);
    }
}
