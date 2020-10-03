<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'GameHub', 'description' => 'Sebuah project kelas yang dikerjakan secara berkelompok untuk mata kuliah Web Programming, project ini menggunakan framework laravel', 'link_picture' => 'https://i.ibb.co/WKDyQZP/Gamehub-1.png,https://i.ibb.co/vZ7mWy9/Gamehub-2.png', 'link_repo' => 'https://github.com/rizkiaprilan/GameHub.git'],
            ['name' => 'Mimi Figure Shop', 'description' => 'Sebuah project semester yang dikerjakan mandiri untuk mata kuliah Framework Layer Architecture, project ini menggunakan framework laravel', 'link_picture' => 'https://i.ibb.co/BgSLQ8Q/Mimi-Figure-Shop-1.png,https://i.ibb.co/c3P0NXN/Mimi-Figure-Shop-2.png', 'link_repo' => 'https://github.com/rizkiaprilan/Action-Figure.git'],
            ['name' => 'Bjora', 'description' => 'Sebuah project semester yang dikerjakan mandiri untuk mata kuliah Framework Layer Architecture, project ini menggunakan framework laravel', 'link_picture' => 'https://i.ibb.co/k8BcqHY/bjora-1.png,https://i.ibb.co/2dryBy1/bjora-2.png', 'link_repo' => 'https://github.com/rizkiaprilan/Bjora.git'],
            ['name' => 'BMDB', 'description' => 'Sebuah project semester yang dikerjakan mandiri untuk mata kuliah Framework Layer Architecture, project ini menggunakan framework laravel', 'link_picture' => 'https://i.ibb.co/d4MkrVQ/bmdb-1.png,https://i.ibb.co/ZzB4bSW/bmdb-2.png', 'link_repo' => 'https://github.com/rizkiaprilan/Laravel---BMDb.git'],
            ['name' => 'Course-Net Laravel Course', 'description' => 'Sebuah project dasar dalam pemograman PHP dan Laravel', 'link_picture' => 'https://i.ibb.co/ss6khb6/cnet-laravel-1.png,https://i.ibb.co/R2xnyCY/cnet-laravel-2.png', 'link_repo' => 'https://github.com/rizkiaprilan/cnet_laravel_basic.git'],
            ['name' => 'Course-Net Laravel Course 2', 'description' => 'Sebuah project dasar dalam pemograman PHP dan Laravel', 'link_picture' => 'https://i.ibb.co/B2sKDVG/cnet-laravel2-2.png,https://i.ibb.co/YpppnHB/cnet-laravel2-1.png', 'link_repo' => 'https://github.com/rizkiaprilan/Laravel---Student-Management.git'],
            ['name' => 'Cooking Guide', 'description' => 'Sebuah project UI sederhana menggunakan bahasa pemograman Laravel', 'link_picture' => 'https://i.ibb.co/2MPMmjp/cooking-guide-1.png,https://i.ibb.co/mXpPP1Z/cooking-guide-2.png', 'link_repo' => 'https://github.com/rizkiaprilan/Laravel---Cooking-Guide.git'],
            ['name' => 'My Portofolio', 'description' => 'Sebuah website sederhana yang menampilkan portofolio pribadi menggunakan bahasa pemograman Laravel', 'link_picture' => 'https://i.ibb.co/3WTJXM3/portfolio-1.png,https://i.ibb.co/jG7Yrzh/portfolio-2.png,https://i.ibb.co/LJPp3zV/portfolio-3.png', 'link_repo' => 'https://github.com/rizkiaprilan/portofolio.git']
        ];
        foreach ($data as $d) {
            DB::table('projects')->insert([
                'name' => $d['name'],
                'description' => $d['description'],
                'link_picture' => $d['link_picture'],
                'link_repo' => $d['link_repo'],
            ]);
        }
    }
}
