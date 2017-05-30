<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'политика',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);

        DB::table('tags')->insert([
            'name' => 'машина',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('tags')->insert([
            'name' => 'спорт',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);

        DB::table('tags')->insert([
            'name' => 'мина',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('tags')->insert([
            'name' => 'малина',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);

        DB::table('tags')->insert([
            'name' => 'авто',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('tags')->insert([
            'name' => 'футбол',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);

        DB::table('tags')->insert([
            'name' => 'хокей',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('tags')->insert([
            'name' => 'телефон',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);

        DB::table('tags')->insert([
            'name' => 'телевизор',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('tags')->insert([
            'name' => 'карта',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);

        DB::table('tags')->insert([
            'name' => 'кефир',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('tags')->insert([
            'name' => 'марс',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);

        DB::table('tags')->insert([
            'name' => 'люди',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('tags')->insert([
            'name' => 'марка',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);

        DB::table('tags')->insert([
            'name' => 'миф',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
    }
}
