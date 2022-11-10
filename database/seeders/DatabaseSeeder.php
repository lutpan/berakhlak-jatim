<?php

namespace Database\Seeders;

// use App\Models\User;
// use App\Models\Kategoris;

use App\Models\Level;
use Illuminate\Database\Seeder;
// use Database\Seeders\UserSeeder;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;

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
        $this->call(UserSeeder::class);
        $this->call(KategoriSeeder::class);

        // level
        $levels = [
            ['name' => 'admin'],
            ['name' => 'OPD/Kab/Kota']
        ];

        foreach ($levels as $key => $value) {
            # code...
            Level::create($value);
        }
        // DB::table('kategoris')->insert(
        //     [
        //         ['name' => 'Berorientasi Pelayanan'],
        //         ['name' => 'Akuntabel'],
        //         ['name' => 'Kompeten'],
        //         ['name' => 'Harmonis'],
        //         ['name' => 'Loyal'],
        //         ['name' => 'Adaptif'],
        //         ['name' => 'Kolaboratif']
        //     ]
        // );
    }
}
