<?php

use Illuminate\Database\Seeder;

class CategoriessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'user_id' => 'economics',
            'title' => 'Економика',
            'position' => 1,
        ]);
        DB::table('categories')->insert([
            'name' => 'politics',
            'title' => 'Политика',
            'position' => 1,
        ]);
        DB::table('categories')->insert([
            'name' => 'sobytiya',
            'title' => 'События',
            'position' => 1,
        ]);
        DB::table('categories')->insert([
            'name' => 'kyiv news',
            'title' => 'Киевские новости',
            'position' => 1,
        ]);
        DB::table('categories')->insert([
            'name' => 'technology',
            'title' => 'Технологии',
            'position' => 1,
        ]);
        DB::table('categories')->insert([
            'name' => 'science',
            'title' => 'Наука',
            'position' => 1,
        ]);
        DB::table('categories')->insert([
            'name' => 'auto',
            'title' => 'Авто',
            'position' => 1,
        ]);
        DB::table('categories')->insert([
            'name' => 'sport',
            'title' => 'Спорт',
            'position' => 1,
        ]);
    }
}
