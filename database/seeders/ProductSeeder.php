<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'nama' => 'TOYOTA SUPRA',
                'gambar' => 'https://www.toyota.astra.co.id/sites/default/files/2020-09/5_matte-storm-grey_0.png',
                'deskripsi' => 'Toyota Supra adalah mobil sport berkemampuan tinggi yang diproduksi oleh Toyota Motor Corporation, 
                Jepang dari tahun 1978 sampai 2002. Pada mulanya, Supra adalah versi mewah bermesin 6 silinder dari Toyota Celica. 
                Mulai tahun 1986, Supra menjadi mobil sport tersendiri yang tidak ada hubungannya dengan Celica.',
                'status' => 0
            ],
            [
                'nama' => 'TESLA',
                'gambar' => 'https://cdn.motor1.com/images/mgl/VA0z9/s3/tesla-roadster.jpg',
                'deskripsi' => 'Salah satu merek mobil listrik yang paling terkenal adalah Tesla.
                Produsen mobil asal Amerika ini menguasai pasar mobil listrik di dunia. 
                Meskipun di Indonesia sendiri masih belum banyak yang menggunakan mobil listrik, 
                tetap saja mobil listrik Tesla banyak yang mengincarnya',
                'status' => 0
            ],
            [
                'nama' => 'JIMNY',
                'gambar' => 'https://suzukicdn.net/assets/static/img/variant/thumb/Jimny-Silky-Silver.png',
                'deskripsi' => 'Suzuki Jimny merupakan kendaraan jeep dan SUV yang diproduksi oleh perusahaan Jepang, 
                Suzuki sejak tahun 1968 untuk pasaran global. Diluncurkan pertama kali tahun 1968 dengan kendaraan 2 pintu. 
                Mobil ini dirakit di Hamamatsu, Jepang dan Linares, Jaén, Spanyol.',
                'status' => 0
            ]
        ];
        \DB::table('products')->insert($data);
    }
}
