<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::post('contact', function () {
    $data = Request::all();
    \Mail::send('emails.contact', $data, function ($m) {
        $m->from('contact@projectmarch.nl');
        $m->to('info@projectmarch.nl')->subject('New contact!');
    });
    return '1';
});
