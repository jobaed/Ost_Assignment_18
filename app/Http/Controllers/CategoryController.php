<?php

namespace App\Http\Controllers;

use App\Models\Category;


// Task - 10

class CategoryController extends Controller {
    public function getPosts( $id ) {
        $category = Category::findOrFail( $id );
        $posts = $category->posts;

        if ( $posts->isEmpty() ) {
            return "NO Post Availlable";

        }
        return $posts;
    }

    // Task - 11
    public function latestCat($categoryId) {
        $category = Category::findOrFail( $categoryId );
        $latestPost = $category->latestPost;
        return $latestPost;
    }

    // Task - 12
    public function latestPost(){
        $categories = Category::with('latestPost')->get();

        return view('latest-post', compact('categories'));
    }
}
