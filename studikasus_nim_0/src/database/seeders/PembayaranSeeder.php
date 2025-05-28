<?php

namespace Database\Seeders;

use App\Models\Pembayaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

Pembayaran::create([
    'payer_name' => 'John Doe',
    'amount' => 150.00,
    'status' => 'paid'
]);

    }
}
