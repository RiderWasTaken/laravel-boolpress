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
        // $posts = [
        //     [
        //         'picture' => 'https://c8.alamy.com/comp/EPF1YW/nun-with-handgun-isolated-on-white-EPF1YW.jpg',
        //         'description' => 'Nun...with guns',
        //         'accountName' => 'XqcOw',
        //         'accountPfp' => 'https://1tb.favim.com/preview/7/766/7664/76642/7664293.jpg',
        //         'date' => '9/11/2001',
        //     ]
        // ];

        // foreach ($posts as $post) {
        //     $postObj = new Post();
        //     $postObj->picture = $post['picture'];
        //     $postObj->description = $post['description'];
        //     $postObj->accountName = $post['accountName'];
        //     $postObj->accountPfp = $post['accountPfp'];
        //     $postObj->date = $post['date'];
        //     $postObj->save();

        // }

        for ($i=0;$i<50;$i++) {
            $postObj = new Post();
            $postObj->picture = 'https://c8.alamy.com/comp/EPF1YW/nun-with-handgun-isolated-on-white-EPF1YW.jpg';
            $postObj->description = $faker->paragraph(5);
            $postObj->accountName = $faker->word();
            $postObj->accountPfp = 'https://1tb.favim.com/preview/7/766/7664/76642/7664293.jpg';
            $postObj->date = $faker->date();
            $postObj->save();
        }
    }
}
