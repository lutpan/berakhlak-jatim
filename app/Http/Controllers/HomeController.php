<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $content = Content::get()->all();
        // dd($content);
        return view('main.home', ['content' => $content]);
    }

    public function detailContent(Content $content)
    {
        $content = Content::get()->id_content;
        return view('detail', ['content' => $content]);
    }
}
