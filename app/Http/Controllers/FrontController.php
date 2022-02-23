<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function admin()
    {
        $avatarTout = Avatar::all();
        return view("admin.dashboard", compact("avatarTout"));
    }

    public function home()
    {
        return view("home");
    }

    // Si j'ai des pages en front
    public function gallerie()
    {
        return view("pages.gallerie");
    }

    public function avatar()
    {
        return view("pages.avatar");
    }
    public function categorie()
    {
        return view("pages.categorie");
    }
    public function image()
    {
        return view("pages.image");
    }
    public function user()
    {
        return view("pages.user");
    }
}
