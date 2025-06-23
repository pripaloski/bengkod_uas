<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin Website',
                'email' => 'superadmin@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
                'alamat' => 'Jl. Mari Nasi No. 69, Surabaya',
                'no_hp' => '086969696969',
                'role' => 'admin',
                'no_ktp' => 1234567890123456,
                'no_rm' => '202201-1',
                'poli_id' => null,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dr. Sumanto',
                'email' => 'dokter1@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
                'alamat' => 'Jl. Suka Sakit No. 1, Tangerang',
                'no_hp' => '081234567890',
                'role' => 'dokter',
                'no_ktp' => 1234567890111111,
                'no_rm' => '202101-3',
                'poli_id' => 1,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Abang Hitler',
                'email' => 'pasien1@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
                'alamat' => 'Jl. Sudah Tobat No. 15, Bekasi',
                'no_hp' => '083456789012',
                'role' => 'pasien',
                'no_ktp' => 21372678901267237,
                'no_rm' => '202201-1',
                'poli_id' => null,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dr. Kratos',
                'email' => 'dokter2@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
                'alamat' => 'Jl. Perang No. 1, Bandung',
                'no_hp' => '081111111111',
                'no_ktp' => 2137267890199999,
                'no_rm' => '202109-3',
                'poli_id' => 3,
                'role' => 'dokter',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Zeus Bapaknya Kratos',
                'email' => 'pasien2@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
                'alamat' => 'Jl. Kekalahan No. 15, Purwakarta',
                'no_hp' => '084567890123',
                'role' => 'pasien',
                'no_ktp' => 1234567890123412,
                'no_rm' => '202101-38',
                'poli_id' => null,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dr. Big Smoke',
                'email' => 'dokter3@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
                'alamat' => 'Jl. Pengkhianatan No. 5, Yogyakarta',
                'no_hp' => '085678901234',
                'role' => 'dokter',
                'no_ktp' => 123456321123456,
                'no_rm' => '202101-22',
                'poli_id' => 2,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carl Johnson',
                'email' => 'pasien3@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
                'alamat' => 'Jl. Grove Street No. 15, Cikarang',
                'no_hp' => '083456789999',
                'role' => 'pasien',
                'no_ktp' => 21372678901267222,
                'no_rm' => '202201-23',
                'poli_id' => null,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
