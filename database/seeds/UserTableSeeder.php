<?php

use App\User;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('users')->insert([
          'name' => 'Diky Arga',
          'username' => 'dikyarga',
          'email' => 'hello@dikyarga.com',
          'password' => bcrypt('secret'),
          'role' => 'admin',
          'web' => 'dikyarga.com',
          'bio' => 'live has no CTRL + Z',
          'facebook' => 'dikyargaID',
          'is_first_time' => 0,
          'created_at' => Carbon\Carbon::now(),
          'updated_at' => Carbon\Carbon::now(),
      ]);
      DB::table('users')->insert([
          'name' => 'M. N. Irfan',
          'username' => 'mnirfan',
          'email' => 'mnirfan@tealinuxos.org',
          'password' => bcrypt('secret'),
          'role' => 'pengguna',
          'web' => 'mnirfan.com',
          'bio' => 'iam programmer, i have no live',
          'facebook' => 'mnirfan',
          'is_first_time' => 1,
          'created_at' => Carbon\Carbon::now(),
          'updated_at' => Carbon\Carbon::now(),
      ]);
      /*
      $faker = \Faker\Factory::create();

      foreach(range(1,30) as $index)
      {
        User::create([
          'name' => $faker->name,
          'username'     => $faker->firstName($gender = null|'male'|'female'),
          'email'      => $faker->email,
          'password'      => bcrypt('secret'),
          'role'    => 'pengguna',
          'web' => $faker->domainName,
          'bio' => $faker->text,
          'facebook' =>  $faker->firstName($gender = null|'male'|'female'),
          'is_first_time' => 1,
          ]);
      }
      */



    }
}
