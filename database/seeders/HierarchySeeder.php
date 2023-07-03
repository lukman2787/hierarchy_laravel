<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HierarchySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'nama' => 'Baris 1',
                'parent_id' => NULL,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Baris 1.1',
                'parent_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Baris 1.2',
                'parent_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Baris 2',
                'parent_id' => NULL,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Baris 2.1',
                'parent_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Baris 2.1.1',
                'parent_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Baris 2.2',
                'parent_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ])->each(function ($type) {
            DB::table('hierarchy')->insert($type);
        });
    }
}
