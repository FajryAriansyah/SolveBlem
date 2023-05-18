<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Problem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        Problem::create([
            'judul' => 'Pak Dengklek dan Operasi Sederhana',
            'slug' => 'pak-dengklek-dan-operasi-sederhana',
            'user_id' => 1,
            'batas_waktu' => '1 s',
            'batas_memori' => '64 MB',
            'deskripsi' => "Pak Dengklek memutuskan sekolah lagi. Dia baru saja mendapat PR dari guru matematikanya. Sayangnya Pak Dengklek sudah terlalu lelah, dia sudah tak sanggup lagi. Pak Dengklek melihat potensi Anda yang begitu besar. Maka dari itu, kali ini dia minta bantuan Anda untuk menyelesaikan PR-nya. <br><br>
            Buatlah sebuah program yang membaca dua buah bilangan bulat X dan Y. X dan Y dijamin bukan nol. Tuliskan hasil penjumlahan, pengurangan, perkalian, bagian bulat pembagian dan sisanya.",
            'format_input' => "Sebuah baris yang berisi dua buah bilangan bulat, X dan Y.",
            'format_output' => "Lima buah baris, yakni :<br>
                Baris pertama berisi hasil penjumlahan, yakni X + Y<br>
                Baris kedua berisi hasil pengurangan, yakni X - Y<br>
                Baris ketiga berisi hasil perkalian, yakni X * Y<br>
                Baris keempat berisi bagian bulat hasil pembagian, yakni bagian bulat dari X / Y<br>
                Baris terakhir berisi X mod Y, yakni sisa pembagian dari X / Y</p>",
            'contoh_input' => '6 4',
            'contoh_output' => '10<br>2<br>24<br>1<br>2',
            'case_input' => '6 4',
            'case_output' => '10<br>2<br>24<br>1<br>2',
        ]);
        Problem::create([
            'judul' => 'Tambah Tambah',
            'slug' => 'tambah-tambah',
            'user_id' => 1,
            'batas_waktu' => '2 s',
            'batas_memori' => '64 MB',
            'deskripsi' => "Pak Dengklek memutuskan sekolah lagi. Dia baru saja mendapat PR dari guru matematikanya. Sayangnya Pak Dengklek sudah terlalu lelah, dia sudah tak sanggup lagi. Pak Dengklek melihat potensi Anda yang begitu besar. Maka dari itu, kali ini dia minta bantuan Anda untuk menyelesaikan PR-nya. <br><br>
            Buatlah sebuah program yang membaca dua buah bilangan bulat X dan Y. X dan Y dijamin bukan nol. Tuliskan hasil penjumlahan, pengurangan, perkalian, bagian bulat pembagian dan sisanya.",
            'format_input' => "Sebuah baris yang berisi dua buah bilangan bulat, X dan Y.",
            'format_output' => "Lima buah baris, yakni :<br>
                Baris pertama berisi hasil penjumlahan, yakni X + Y<br>
                Baris kedua berisi hasil pengurangan, yakni X - Y<br>
                Baris ketiga berisi hasil perkalian, yakni X * Y<br>
                Baris keempat berisi bagian bulat hasil pembagian, yakni bagian bulat dari X / Y<br>
                Baris terakhir berisi X mod Y, yakni sisa pembagian dari X / Y</p>",
            'contoh_input' => '6 4',
            'contoh_output' => '10<br>2<br>24<br>1<br>2',
            'case_input' => '6 4',
            'case_output' => '10<br>2<br>24<br>1<br>2',
        ]);

        User::create([
            'name' => 'Fajry',
            'username' => 'Papazy',
            'email' => 'fajry@mhs.unsyiah.ac.id',
            'password' => Hash::make('fajry'),
        ]);
        User::create([
            'name' => 'Habil',
            'username' => 'Noitusanx',
            'email' => 'habil@mhs.unsyiah.ac.id',
            'password' => Hash::make('habil'),
        ]);
        User::create([
            'name' => 'Ariansyah',
            'username' => 'Noitusanx2',
            'email' => 'habil2@mhs.unsyiah.ac.id',
            'password' => Hash::make('ariansyah'),
        ]);

        DB::table('contests')->insert([
            'id' => 111111,
            'title' => 'latihan pemrograman',
            'slug' => 'lat-p',
            'user_id' => 2,
            'start_at' => Carbon::now()->toDateTimeString(),
            'duration' => 60,
            'max_participant' => 60,
            'password' => 'fajry',
        ]);
        DB::table('contests')->insert([
            'id' => 222222,
            'title' => 'latihan pemrograman2',
            'slug' => 'lat-p2',
            'user_id' => 3,
            'start_at' => Carbon::now()->toDateTimeString(),
            'duration' => 60,
            'max_participant' => 60,
            'password' => 'fajry',
        ]);

        DB::table('contest_problem')->insert([
            'contest_id' => 111111,
            'problem_id' => 1,
        ]);
        DB::table('contest_problem')->insert([
            'contest_id' => 222222,
            'problem_id' => 1,
        ]);
        DB::table('contest_problem')->insert([
            'contest_id' => 111111,
            'problem_id' => 2,
        ]);
        DB::table('contest_problem')->insert([
            'contest_id' => 222222,
            'problem_id' => 2,
        ]);

        // DB::table('contest_problem')->insert([
        //     'contest_id' => 1,
        //     'problem_id' => 2,
        // ]);

        DB::table('contest_user')->insert([
            'contest_id' => 111111,
            'user_id' => 1,
            'nilai' => 0,
        ]);
        DB::table('contest_user')->insert([
            'contest_id' => 111111,
            'user_id' => 3,
            'nilai' => 0,
        ]);
        DB::table('contest_user')->insert([
            'contest_id' => 222222,
            'user_id' => 1,
            'nilai' => 0,
        ]);
        DB::table('contest_user')->insert([
            'contest_id' => 222222,
            'user_id' => 2,
            'nilai' => 0,
        ]);
        
        // tambahan
        // DB::table('contest_problem_user')->insert([
        //     'contest_id' => 111111,
        //     'user_id' => 3,
        //     'problem_id' => 1,
        //     'answer' => 100
        // ]);
        // DB::table('contest_problem_user')->insert([
        //     'contest_id' => 111111,
        //     'user_id' => 3,
        //     'problem_id' => 2,
        //     'answer' => 200
        // ]);
        // DB::table('contest_problem_user')->insert([
        //     'contest_id' => 111111,
        //     'user_id' => 1,
        //     'problem_id' => 2,
        //     'answer' => 100
        // ]);
        // DB::table('contest_problem_user')->insert([
        //     'contest_id' => 222222,
        //     'user_id' => 2,
        //     'problem_id' => 1,
        //     'answer' => 100
        // ]);
        // DB::table('contest_problem_user')->insert([
        //     'contest_id' => 222222,
        //     'user_id' => 1,
        //     'problem_id' => 2,
        //     'answer' => 100
        // ]);
        

    }
}
