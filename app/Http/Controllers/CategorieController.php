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

    public function store()
    {
        # code...
    }

    public function show()
    {
        # code...
    }
    public function edit()
    {
        # code...
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
