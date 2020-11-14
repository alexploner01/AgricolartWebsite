<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show($lang) {
        
        $members = \App\Member::getMemberInformation();
        
        $slideShowPicturesDirectory = 'media/images/fotosAgricolart/1900-545/';
        $picturePaths = glob($slideShowPicturesDirectory.'*');
               
        if (strcmp($lang, "de") == 0) {
            return view('de/about', [
                'members' => $members,
                'picturePaths' => $picturePaths
            ]);
        } elseif (strcmp($lang, "it") == 0) {
            return view('it/about', [
                'members' => $members,
                'picturePaths' => $picturePaths
            ]);
        } elseif (strcmp($lang, "lad") == 0) {
            return view('lad/about', [
                'members' => $members,
                'picturePaths' => $picturePaths
            ]);
        }  elseif (strcmp($lang, "ru") == 0) {
            return view('ru/about', [
                'members' => $members,
                'picturePaths' => $picturePaths
            ]);
        } else {
            return view('en/about', [
                'members' => $members,
                'picturePaths' => $picturePaths
            ]);
        }
    }
}
