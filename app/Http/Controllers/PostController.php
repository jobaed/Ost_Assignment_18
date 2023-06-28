<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller {

    // Task 5

    public function posts() {
        // Show All Posts
        $posts = Post::with( 'category' )->get();

        // Show Only Tresh Data
        // $post = Post::with( 'category' )->onlyTrashed()->get();

        return view( 'posts', compact( 'posts' ) );

    }

    // Task - 6
    public function categoryPost( $id ) {
        $postCount = Post::where( 'category_id', $id )->count();
        return $postCount;
    }

    // Task - 7
    public function deletePost( $id ) {
        $post = Post::findOrFail( $id );
        $post->delete();

        return "Successfully Deleted";
    }


    // Task - 8
    public function softDel(){
        $post = Post::with( 'category' )->onlyTrashed()->get();
        return $post;
    }

    
}
