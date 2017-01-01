<?php

use App\User;
use App\Tasks;

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
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
      foreach(range(1,5) as $index)
      {
        $user = User::All()->random(1);
        Tasks::create([
          'user_id' => $user->id,
          'nama_os'     => $faker->sentence(3),
          'deskripsi'      => $faker->text,
          'list_aplikasi' => '1,2,3,5',
          'arsiektur' => '64',
          'theme' => 'dark_theme',
          'icon' => 'numix',
          'wallpaper' => 'wallpaper-demo.jpg',
          'nama_file_iso' => 'tealinux-dikyarga-edition.iso',

          'slug'      => $faker->slug(),
          'status'    => 0,
          ]);
      }
    }

}
