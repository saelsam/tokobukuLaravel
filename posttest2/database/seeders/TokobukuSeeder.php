<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TokobukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tokobuku = [
            [
                'id' => '1',
                'nama' => 'Sang Pemimpi',
                'jenis' => 'fiksi',
                'harga' => '30000',
            ],
            [
                'id' => '2',
                'nama' => 'Laskar Pelangi',
                'jenis' => 'fiksi',
                'harga' => '115000',
            ],
            [
                'id' => '3',
                'nama' => 'Perahu Kertas',
                'jenis' => 'fiksi',
                'harga' => '40000',
            ],
        ];

        foreach($tokobuku as $tbk) {
            \App\Models\Tokobuku::firstOrCreate($tbk);
        }

    }
}
