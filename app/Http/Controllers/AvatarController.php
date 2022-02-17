<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    public function index()
    {
        $avatarTout = Avatar::all();
        return view("admin.avatars.index",compact("avatarTout"));

    }
    public function create()
    {
        return view("admin.avatars.create");
    }

    public function store(Request $request)
    {
        // request()->validate(
        //     [
        //         "avatar"=>"required",
        //         "nom"=>"required"
        //     ]
        //     );

        // storage
            // $remoteImage = $request->filename;
            // $content = file_get_contents($remoteImage);

            // $end = Str::afterLast($remoteImage, '.');
            // $uniqueName = uniqid().".".$end;
            // Storage::disk("public")->put("img/".$uniqueName, $content);

            // DB

            // $avatar= new Avatar();
            // $avatar->url = $uniqueName;
            // $avatar->save();


            // STORAGE
            $path = "img/";
            $file = $request->file("img");
            $new_image_name = date("Ymd").uniqid().".jpg";
            $file->move(public_path($path), $new_image_name);

            // DB
            $file = new Avatar();

            $file->url = $new_image_name;
            $file->nom = $request->nom;

            $file->save();

            return redirect()->back();


    }
    public function download(Avatar $avatar)
    {
        return Storage::disk("public")->download("img/".$avatar->url);
    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy(Avatar $avatars)
    {
        // Storage
        $destination = "/img".$avatars->url;
        Storage::disk("public")->delete($destination);

        // DB
        $avatars->delete();
        return redirect()->back();
    }
}
