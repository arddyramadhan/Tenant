<?php

namespace Database\Seeders;

use App\Models\Tenant\Pengaturan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantPengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengaturan::create([
            'title' => 'Nama Belum Ada',
        ]);
    }
}
