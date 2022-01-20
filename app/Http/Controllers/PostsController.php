<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Models\PostsModel;

class PostsController extends Controller
{
    public function showPosts()
    {
        $posts = PostsModel::getPostsData();
        return view('admin/posts_table', [
            'posts' => $posts
        ]);
    }

    public function showPostByID($id)
    {
        $post = PostsModel::getPostByID($id);
        return view('admin/post_item', [
            'post' => $post
        ]);
    }
}
