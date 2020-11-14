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

    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['la', 'it', 'en', 'de']; 
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
    
    return redirect($lang);
    
});

Route::get('/about', function () {

    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['la', 'it', 'en', 'de']; 
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
    
    return redirect("${lang}/about");
    
});

Route::get('/gallery', function () {

    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['la', 'it', 'en', 'de']; 
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
    
    return redirect("${lang}/gallery");
    
});

Route::get('/events/{id}', function ($id) {

    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['la', 'it', 'en', 'de']; 
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
    
    return redirect("${lang}/events/${id}");
    
});



Route::get('/{lang}', 'IndexController@show');

Route::get('{lang}/about', 'AboutController@show');

Route::get('{lang}/gallery', 'GalleryController@show');

Route::get('{lang}/events/{id}', 'EventDetailContorller@show');

