<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Product::create([
            'nama_produk' => 'Laptop Asus TUF Gaming',
            'keterangan' => 'Laptop dengan performa yang baik untuk gaming.',
            'harga' => 7600000,
            'jumlah' => 8
        ]);
        \App\Models\Product::create([
            'nama_produk' => 'iPhone 13 Pro Max',
            'keterangan' => 'Utamakan gengsi, bukan fungsi.',
            'harga' => 24000000,
            'jumlah' => 3
        ]);
    }
}
