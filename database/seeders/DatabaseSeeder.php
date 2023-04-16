<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Problem;
use Illuminate\Database\Seeder;
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
    }
}
