<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     factory(Comment::class, 10) -> create();
    // }
        factory(Comment::class, 20)
              -> make()
              -> each(function($comment) {            
                $pst = Post::inRandomOrder() -> first();
                $comment -> post() -> associate($pst);            
                $comment -> save();
        });
    }
}
