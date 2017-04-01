<?php

namespace sigkat\Http\Controllers;

use Illuminate\Http\Request;

use sigkat\Http\Requests;

class HomeController extends Controller
{
    public function index(){
        $higlightBerita = ControllerBerita::LatestNews(3);
        $highlightPengumuman = ControllerPengumuman::LatestAnnouncement(3);
        $highlightForum = ControllerForum::LatestPost(3);

        return view('home',[

        ]);
    }
}
