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
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@psikotest.com',
                'is_admin' => '1',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Peserta',
                'email' => 'peserta@psikotest.com',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
                'old_password' => '123456',
                'nomor_tes' => random_int(10000000, 99999999),
                'status_tes' => false,
                'jenis_kelamin' => 'L',
                'tgl_lahir' => date('Y-m-d', time()),
                'tmpt_lahir'=> 'Makassar',
                'alamat' => 'Jl. Delima',
                'no_hp' => random_int(100000000000, 999999999999),
            ],
            [
                'name' => 'Afik',
                'email' => 'afik@psikotest.com',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
                'old_password' => '123456',
                'nomor_tes' => random_int(10000000, 99999999),
                'status_tes' => false,
                'jenis_kelamin' => 'L',
                'tgl_lahir' => date('Y-m-d', time()),
                'tmpt_lahir'=> 'Jeneponto',
                'alamat' => 'Jl. Rappochinki',
                'no_hp' => random_int(100000000000, 999999999999),
            ],
            [
                'name' => 'Nisa',
                'email' => 'nisa@psikotest.com',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
                'old_password' => '123456',
                'nomor_tes' => random_int(10000000, 99999999),
                'status_tes' => false,
                'jenis_kelamin' => 'P',
                'tgl_lahir' => date('Y-m-d', time()),
                'tmpt_lahir' => 'Kendari',
                'alamat' => 'Jl. Pesona Kendari',
                'no_hp' => random_int(100000000000, 999999999999),
            ],
            [
                'name' => 'Lala',
                'email' => 'lala@psikotest.com',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
                'old_password' => '123456',
                'nomor_tes' => random_int(10000000, 99999999),
                'status_tes' => false,
                'jenis_kelamin' => 'P',
                'tgl_lahir' => date('Y-m-d', time()),
                'tmpt_lahir' => 'Jeneponto',
                'alamat' => 'Jl. Pochinok',
                'no_hp' => random_int(100000000000, 999999999999),
            ],
            [
                'name' => 'Jian',
                'email' => 'jian@psikotest.com',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
                'old_password' => '123456',
                'nomor_tes' => random_int(10000000, 99999999),
                'status_tes' => false,
                'jenis_kelamin' => 'L',
                'tgl_lahir' => date('Y-m-d', time()),
                'tmpt_lahir' => 'Bulkum',
                'alamat' => 'Jl. Mill',
                'no_hp' => random_int(100000000000, 999999999999),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
