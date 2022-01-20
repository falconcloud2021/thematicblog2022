<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontUserController extends Controller
{
    public function frontUserRegistration()
    {
        return view('front/registration', [
            'user' => 'user'
        ]);
    }
}
