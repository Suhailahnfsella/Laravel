<?php

namespace Database\Seeders;

use App\Models\KategoriModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('kategoris')->insert([
        //     'kategori' => 'Makanan',
        // ]);
        
        KategoriModel::factory(5)->create();

    }
}
