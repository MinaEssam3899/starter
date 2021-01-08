<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\NewsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data=[];
    $data['id']=5;
    $data['name']='mina';
    return view('welcome',$data);
});


Route::get('/test1/{id}', function ($id) {
    return $id;
})->name('a');

/*Route::namespace('Front')->group(function()
    {
        //all route only access controller or methods in folder Front

        Route::get('users', [UserController::class, 'ShowUserName']);
    }
    
);*/


    Route::group(['prefix'=>'users','middleware'=>'auth'],function()
    {
        Route::get('/',function()
        {
            return 'work';
        });
    });

Route::get('show',[FirstController::class,'showstring']);

Route::resource('news',NewsController::class);

Route::get('index',[UserController::class,'getIndex']);

//Route::get('home',[UserController::class,'ShowUserName']);
Route::get('login',[UserController::class,'Loginp']);
//Route:get('login',[UserController::class,'Loginp']);

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

/*
Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
*/