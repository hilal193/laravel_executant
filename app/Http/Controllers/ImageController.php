<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        $imageAll = Image::all();
        $imageTout = Image::orderBy("created_at","desc")->paginate(2);
        return view("admin.images.index", compact("imageAll","imageTout"));
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
    public function download(Image $images)
    {
        // dd($images);
        return Storage::disk('public')->download('img/'. $images->url);
        // return redirect()->back()->with('success', "image en téléchargement ...");
    }
}
