<?php

namespace Database\Seeders;

use App\Models\KategoriModel;
use Illuminate\Database\Seeder;

class KategoriuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriModel::factory(5)->create();
    }
}
