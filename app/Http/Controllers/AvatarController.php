<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function index()
    {
        $avatarTout = Avatar::all();
        return view("admin.avatars.index",compact("avatarTout"));

    }
    public function create()
    {
        return view("admin.avatars.create");
    }

    public function store()
    {

    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
