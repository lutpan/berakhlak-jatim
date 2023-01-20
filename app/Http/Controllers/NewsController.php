<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(News $news)
    {
        $news = News::get()->all();
        return view('dashboard.berita.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul_berita' => 'required',
            'headline_berita' => 'required',
            'tanggal_berita' => 'required',
            'path_berita' => 'required',
            'isi_berita' => 'nullable',
            'quote' => 'nullable',
            'nama_quote' => 'nullable',
            'tags' => 'nullable',
            'foto_berita' => 'nullable|image|file'
        ]);
        // ddd($validate);
        if ($request->file('foto_berita')) {
            // $validate['foto_berita'] = $request->file('foto_berita')->storeAs('upload/foto_berita', $validate['judul_berita']);
            $validate['foto_berita'] = $request->file('foto_berita')->move('upload/foto_berita', $request->file('foto_berita')->getClientOriginalName());
        }


        $p = $validate['path_berita'];
        if (Berita::where('path_berita', $p)->fist() != null) {
            return redirect()->back()->with('alert', 'data sudah ada');
        } else {
            News::create($validate);
        };
        // ddd($validate);

        return redirect('/news')->with('success', 'Berhasil menyimpan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        // ddd($news);
        return view('dashboard.berita.detail', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        // ddd($news);
        return view('dashboard.berita.edit', ['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $validate = $request->validate([
            'judul_berita' => 'required',
            'headline_berita' => 'required',
            'tanggal_berita' => 'required',
            'path_berita' => 'required',
            'isi_berita' => 'nullable',
            'quote' => 'nullable',
            'nama_quote' => 'nullable',
            'tags' => 'nullable',
            'foto_berita' => 'nullable|image|file'
        ]);
        // ddd($validate);


        if ($request->file('foto_berita')) {
            // $validate['foto_berita'] = $request->file('foto_berita')->store('upload/foto_berita');
            $validate['foto_berita'] = $request->file('foto_berita')->move('upload/foto_berita', $request->file('foto_berita')->getClientOriginalName());
        }
        News::where('path_berita', $news->path_berita)
            ->update($validate);

        return redirect('/news')->with('success', 'Berhasil Udpate Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($path)
    {
        // dd($path);
        // News::where('path_berita', $path)->delete();
        DB::table('beritas')->where('path_berita', $path)->delete();
        return back()->with('success', 'Data Berhasil di Hapus');
    }
}
