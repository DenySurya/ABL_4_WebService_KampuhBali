<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama' => 'deny',
            'id_kategori' => '1',
            'deskripsi' => 'ini deskripsi',
            'harga' => '1000',
            'stok' => '1',
            'gambar' => 'aaa.jpg',
        ]);
    }
}
