<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show ($lang) {
        //$eventTime = \DB::table('Timer')->where('t_id', 1)->first();
        date_default_timezone_set("Europe/Rome");
        
        $nextEvents = \App\Marce::getNext3Events();
        $indexWelcome = \App\MultiTextGetter::getMultiTextByName("index_welcome");
        
        if (strcmp($lang, "de") == 0) {
            return view('de/index', [
                'curTime' => time(),
                'nextEvents' => $nextEvents,
                'indexWelcome' => $indexWelcome
            ]);
        } elseif (strcmp($lang, "it") == 0) {
            return view('it/index', [
                'curTime' => time(),
                'nextEvents' => $nextEvents,
                'indexWelcome' => $indexWelcome
            ]);
        } elseif (strcmp($lang, "lad") == 0) {
            return view('lad/index', [
                'curTime' => time(),
                'nextEvents' => $nextEvents,
                'indexWelcome' => $indexWelcome
            ]);
        }  elseif (strcmp($lang, "ru") == 0) {
            return view('ru/index', [
                'curTime' => time(),
                'nextEvents' => $nextEvents,
                'indexWelcome' => $indexWelcome
            ]);
        } else {
            return view('en/index', [
                'curTime' => time(),
                'nextEvents' => $nextEvents,
                'indexWelcome' => $indexWelcome
            ]);
        }
        
    }
}
