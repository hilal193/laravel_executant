<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $toutUser = User::all();
        return view("admin.users.index",compact('toutUser'));
    }

    public function create()
    {
        return view("admin.users.create");
    }

    public function store()
    {
        # code...
    }
}
