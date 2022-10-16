<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Siaran;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        ////////BIKIN USER////
    //     User::create([
    //             'name' => 'Satria Suwandi',
    //             'email' => 'adulbinwandi@gmail.com',
    //             'password' => bcrypt('12345')
    //         ]);
    //   User::create([
    //                 'name' => 'Zaky Kusasi',
    //                 'email' => 'maikey@gmail.com',
    //                 'password' => bcrypt('12345')
    //                ]);
      User::factory(20)->create(); 



    //   BIKIN SIARAN / POST   
      Siaran::factory(30)->create();


    //   BIKIN KATEGORI /
        Kategori::create([
            'name' => 'Boarding',
            'slug' => 'boarding'
        ]);
        
        Kategori::create([
            'name' => 'Advance',
            'slug' => 'advance'
        ]);
        // Siaran::create([
        //         'title' => 'Pentingnya Pengarahan Pada Pelajar Pasca Sekolah',
        //         'slug' => 'pentingnya-pengarahan-pada-pelajar-pasca-sekolah',
        //         'excerpt' => 'Pelajar Pasca sekolah pada hakikatnya adalah mahasiswa.',
        //     'body' => 'Pelajar Pasca sekolah pada hakikatnya adalah mahasiswa. entah konstruksi sosial atau budaya dan sebagainya mereka dianggap dapat mengatur diri mereka dan memilih yang mana yang baik dan buruk. padahal orang dewasa saja banyak yang minta pengarahan pada orang lain baik itu ke orang yang lebih senior, orang bijak atau psikolog. jadi tidak mengarahkan mahasiswa dengan alasan mereka sudah dewasa merupakan cacat logika',
        //     'kategori_id' => 2,
        //     'user_id' => 2
        // ]);
        // Siaran::create([
        //         'title' => 'Pengawasan Pada Sekolah berasrama',
        //         'slug' => 'pengawasan-pada-sekolah-berasrama',
        //         'excerpt' => 'Sekolah berasrama di Indonesia sebagian besar memiliki masalah yang serupa',
        //         'body' => 'Sekolah berasrama di Indonesia sebagian besar memiliki masalah yang serupa. yaitu kurangnya tenaga pengawas dan hampir semua tugas pengwasan dilimpahkan kepada para senior pelajar itu sendiri sehingga semacam diberikan kekuasaan absolut, padahal mereka ini belum labil dalam emosi tetapi ditugaskan membuat peraturan, mengadili pelanggara mengawasi semua aktivitas pelajar lainnya',
        //         'kategori_id' => 1,
        //         'user_id' => 1
        //     ]);
            
            

            
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
