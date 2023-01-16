<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\News;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Slider $slider, News $news)
    {
        $slider = Slider::get()->all();
        $news = News::get()->all();
        // ddd($slider);
        // dd($content);
        return view('main.home', ['news' => $news, 'slider' => $slider]);
    }

    public function berita($news)
    {
        // return $news;
        $news = News::where('path_berita', $news)->first();

        // return json_encode($news);
        return view('main.berita', ['news' => $news]);
    }
}
