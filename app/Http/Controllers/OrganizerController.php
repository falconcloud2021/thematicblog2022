<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    public function showOrganizerPage()
    {
        return view('admin/organizer', [
            'user' => 'admin'
        ]);
    }
}
