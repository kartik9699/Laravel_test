<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/test', function () {
//     return view('test');
// });
// Route::get('/about/{name}/{age}',function($name,$age){
//     return view('about',["name"=>$name,"age"=>$age]);
// });
// Route::get('/about' ,function (){
//  return view('about');
// });
// Route::redirect('/test','/');
Route::get('user',[UserController::class,'index']);
Route::get('adduser',[UserController::class,'adduser']);