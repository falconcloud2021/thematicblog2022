<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\AdminModel;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin/dashboard', [
            'user' => 'admin'
        ]);
    }

    public function showUserName($id)
    {
        if(isset($id)){
            return AdminModel::getUserName($id);
        } else {
            return 'noName!';}
    }


}
