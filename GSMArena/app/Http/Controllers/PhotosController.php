<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;

class PhotosController extends Controller
{
  public function uploadImage(Request $request)
 {
     $this->validate($request, [
         'name' => 'required|max:120',
         'description' => 'max:120|nullable',
         'image' => 'required|max:1999'
     ]);

     $name = $request['name'];
     $description = $request['description'];
     $tag = $request['tags'];
     $userId = auth()->user()->id;
     $file = $request->file('image')->getClientOriginalName();
     $fileName = pathinfo($file, PATHINFO_FILENAME);
     $extension = $request->file('image')->getClientOriginalExtension();
     $fileNameToStore = $fileName.'_'.time().'.'.$extension;
     $fileNameToStore = str_replace(' ', '', $fileNameToStore);
     $path = $request->file('image')->storeAs('public/images/uploaded', $fileNameToStore);

     $image = new Image();
     $image->name = $name;
     $image->description = $description;
     $image->user_id = $userId;
     $image->file_name = $fileNameToStore;

     $image->save();
     $image->tags()->attach($tag);

     return redirect()->route('home');
 }
 
 public function show($id)
{
    $image = Image::find($id); // Assuming you have an Image model
    return response()->json($image);
}
}
