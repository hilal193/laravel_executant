<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $this->authorize('realUser', $user);
        $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'age' => 'required|numeric',
            'email' => 'required|string',
            'avatar_id' => 'required',
        ]);

        // $user = User::find($request);

        $user -> avatar_id=$request->avatar_id;
        $user -> name=$request->name;
        $user -> prenom=$request->prenom;
        $user -> age=$request->age;
        $user -> email=$request->email;
        // $user -> role=$request->role;
        $user -> password=Hash::make($request->password);


        $user -> save();
        return redirect()->back()->with('success', 'Profil a bien été modifié');
    }

    public function updateClient(User $user, Request $request)
    {
        $this->authorize('isRealUser', $user);
        $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'age' => 'required|numeric',
            'email' => 'required|string',
            'avatar_id' => 'required',
        ]);
        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->avatar_id = $request->avatar_id;

        $user->save();
        return redirect()->back()->with('success', 'Profil a bien été modifié');
    }

}
