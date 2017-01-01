<?php

use App\User;
use App\Apps;
use Illuminate\Database\Seeder;

class AppTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = \Faker\Factory::create();

      //Posts::truncate();
      foreach(range(1,30) as $index)
      {
        $user = User::All()->random(1);
        Apps::create([
          'user_id' => $user->id,
          'nama_aplikasi'     => $faker->sentence(3),
          'kategori'      => 'other',
          'versi_aplikasi' => '2.3.1',
          'deskripsi'      => $faker->text,

          'nama_file_aplikasi' => $faker->slug() . '.iso',
          'ukuran_file' => '25MB',
          ]);
      }
    }
}
