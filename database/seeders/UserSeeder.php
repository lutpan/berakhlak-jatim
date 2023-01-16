<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =
            [
                [
                    'name' => 'Admin',
                    'id_level' => '1',
                    'username' => 'admin',
                    'password' => Hash::make('admin'),
                ],
                [
                    'name' => 'Biro Organisasi',
                    'id_level' => '2',
                    'username' => 'rorgan',
                    'password' => Hash::make('berakhlak'),
                ],
                [
                    'name' => 'Kota Surabaya',
                    'id_level' => '2',
                    'username' => 'surabaya',
                    'password' => Hash::make('berakhlak'),
                ],
                [
                    'name' => 'Kabupaten Jombang',
                    'id_level' => '2',
                    'username' => 'kab_jombang',
                    'password' => Hash::make('berakhlak'),
                ]
            ];

        foreach ($users as $key => $value) {
            # code...
            User::create($value);
        }
    }
}
