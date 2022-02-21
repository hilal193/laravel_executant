<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $manga = Categorie::all();
        return view("admin.categories.index", compact("manga"));
    }

    public function create()
    {
        # code...
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

    public function destroy()
    {
        # code...
    }
}
