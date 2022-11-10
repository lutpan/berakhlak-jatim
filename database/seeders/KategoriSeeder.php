<?php

namespace Database\Seeders;

use App\Models\Kategoris;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            [
                'name' => 'Berorientasi Pelayanan'
            ],
            [
                'name' => 'Akuntabel'
            ],
            [
                'name' => 'Kompeten'
            ],
            [
                'name' => 'Harmonis'
            ],
            [
                'name' => 'Loyal'
            ],
            [
                'name' => 'Adaptif'
            ],
            [
                'name' => 'Kolaboratif'
            ],

        ];
        foreach ($kategori as $key => $value) {
            # code...
            Kategoris::create($value);
        }
    }
}
