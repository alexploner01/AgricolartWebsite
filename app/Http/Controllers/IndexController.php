<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller {

    public function show($lang) {
        //$eventTime = \DB::table('Timer')->where('t_id', 1)->first();
        date_default_timezone_set("Europe/Rome");

        $nextEvents = \App\Marce::getNext3Events();
        $indexWelcome = \App\MultiTextGetter::getMultiTextByName("index_welcome");
        $navbarStart = \App\MultiTextGetter::getMultiTextByName("navbar_start");
        $navbarAboutus = \App\MultiTextGetter::getMultiTextByName("navbar_aboutus");
        $navbarGallery = \App\MultiTextGetter::getMultiTextByName("navbar_gallery");
        
        if (strcmp($lang, "de") == 0) {
            return view('de/index', [
                'curTime' => time(),
                'nextEvents' => $nextEvents,
                'indexWelcome' => $indexWelcome,
                'navbarAboutus' => $navbarAboutus,
                'navbarStart' => $navbarStart,
                'navbarGallery' => $navbarGallery
            ]);
        } elseif (strcmp($lang, "it") == 0) {
            return view('it/index', [
                'curTime' => time(),
                'nextEvents' => $nextEvents,
                'indexWelcome' => $indexWelcome,
                'navbarAboutus' => $navbarAboutus,
                'navbarStart' => $navbarStart,
                'navbarGallery' => $navbarGallery
            ]);
        } elseif (strcmp($lang, "lad") == 0) {
            return view('lad/index', [
                'curTime' => time(),
                'nextEvents' => $nextEvents,
                'indexWelcome' => $indexWelcome,
                'navbarAboutus' => $navbarAboutus,
                'navbarStart' => $navbarStart,
                'navbarGallery' => $navbarGallery
            ]);
        } elseif (strcmp($lang, "ru") == 0) {
            return view('ru/index', [
                'curTime' => time(),
                'nextEvents' => $nextEvents,
                'indexWelcome' => $indexWelcome,
                'navbarAboutus' => $navbarAboutus,
                'navbarStart' => $navbarStart,
                'navbarGallery' => $navbarGallery
            ]);
        } elseif (strcmp($lang, "fr") == 0) {
            return view('fr/index', [
                'curTime' => time(),
                'nextEvents' => $nextEvents,
                'indexWelcome' => $indexWelcome,
                'navbarAboutus' => $navbarAboutus,
                'navbarStart' => $navbarStart,
                'navbarGallery' => $navbarGallery
            ]);
        } else {
            return view('en/index', [
                'curTime' => time(),
                'nextEvents' => $nextEvents,
                'indexWelcome' => $indexWelcome,
                'navbarAboutus' => $navbarAboutus,
                'navbarStart' => $navbarStart,
                'navbarGallery' => $navbarGallery
            ]);
        }
    }

}
