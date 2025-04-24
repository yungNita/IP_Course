<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            "customer_id" => 1,
            "total_amount" => 199,
            "order_date" => "28/3/2025 7:11:00",
        ]);
        Order::create([
            "customer_id" => 3,
            "total_amount" => 233,
            "order_date" => "28/3/2025 7:11:00",
        ]);

        Order::create([
            "customer_id" => 2,
            "total_amount" => 299,
            "order_date" => "28/3/2025 8:11:00",
        ]);
    }
}