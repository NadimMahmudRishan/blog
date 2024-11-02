<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home', function () {
    return view('home');
});

Route::get('/about/{name}',function($name){
    echo $name;
    return view('about',['name'=>$name]);
});

Route::redirect('/','/home');
Route::redirect('/contract','/Contract');
// Another way ot declear route.
// Route::view("/home","home");