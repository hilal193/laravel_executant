<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        // $this->authorize("isAdmin");

        $imageAll = Image::all();
        $imageTout = Image::orderBy("created_at","desc")->paginate(2);
        return view("admin.images.index", compact("imageAll","imageTout"));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        // $this->authorize("isAdmin");
        request()->validate([
            "nom" => ["required"],
        ]);
        $image = new Image();
        $image->nom = $request->nom;
        $image->categorie_id = $request->categorie_id;
        if ($request->src) {
            $request->file('src')->storePublicly('img/','public');
            $image->src = $request->file('src')->hashName();
        }else{
            $fichierURL = file_get_contents($request->srcURL);
            $lien = $request->srcURL;
            $token = substr($lien, strrpos($lien, '/') + 1);
            Storage::disk('public')->put('img/'.$token , $fichierURL);
            $image->src = $token;
        }

        $image->save();
        return redirect()->route('images.index')->with('success', $request->nom . ' bien ajouté !');

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
    public function destroy(Image $image)
    {
        // $this->authorize("isAdmin");
        $image->delete();
        return redirect()->route('images.index')->with('warning', 'Image bien supprimé');
    }
    public function download(Image $images)
    {
        // dd($images);
        return Storage::disk('public')->download('img/'. $images->url);
        // return redirect()->back()->with('success', "image en téléchargement ...");
    }
}
