<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $berita =
            [];

        foreach ($berita as $key => $value) {
            # code...
            Berita::create($value);
        }
        //
    }
}
