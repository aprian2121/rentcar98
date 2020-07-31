<?php

use Illuminate\Database\Seeder;
use \App\Mobil;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mobil = [
            [
                'pabrikan' => 'Toyota',
                'tipe' => 'Avanza',
                'warna' => 'Silver',
                'kapasitas_penumpang' => 5,
                'harga_sewa' => 200000,
            ],
            [
                'pabrikan' => 'Toyota',
                'tipe' => 'Inova',
                'warna' => 'Hitam',
                'kapasitas_penumpang' => 7,
                'harga_sewa' => 300000, 
            ],
            [
                'pabrikan' => 'Suzuki',
                'tipe' => 'Apv',
                'warna' => 'Hitam',
                'kapasitas_penumpang' => 7,
                'harga_sewa' => 225000,
            ],
            [
                'pabrikan' => 'Honda',
                'tipe' => 'Jazz',
                'warna' => 'Merah',
                'kapasitas_penumpang' => 3,
                'harga_sewa' => 200000,
            ],
            [
                'pabrikan' => 'Toyota',
                'tipe' => 'Fortuner',
                'warna' => 'Putih',
                'kapasitas_penumpang' => 5,
                'harga_sewa' => 400000,
            ],
        ];

        foreach ($mobil as $key => $value) {
            Mobil::create($value);
        }

    }
}
