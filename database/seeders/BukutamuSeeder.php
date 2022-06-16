<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bukutamu;

class BukutamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Bukutamu::create([
        //    'nama' => 'Ilham Nur Romdoni',
        //    'email' => 'romdhoninuril@gmail.com',
        //    'komentar' => 'Bagus Sekali', 
        // ]);
        
        Bukutamu::firstOrCreate([
            'nama' => 'Ilham Nur Romdoni',
            'email' => 'romdhoninuril@gmail.com',
            'komentar' => 'Bagus Sekali',  
        ]);

        Bukutamu::firstOrCreate([
            'nama' => 'Ilham Nur Romdoni',
            'email' => 'romdhoninuril@gmail.com',
            'komentar' => 'Bagus Sekali',  
        ]);
    }
}
