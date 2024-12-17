<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Model\user;
use App\Models\songs;

use App\Http\Controllers\songsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $song = songs::all();
    return view('user.index' , compact('song'));
});

Route::get('/add_songs' , [songsController::class , 'add_songs']);

Route::get('/all_songs' , [songscontroller::class , 'all_songs']);
Route::post('/upload_song' , [songsController::class , 'upload_song']);
Route::get('/delete_songs/{id}' , [songsController::class , 'delete_songs']);





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    route::get('/dashboard', function (){
        if(auth::user()){
            if(auth::user()->usertype == "0"){
                $song = songs::all();
                return view('user.index' , compact('song'));
            }

           elseif(auth::user()->usertype == "1"){
            return view('admin.index');
           }
        }else{
    return redirect()->back();
        }



    })->name('dashboard');

});
