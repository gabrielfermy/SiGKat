<?php

namespace sigkat\Http\Controllers;

use Illuminate\Http\Request;

use sigkat\Http\Requests;
use sigkat\Model\Berita;

class ControllerBerita extends Controller
{
    //

    /*
     * excerpt :
     * method untuk menampilkan ringkasan berita
     */


    /*
     * LatestNews :
     * method for showing x amount of latest news
     */
    public static function LatestNews($i) {
        $latestNews = Berita::all()->sortByDesc('waktu_berita')
                        -> take($i);

        return $latestNews;

    }

}
