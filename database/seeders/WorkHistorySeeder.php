<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['company' => 'Telkom Indonesia', 'role' => 'Backend Developer','period'=>'3 Maret 2020 - Sekarang', 'job' => 'Melakukan manipulasi data di postgre dan menyesuaikan sesuai kebutuhan perusahaan,Sebagai backend saya membuat API yang mana akan digunakan oleh frontend sebagai visualisasi dari website Data Exchange, Membuat fitur yang dibutuhkan oleh website,Melakukan crawling data dari website dan juga membuat script automasi untuk data yang akan di input di database,Membantu data engineer sesuai kebutuhan data yang mereka inginkan dan melakukan normalisasi data agar lebih ideal. disini saya lebih sering menggunakan python,Melakukan unit testing terhadap code yang sudah dibuat dan menvisualisasikannya'];
        DB::table('work__histories')->insert([
            'company' => $data['company'],
            'role' => $data['role'],
            'period' => $data['period'],
            'job' => $data['job'],
        ]);
    }
}
