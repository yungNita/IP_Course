<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Payment::create([
            'payment_date' => '2025-03-28 07:11:30',
            'payment_method' => "ABA",
            'amount' => 59.99,
            'order_id' => 1,
            'customer_id' => 1,
            
        ]);

        Payment::create([
            'payment_date' => '2025-03-28 09:11:30',
            'payment_method' => "ABA",
            'amount' => 59.99,
            'order_id' => 3,
            'customer_id' => 3,
            
        ]);
    }
}