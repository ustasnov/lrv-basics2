<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
  /**
  * Run the database seeds.
  */
  public function run(): void
  {
    DB::table('student')->insert([
        'group_id' => 1,
        'surname' => 'Весков',
        'name' => 'Алексей',
    ]);
    DB::table('student')->insert([
        'group_id' => 1,
        'surname' => 'Илюхин',
        'name' => 'Никита',
    ]);
    DB::table('student')->insert([
        'group_id' => 1,
        'surname' => 'Акимова',
        'name' => 'Марина',
    ]);
    DB::table('student')->insert([
        'group_id' => 1,
        'surname' => 'Киреева',
        'name' => 'Ольга',
    ]);
    DB::table('student')->insert([
        'group_id' => 1,
        'surname' => 'Сотников',
        'name' => 'Владимир',
    ]);

    DB::table('student')->insert([
        'group_id' => 2,
        'surname' => 'Ковтун',
        'name' => 'Светлана',
    ]);
    DB::table('student')->insert([
        'group_id' => 2,
        'surname' => 'Набокова',
        'name' => 'Варвара',
    ]);
    DB::table('student')->insert([
        'group_id' => 2,
        'surname' => 'Демина',
        'name' => 'Екатерина',
    ]);
    DB::table('student')->insert([
        'group_id' => 2,
        'surname' => 'Васильев',
        'name' => 'Константин',
    ]);
    DB::table('student')->insert([
        'group_id' => 2,
        'surname' => 'Чемякин',
        'name' => 'Евгений',
    ]);
    DB::table('student')->insert([
        'group_id' => 2,
        'surname' => 'Харитонов',
        'name' => 'Александр',
    ]);
    DB::table('student')->insert([
        'group_id' => 2,
        'surname' => 'Федин',
        'name' => 'Дмитрий',
    ]);

    DB::table('student')->insert([
        'group_id' => 3,
        'surname' => 'Трутаев',
        'name' => 'Валерий',
    ]);
    DB::table('student')->insert([
        'group_id' => 3,
        'surname' => 'Прядкина',
        'name' => 'Светлана',
    ]);
    DB::table('student')->insert([
        'group_id' => 3,
        'surname' => 'Никоноров',
        'name' => 'Тимофей',
    ]);
    DB::table('student')->insert([
        'group_id' => 3,
        'surname' => 'Малышев',
        'name' => 'Валерий',
    ]);
  }
}

