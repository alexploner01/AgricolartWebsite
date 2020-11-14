<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller {

    public function show($lang) {

        $fotosOfGallery = \App\Gallery::getFotosOfGalleryById(1);

        $numberOfPicturesPerPage = 9;
        $numberOfPages = ceil(sizeof($fotosOfGallery) / $numberOfPicturesPerPage);


        if (isset($_GET['p'])) {
            ($_GET['p'] > 0 && $_GET['p'] <= $numberOfPages) ? $currentPage = intval($_GET['p']) : abort('404');
        } else {
            $currentPage = 1;
        }

        if (strcmp($lang, "de") == 0) {
            return view('de/gallery', [
                'fotosOfGallery' => $fotosOfGallery,
                'numberOfPages' => $numberOfPages,
                'currentPage' => $currentPage,
                'numberOfPicturesPerPage' => $numberOfPicturesPerPage
            ]);
        } elseif (strcmp($lang, "it") == 0) {
            return view('it/gallery', [
                'fotosOfGallery' => $fotosOfGallery,
                'numberOfPages' => $numberOfPages,
                'currentPage' => $currentPage,
                'numberOfPicturesPerPage' => $numberOfPicturesPerPage
            ]);
        } elseif (strcmp($lang, "lad") == 0) {
            return view('lad/gallery', [
                'fotosOfGallery' => $fotosOfGallery,
                'numberOfPages' => $numberOfPages,
                'currentPage' => $currentPage,
                'numberOfPicturesPerPage' => $numberOfPicturesPerPage
            ]);
        } elseif (strcmp($lang, "ru") == 0) {
            return view('ru/gallery', [
                'fotosOfGallery' => $fotosOfGallery,
                'numberOfPages' => $numberOfPages,
                'currentPage' => $currentPage,
                'numberOfPicturesPerPage' => $numberOfPicturesPerPage
            ]);
        } else {
            return view('en/gallery', [
                'fotosOfGallery' => $fotosOfGallery,
                'numberOfPages' => $numberOfPages,
                'currentPage' => $currentPage,
                'numberOfPicturesPerPage' => $numberOfPicturesPerPage
            ]);
        }
    }

}
