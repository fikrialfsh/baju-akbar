<?php

use Illuminate\Database\Seeder;
use App\Orderstatus;
class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Belum Bayar'],
            ['name' => 'Perlu Dicek'],
            ['name' => 'Telah Dibayar'],
            ['name' => 'Sedang Dikirim'],
            ['name' => 'Barang Telah Sampai'],
            ['name' => 'Pesanan Dibatalkan'],
        ];
        Orderstatus::insert($data);
    }
}
