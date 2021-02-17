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
            'url' => "https://twitter.com/",
            'icon' => "/img/twitter-brands.svg",
          ],
          [
            'name' => "youtube",
            'url' => "https://youtube.com/",
            'icon' => "/img/youtube-brands.svg",
          ],
          [
            'name' => "facebook",
            'url' => "https://facebook.com/",
            'icon' => "/img/facebook-brands.svg",
          ],
          [
            'name' => "instagram",
            'url' => "https://instagram.com/",
            'icon' => "/img/instagram-brands.svg",
          ],
        ]);
    }
}
