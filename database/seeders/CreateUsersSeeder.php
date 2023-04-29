<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $base_number = '08';
        $user = [
            [
                'name' => 'Admin',
                'no_hp' => '083152501285',
                'is_admin' => '1',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Peserta',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
                'old_password' => '123456',
                'nomor_tes' => random_int(10000000, 99999999),
                'status_tes' => false,
                'progres_tes' => '1',
                'no_hp' => $base_number . random_int(1000000000, 9999999999),
            ],
            [
                'name' => 'Afik',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
                'old_password' => '123456',
                'nomor_tes' => random_int(10000000, 99999999),
                'status_tes' => false,
                'progres_tes' => '1',
                'no_hp' => $base_number . random_int(1000000000, 9999999999),
            ],
            [
                'name' => 'Nisa',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
                'old_password' => '123456',
                'nomor_tes' => random_int(10000000, 99999999),
                'status_tes' => false,
                'progres_tes' => '1',
                'no_hp' => $base_number . random_int(1000000000, 9999999999),
            ],
            [
                'name' => 'Lala',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
                'old_password' => '123456',
                'nomor_tes' => random_int(10000000, 99999999),
                'status_tes' => false,
                'progres_tes' => '1',
                'no_hp' => $base_number . random_int(1000000000, 9999999999),
            ],
            [
                'name' => 'Jian',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
                'old_password' => '123456',
                'nomor_tes' => random_int(10000000, 99999999),
                'status_tes' => false,
                'progres_tes' => '1',
                'no_hp' => $base_number . random_int(1000000000, 9999999999),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
