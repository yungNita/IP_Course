<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            "name" => "Kasibook",
            "email" => "Kasibook@gmail.com",
            "phone" => "098765443",
            "address" => "Bangkok of Thailand",
        ]);

        Customer::create([
            "name" => "Force Jiratchapong",
            "email" => "jiratchapong@gmail.com",
            "phone" => "0987654321",
            "address" => "Bangkok of Thailand",
        ]);

        Customer::create([
            "name" => "Zhange Linghe",
            "email" => "linghe@gmail.com",
            "phone" => "09876567",
            "address" => "Beijing of China",
        ]);
    }
}