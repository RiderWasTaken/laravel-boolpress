<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\PostExtraDetails;
use App\Category;
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
        $categoryList = 
        [
            'A',

            'B',
            
            'C',
            
            'D',
            
            'E',
        ];

        $categoryListID = [];

        foreach($categoryList as $category)  {
            $categoryObj = new Category();
            $categoryObj->name = $category;
            $categoryObj->save();
            $categoryListID[] = $categoryObj->id;
        }

        for ($i=0;$i<50;$i++) {

            $postExtra = new PostExtraDetails();
            $postExtra->location = $faker->word();
            $postExtra->edit = $faker->boolean();
            $postExtra->save();

            $postObj = new Post();
            $postObj->picture = $faker->imageUrl(900, 900, 'aesthetic', true);
            $postObj->description = $faker->paragraph(5);
            $postObj->accountName = $faker->word();
            $postObj->accountPfp = 'https://cdn.discordapp.com/attachments/880430888712806404/889824082399481856/AngyTwacer.jpg';
            $postObj->date = $faker->date();

            $randCatListID = array_rand($categoryListID, 1);
            $categoryID = $categoryListID[$randCatListID];
            $postObj->category_id = $categoryID;

            $postObj->post_extra_detail_id = $postExtra->id;
            $postObj->save();

        }
    }
}
