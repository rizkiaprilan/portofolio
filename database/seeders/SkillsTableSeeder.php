<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=> 'Javascript','score'=>75],
            ['name'=> 'Python','score'=>80],
            ['name'=> 'API Design Knowledge','score'=>70],
            ['name'=> 'PHP','score'=>70],
            ['name'=> 'HTML/CSS','score'=>65],
            ['name'=> 'Linux','score'=>60],
            ['name'=> 'Database Programming','score'=>80],
            ['name'=> 'Node JS','score'=>80],
            ['name'=> 'Laravel','score'=>75],
        ];
        foreach ($data as $d){
            DB::table('skills')->insert([
                'name' => $d['name'],
                'score' => $d['score'],
            ]);
        }
    }
}
