<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    public function run(): void
    {
        Destination::truncate();

        $data = [
            [
                'name' => 'Gunung Bromo',
                'region' => 'Jawa Timur',
                'description' => 'Gunung berapi aktif di kawasan Taman Nasional Bromo Tengger Semeru. Pengunjung biasanya naik jip sebelum subuh ke Penanjakan untuk melihat matahari terbit di atas lautan pasir dan kaldera yang diselimuti kabut tipis.',
                'image' => 'bromo.jpg',
                'ticket_price' => 35000,
            ],
            [
                'name' => 'Raja Ampat',
                'region' => 'Papua Barat Daya',
                'description' => 'Gugusan pulau karang dengan laguna biru jernih dan salah satu keanekaragaman hayati laut tertinggi di dunia. Cocok untuk menyelam, snorkeling, dan mendaki bukit Wayag atau Piaynemo untuk melihat panorama pulau-pulau kecil.',
                'image' => 'raja-ampat.jpg',
                'ticket_price' => 500000,
            ],
            [
                'name' => 'Danau Toba',
                'region' => 'Sumatera Utara',
                'description' => 'Danau vulkanik terbesar di Asia Tenggara dengan Pulau Samosir di tengahnya. Selain pemandangan air yang luas, wisatawan dapat mengenal budaya Batak melalui rumah adat, kain ulos, dan tari tor-tor.',
                'image' => 'danau-toba.jpg',
                'ticket_price' => 20000,
            ],
            [
                'name' => 'Kawah Ijen',
                'region' => 'Jawa Timur',
                'description' => 'Kawah dengan danau asam berwarna toska yang terkenal akan fenomena api biru di malam hari. Jalur pendakian sekitar tiga kilometer dan melewati para penambang belerang tradisional.',
                'image' => 'kawah-ijen.jpg',
                'ticket_price' => 100000,
            ],
            [
                'name' => 'Taman Nasional Komodo',
                'region' => 'Nusa Tenggara Timur',
                'description' => 'Habitat asli komodo, kadal terbesar di dunia. Kawasan ini mencakup Pulau Komodo, Rinca, dan Padar dengan bukit savana, pantai pasir merah muda, serta terumbu karang yang kaya.',
                'image' => 'komodo.jpg',
                'ticket_price' => 150000,
            ],
            [
                'name' => 'Tangkuban Parahu',
                'region' => 'Jawa Barat',
                'description' => 'Gunung berbentuk perahu terbalik di utara Bandung. Pengunjung dapat berjalan di bibir Kawah Ratu dan Kawah Domas yang mengepulkan uap belerang dalam udara pegunungan yang sejuk.',
                'image' => 'tangkuban-parahu.jpg',
                'ticket_price' => 30000,
            ],
            [
                'name' => 'Pantai Tanjung Aan',
                'region' => 'Nusa Tenggara Barat',
                'description' => 'Pantai berpasir putih bertekstur butiran merica di Lombok Tengah dengan air tenang dan bukit savana di sekelilingnya. Cocok untuk berenang, bersantai, dan menikmati matahari terbenam.',
                'image' => 'tanjung-aan.jpg',
                'ticket_price' => 10000,
            ],
            [
                'name' => 'Air Terjun Tumpak Sewu',
                'region' => 'Jawa Timur',
                'description' => 'Air terjun tirai setinggi sekitar seratus meter di perbatasan Lumajang dan Malang. Aliran air yang melebar seperti tirai jatuh ke ngarai hijau dan membentuk pelangi saat cuaca cerah.',
                'image' => 'tumpak-sewu.jpg',
                'ticket_price' => 25000,
            ],
        ];

        foreach ($data as $row) {
            Destination::create($row);
        }
    }
}
