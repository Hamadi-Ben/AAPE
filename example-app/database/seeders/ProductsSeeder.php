<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => Str::random(15),
            'description' => Str::random(20),
            'file' => Storage::url('file.jpg'),
            'stock' => '3',
            'price' => '3',
        ]);

        DB::table('products')->insert([
            'title' => Str::random(15),
            'description' => Str::random(20),
            'file' => Storage::url('file.jpg'),
            'stock' => '3',
            'price' => '3',
        ]);

    }
}
