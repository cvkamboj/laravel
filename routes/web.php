<?php

use Illuminate\Support\Facades\Route;

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
    return view('home.index', []);
});


Route::get('/post/{id}', function($id){
    $posts=[
            1 =>[
                "title"=> "Hey first title",
                "content"=> "this is the content for the fist post",
                "is_new" => true
            ],
            2 =>[
                "title"=> "Hey second title",
                "content"=> "this is the content for the second post",
                "is_new" => false
            ]
        ];
    abort_if(!isset($posts[$id]), 404);

    return view("posts.show", ['post'=> $posts[$id]]);

})->name("getPost")->where("id", "[0-9]+");

Route::get('/contact', function () {
    return view('home.contact');
})->name("home.contact");
