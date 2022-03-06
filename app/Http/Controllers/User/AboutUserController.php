<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUserController extends Controller
{
    public function About()
    {
        return view('user.about.index');
    }
}
