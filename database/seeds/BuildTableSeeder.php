<?php

use Illuminate\Database\Seeder;

class BuildTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('builds')->insert([
          'task_id' => 3,
          'sudah_jadi' => 1,

          'created_at' => Carbon\Carbon::now(),
          'updated_at' => Carbon\Carbon::now(),
      ]);
      DB::table('builds')->insert([
          'task_id' => 4,
          'sudah_jadi' => 0,

          'created_at' => Carbon\Carbon::now(),
          'updated_at' => Carbon\Carbon::now(),
      ]);
      DB::table('builds')->insert([
          'task_id' => 5,
          'sudah_jadi' => 0,

          'created_at' => Carbon\Carbon::now(),
          'updated_at' => Carbon\Carbon::now(),
      ]);
    }
}
