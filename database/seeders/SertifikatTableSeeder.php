<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SertifikatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=> 'Laravel Course','description'=>'sertifikat yang diperoleh dari Course-Net Indonesia dalam mengikuti kursus Laravel','link_picture'=>'https://i.ibb.co/7pFMRCj/Laravel.jpg'],
            ['name'=> 'Scrum Master by Ekipa','description'=>'sertifikat yang diperoleh dari Ekipa dalam mengikuti training menjadi Scrum Master dan bagaimana menerapkan prinsip agile dengan baik','link_picture'=>'https://i.ibb.co/rf57FLw/Scrum-Master-Certificate-by-EKIPA.jpg'],
            ['name'=> 'Technocorner UGM 2019','description'=>'sertifikat yang diperoleh dari UGM dalam mengikuti kompetisi IOT, dan di perlombaan ini saya membuat Modern Lock Door','link_picture'=>'https://i.ibb.co/PGdfLvf/Technocorner-UGM-2019-1.jpg'],
            ['name'=> 'Sequis Life','description'=>'sertifikat yang diperoleh dari Binus Festival dalam mengikuti seminar sequis life','link_picture'=>'https://i.ibb.co/fdrHZPm/Sequis-Life-1.jpg'],
            ['name'=> 'Object Oriented Programming','description'=>'sertifikat yang diperoleh dari Course-Net dalam mengikuti kursus OOP','link_picture'=>'https://i.ibb.co/8rqZMBv/Object-Oriented-Programming.jpg'],
            ['name'=> 'Indonesia National Contest','description'=>'sertifikat yang diperoleh dari Binus dalam mengikuti kontes programming dalam menyelesaikan beberapa soal coding','link_picture'=>'https://i.ibb.co/YXkK3jm/INC-Contest.png'],
            ['name'=> 'Database System','description'=>'sertifikat yang diperoleh dari Course-Net dalam mengikuti kursus Database System','link_picture'=>'https://i.ibb.co/QQ2n0jr/Database-System.jpg'],
            ['name'=> 'Computer Network','description'=>'sertifikat yang diperoleh dari Course-Net dalam mengikuti kursus jaringan komputer','link_picture'=>'https://i.ibb.co/kgB0LSr/Computer-Network.jpg'],
            ['name'=> 'Data Structure','description'=>'sertifikat yang diperoleh dari Course-Net dalam mengikuti kursus data structure','link_picture'=>'https://i.ibb.co/f8zn1PL/Data-Structures.jpg'],
        ];
        foreach ($data as $d){
            DB::table('sertifikats')->insert([
                'name' => $d['name'],
                'description' => $d['description'],
                'link_picture' => $d['link_picture'],
            ]);
        }
    }
}
