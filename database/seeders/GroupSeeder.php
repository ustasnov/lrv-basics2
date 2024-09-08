<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
  /**
  * Run the database seeds.
  */
  public function run(): void
  {
    DB::table('group')->insert([
        'title' => 'Е1',
        'start_from' => '2022-08-24',
        'is_active' => false,
    ]);
    DB::table('group')->insert([
        'title' => 'Е2',
        'start_from' => '2023-08-25',
        'is_active' => true,
    ]);

    DB::table('group')->insert([
        'title' => 'Е3',
        'start_from' => '2024-08-24',
        'is_active' => true,
    ]);
  }
}

