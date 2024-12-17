<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Model\user;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    route::get('/dashboard', function (){
        if(auth::user()){
            if(auth::user()->usertype == "0"){
                return view('user.index');
            }
            
           elseif(auth::user()->usertype == "1"){
            return view('admin.index');
           }
        }else{
    return redirect()->back();
        }


        
    })->name('dashboard');
   
});