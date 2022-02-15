<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function admin()
    {
        return view("admin.dashboard");
    }

    public function home()
    {
        return view("home");
    }
}
