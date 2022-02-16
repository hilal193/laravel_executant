<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $toutUser = User::all();
        $paginationUser = User::orderBy("created_at","desc")->paginate(2);
        return view("admin.users.index",compact('toutUser','paginationUser'));
    }

    public function create()
    {
        return view("admin.users.create");
    }

    public function store()
    {
        # code...
    }
    public function destroy(User $id)
    {
        $id->delete();
        return redirect()->back();
    }
    public function edit(User $user)
    {
        $roleTout = Role::all();
        $avatarTout = Avatar::all();
        return view("admin.users.edit",compact('user','roleTout','avatarTout'));
    }

    public function update(User $user, Request $request)
    {
        // dump($user);
        // dd($request);
        $user -> avatar=$request->avatar;
        $user -> name=$request->name;
        $user -> prenom=$request->prenom;
        $user -> age=$request->age;
        $user -> email=$request->email;
        $user -> role=$request->role;
        $user -> save();
        return redirect()->back();
    }
}
