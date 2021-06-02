<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 40) -> make() -> each(function($post){

            $tag = Tag::inRandomOrder() -> first();
            $post -> tag_id = $tag -> id;
            $post -> save();
        });
    }
}
