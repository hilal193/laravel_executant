<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $imageTout = Image::orderBy("created_at","desc")->paginate(2);
        return view("admin.images.index");
    }

    public function create()
    {

    }

    public function store()
    {

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
