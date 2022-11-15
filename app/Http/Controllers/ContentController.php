<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Content;
use App\Models\Kategori;
use App\Models\Kategoris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**  
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Content::where('id_user', auth()->user()->id_user)->get(); #ambil user_id yang sama dengan auth user_id ketika login
        // dd($contents);   
        // $kategoris = Kategoris::all();
        // dd($contents);
        return view('dashboard.content.index', ['contents' => $contents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.content.create', [
            'kategori' => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd($request);/
        // return $request->file('image')->store('upload/images');

        $validate = $request->validate([
            'id_user' => 'required',
            'id_kategori' => 'required',
            'nama_budaya_kerja' => 'required',
            'image' => 'nullable|image|file|max:2048',
            'path' => 'required',
            'latar_belakang' => 'nullable',
            'tujuan' => 'nullable',
            'sasaran' => 'nullable',
            'kondisi_sebelum' => 'nullable',
            'implementasi' => 'nullable',
            'kondisi_sesudah' => 'nullable',
            'manfaat' => 'nullable',
            'peran_pimpinan' => 'nullable',
            'monev' => 'nullable',
            'link' => 'nullable '
        ]);

        if ($request->file('image')) {
            $validate['image'] = $request->file('image')->store('upload/images');
        }

        $validate['id_user'] = auth()->user()->id_user;
        Content::create($validate);
        // Content::create([
        //     'id_user' =>  $request->id_user,
        //     'id_kategori' =>  $request->id_kategori,
        //     'nama_budaya_kerja' => $request->nama_budaya_kerja,
        //     'path' => $request->path,
        //     // 'kategori' => $request->kategori,
        //     'latar_belakang' =>  $request->latar_belakang,
        //     'tujuan' =>  $request->tujuan,
        //     'sasaran' =>  $request->sasaran,
        //     'kondisi_sebelum' =>  $request->kondisi_sebelum,
        //     'implementasi' =>  $request->implementasi,
        //     'kondisi_sesudah' =>  $request->kondisi_sesudah,
        //     'manfaat' =>  $request->manfaat,
        //     'peran_pimpinan' =>  $request->peran_pimpinan,
        //     'monev' =>  $request->monev,
        // ]);

        // dd($content);
        return redirect('/content')->with('success', 'Berhasil menyimpan data.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        // ddd($content);
        // $content = Content::where('id_user', auth()->user()->id_user)->get(); #ambil user_id yang sama dengan auth user_id ketika login
        return view('dashboard.content.detail', ['content' => $content]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        // dd($content);
        return view('dashboard.content.edit', ['content' => $content, 'kategori' => Kategori::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {

        $validate = $request->validate([
            'id_user' =>  'required',
            'id_kategori' =>  'required',
            'nama_budaya_kerja' => 'required',
            'image' => 'nullable|image|file|max:2048',
            'path' => 'required',
            'latar_belakang' =>  'nullable',
            'tujuan' =>  'nullable',
            'sasaran' =>  'nullable',
            'kondisi_sebelum' =>  'nullable',
            'implementasi' =>  'nullable',
            'kondisi_sesudah' =>  'nullable',
            'manfaat' =>  'nullable',
            'peran_pimpinan' =>  'nullable',
            'monev' =>  'nullable',
            'link' => 'nullable'
        ]);

        // return $validate;
        // $content->update($request->all());
        // $validate=$request->validate($path);
        // dd($content);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validate['image'] = $request->file('image')->store('upload/images');
        }

        // $validate['id_content'] = auth()->user()->id_user;

        Content::where('id_content', $content->id_content)
            ->update($validate);

        // $content->update($request->all());
        return redirect('/content')->with('success', 'Data berhasil di update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        // if ($content->image) {
        //     Storage::delete($content->image);
        // }

        Content::destroy($content->id_content);
        // $content = Content::find($content->id_content);
        // $content->delete();
        // dd($content);
        return redirect('/content')->with('success', 'Data berhasil di hapus.');
    }

    // public function upload()
    // {
    //     return view('dashboard.data.index');
    //     // Content::create($validate)
    // }

    public function upload(Content $content, $path)
    {
        // $content = Content::where('path', $content->path)->get();
        $content = Content::where('path', $path)->first();
        // dd($content);
        return view('dashboard.content.upload', ['content' => $content]);
        // Content::create($validate)
    }

    public function storeUpload(Request $request)
    {

        // $content = Content::where('path', $path)->first();
        // ddd($content);
        $validate = $request->validate([
            'id_user' => 'nullable',
            'id_content' => 'nullable',
            // 'id_kategori' => 'nullable',
            // 'nama_budaya_kerja' => 'nullable',
            // 'path' => 'nullable',
            'sk_tim' => 'nullable|file|mimes:pdf|max:2048',
            'anggaran' => 'nullable|file|mimes:pdf|max:2048',
            'sop' => 'nullable|file|mimes:pdf|max:2048',
            'dok_pembangunan' => 'nullable|file|mimes:pdf|max:2048'
        ]);

        // if ($request->file(['sk-tim', 'anggaran', 'sop', 'dok-pembangunan', 'link'])) {
        //     $validate[['sk-tim', 'anggaran', 'sop', 'dok-pembangunan', 'link']] = $request->file(['sk-tim', 'anggaran', 'sop', 'dok-pembangunan', 'link'])->store('upload/data_dukung');
        // }

        if ($request->file('sk_tim')) {
            $validate['sk_tim'] = $request->file('sk_tim')->store('upload/data_dukung');
        }
        if ($request->file('anggaran')) {
            $validate['anggaran'] = $request->file('anggaran')->store('upload/data_dukung');
        }
        if ($request->file('sop')) {
            $validate['sop'] = $request->file('sop')->store('upload/data_dukung');
        }
        if ($request->file('dok_pembangunan')) {
            $validate['dok_pembangunan'] = $request->file('dok_pembangunan')->store('upload/data_dukung');
        }

        // $validate['id_user'] = auth()->user()->id_user;
        // dd($validate);
        Content::where('id_content', $request->id_content)
            ->update($validate);


        return redirect('/content')->with('success', 'Berhasil menyimpan data.');
    }
}
