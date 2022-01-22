<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front/index', [
            'user' => 'user'
        ]);
    }

    public function categoryList()
    {

    }

    public function showPostItem()
    {
        return view('front/contacts', [
            'user' => 'user'
        ]);
    }

    public function showContacts()
    {
        return view('front/contacts', [
            'user' => 'user'
        ]);
    }

}
