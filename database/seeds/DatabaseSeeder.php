<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('game_titles')->insert([
          [
            'title' => "ApexLegends",
          ],
          [
            'title' => "Bloodborne",
          ],
          [
            'title' => "CallOfDuty",
          ],
        ]);
        DB::table('sns')->insert([
          [
            'name' => "Twitter",
            'url' => "a",
            'icon' => "https://twitter.com/",
          ],
          [
            'name' => "youtube",
            'url' => "a",
            'icon' => "https://YouTube.com/",
          ],
          [
            'name' => "facebook",
            'url' => "a",
            'icon' => "https://facebook.com/",
          ],
          [
            'name' => "instagram",
            'url' => "a",
            'icon' => "https://instagram.com/",
          ],
        ]);
        DB::table('user_sns')->insert([
          [
            'name' => "Twitter",
            'url' => "a",
            'icon' => "https://twitter.com/",
          ],
          [
            'name' => "youtube",
            'url' => "a",
            'icon' => "https://YouTube.com/",
          ],
          [
            'name' => "facebook",
            'url' => "a",
            'icon' => "https://facebook.com/",
          ],
          [
            'name' => "instagram",
            'url' => "a",
            'icon' => "https://instagram.com/",
          ],
        ]);
    }
}
