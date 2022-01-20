<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Models\AdminModel;
use App\Http\Models\PostsModel;

class PostsController extends Controller
{
    // MAIN View methods admin panel
    public function showPostsList()
    {
        $user = AdminModel::getUserName();
        $posts = PostsModel::getPostsData();
        return view('admin/posts_table', [
            'user' => $user,
            'posts' => $posts
        ]);
    }

    public function showArchivedPostsList()
    {
        $archivedPosts = PostsModel::getPostsModel();
        return view('admin/posts_archived', [
            'posts' => $archivedPosts

        ]);
    }

    public function showPostItem($id)
    {
        $post = PostsModel::getPostByID($id);
        return view('admin/post_item', [
            'post' => $post
        ]);
    }

    // Filter posts-table methods admin panel
    public function filterPostsRelatedData(Request $request)
    {

    }

    // CRUD methods admin panel
    public function createNewPost()
    {
        $user = AdminModel::getUserName();
        $createPost = PostsModel::createPostItem();
        return view('admin/create_post', [
            'user' => $user
        ]);
    }

    public function updatePost($id)
    {
        $post = PostsModel::getPostByID($id);
        $updatePost = PostsModel::updatePostItem($id);
        return view('admin/edit_post', [
            'post' => $post,
            'id' => $id
        ]);
    }

    public function savePost($id)
    {

    }

    public function removePostToArchive($id)
    {
        $removePost = PostsModel::sendPostToArchive();
    }

    public function deletePost($id)
    {
        PostsModel::deletePostItem();
    }


}
