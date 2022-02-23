<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $cat = Categorie::all();
        return view("admin.categories.index", compact("cat"));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $categorie=new Categorie();
        $categorie->name=$request->name;
        $categorie->save();

        return redirect()->route('categories.index')->with('success', 'Une nouvelle categorie ajoutée !');
    }

    public function show()
    {
        # code...
    }
    public function edit(Categorie $categorie)
    {
        return view("admin.categories.edit",compact("categorie"));
    }

    public function update()
    {
        # code...
    }

    public function destroy(Categorie $categories)
    {
        $categories->delete();
        return redirect()->back();
    }
}
