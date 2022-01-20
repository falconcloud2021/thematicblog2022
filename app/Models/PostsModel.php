<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class PostsModel extends Model
{
    public function getPostsData()
    {
        return DB::table('posts')->select('post')->latest()->paginate(7);
    }

    public function getPostByID($id)
    {
        return DB::table('posts')->select('post')->where('id', $id)->first();
    }

    public function createPostItem($request)
    {
        $createData = $request-all();
        DB::table('posts')->insert([
            'text' => $createData['text'],
            'name' => $createData['name'],
            ]);
    }

    public function updatePostItem($id, $request)
    {
        $updateData = $request->all();
        DB::table('posts')
            ->where('id', $id)
            ->update([
                'text' => $updateData['text'],
                'name' => $updateData['name'],
            ]);
    }


    // use HasFactory;
}
