<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class CatalogSeeder extends Seeder

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
            'file' => Storage::url('file.jpg'),
            'description' => Str::random(20),
            'stock'=> '3',
            'price' => '3',
        ]);
    }
}
