<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class GallerieController extends Controller
{
    public function index()
    {
        $gallerieTout = Image::all();
        return view('admin.galleries.index', compact("gallerieTout"));
    }
}
