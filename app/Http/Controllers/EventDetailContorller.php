<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventDetailContorller extends Controller {

    public function show($lang, $id) {
        $marce = \App\Marce::getEventById($id);

        if (isset($marce[0])) {
            if (strcmp($lang, "de") == 0) {
                return view('de/eventDetail', [
                    'marce' => $marce[0]
                ]);
            } elseif (strcmp($lang, "it") == 0) {
                return view('it/eventDetail', [
                    'marce' => $marce[0]
                ]);
            } elseif (strcmp($lang, "lad") == 0) {
                return view('lad/eventDetail', [
                    'marce' => $marce[0]
                ]);
            } elseif (strcmp($lang, "ru") == 0) {
                return view('ru/eventDetail', [
                    'marce' => $marce[0]
                ]);
            } else {
                return view('en/eventDetail', [
                    'marce' => $marce[0]
                ]);
            }
        } else {
            abort('404');
        }
    }

}
