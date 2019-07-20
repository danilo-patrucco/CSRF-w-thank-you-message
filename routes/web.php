<?php

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




Route::get('/', 'pagescontroller@home')->name('home');
Route::get('/about', 'pagescontroller@about')->name('about');
Route::get('/contact', 'pagescontroller@contact')->name('contact');
Route::post('/contact', 'pagescontroller@store')->name('contact.store');
Route::get('/thanks:{name}', 'pagescontroller@thanks')->name('thanks');

/*
Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});


Route::post('/contact', function () {
    $data = request() -> all();
    $name = $data['name'];
    return view('pages.thankyou')->with(compact('name'));

});
*/
