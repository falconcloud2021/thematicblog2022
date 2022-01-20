<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    public function getUserName($id)
    {
        return DB::table('users')
                ->select('name')
                ->where('id', $id)
                ->get();
    }



    //use HasFactory;
}
