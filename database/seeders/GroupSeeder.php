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
        'title' => 'Группа Е1',
        'start_from' => '2024-08-25',
        'is_active' => false,
    ]);
    DB::table('group')->insert([
        'title' => 'Группа Е2',
        'start_from' => '2024-08-26',
        'is_active' => true,
    ]);

    DB::table('group')->insert([
        'title' => 'Группа Е3',
        'start_from' => '2024-08-27',
        'is_active' => true,
    ]);
  }
}

