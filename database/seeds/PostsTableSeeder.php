<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0;$i<50;$i++) {
            $postObj = new Post();
            $postObj->picture = $faker->imageUrl(900, 900, 'aesthetic', true);
            $postObj->description = $faker->paragraph(5);
            $postObj->accountName = $faker->word();
            $postObj->accountPfp = 'https://cdn.discordapp.com/attachments/880430888712806404/889824082399481856/AngyTwacer.jpg';
            $postObj->date = $faker->date();
            $postObj->save();
        }
    }
}
