<?php

namespace App\Http\Controllers;

use App\Models\songs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;




class songsController extends Controller
{
    public function add_songs(){
        return view('admin.add_songs');
    }




    public function all_songs(){
        $song = songs::all();
        return view('admin.all_songs',compact('song'));
    }
    public function delete_songs($id){
        $song = songs::find($id);
        $song->delete();
        return redirect()->back();

    }







    public function upload_song(Request $request){
        $song = new Songs();

        // Handle image upload

            $image = $request->file('image');
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move('authorimg', $imagename);
            $song->audiofile = $imagename;


        // Assign values from request to the song model
        $song->id = $request->id;
        $song->songname = $request->song_name;
        $song->songdescription = $request->song_description;
        $song->artist = $request->artist;
        $song->genre = $request->genre;
        $song->year = $request->year;
        $song->language = $request->language;
        $song->audiofile = $request->image;


        // Save the song record
        $song->save();

        // Redirect back with a success message or any other logic
        return redirect()->back();

    }



}
