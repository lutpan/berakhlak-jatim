<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tahun;
use App\Models\Content;
use App\Models\Dokumentasi;
use App\Models\Kategori;
use App\Rules\WordCount;
use Illuminate\Support\Str;
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
        if (auth()->user()->id_level == 1) {
            $contents = Content::with('level')->get()->all();
        } else {
            $contents = Content::where('id_user', auth()->user()->id_user)->with('level')->get(); #ambil user_id yang sama dengan auth user_id ketika login
        }
        // return json_encode($contents);
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
            'kategori' => Kategori::all(), 'tahun' => Tahun::all()
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
        //harus gatau kenapa biar pas +3

        $validate = $request->validate([
            'id_user' => 'required',
            'id_kategori' => 'required',
            'id_tahun' => 'required',
            'id_level' => 'required',
            'nama_budaya_kerja' => 'required',
            'image' => 'nullable|image|file',
            // 'nama_dokumentasi' => 'nullable|image|file',
            // 'nama_dokumentasi.*' => 'mimes:jpg,jpeg,png',
            'path' => 'required',
            'latar_belakang' => ['nullable', new wordCount(403)],
            'sasaran' => ['nullable', new wordCount(203)],
            'indikator_kinerja' => ['nullable', new wordCount(153)],
            'target' => ['nullable', new wordCount(153)],
            'kondisi_sebelum' => ['nullable', new wordCount(203)],
            'implementasi' => ['nullable', new wordCount(503)],
            'kondisi_sesudah' => ['nullable', new wordCount(203)],
            'kesimpulan' => ['nullable', new wordCount(153)],
            // 'monev' => 'nullable',
            'link' => 'nullable '
        ]);

        //SINGLE FILE 
        if ($request->file('image')) {
            // $validate['foto_berita'] = $request->file('foto_berita')->storeAs('upload/foto_berita', $validate['judul_berita']);
            // $filename = $request->file('image')->getClientOriginalName();
            $validate['image'] = $request->file('image')->move('upload/flyer/', $request->file('image')->getClientOriginalName());
        }

        // MULTIPLE FILE
        // $request->validate([
        //     'nama_dokumentasi' => 'nullable|image|file'
        // ]);

        // if ($request->file('nama_dokumentasi')) {
        //     $dokumentasi = [];
        //     foreach ($request->file('nama_dokumentasi') as $dok) {
        //         if ($dok->isValid()) {
        //             # code...
        //             $nama_dokumentasi = str_replace(' ', '-', $dok->getClientOriginalName());
        //             $dok->move('upload/dokumentasi/' . $validate['nama_budaya_kerja'], $nama_dokumentasi);
        //             $dokumentasi[] = [
        //                 'nama_dokumentasi' => $nama_dokumentasi,
        //             ];
        //         }
        //     }
        // }
        $validate['id_user'] = auth()->user()->id_user;
        Content::create($validate);

        // DB::beginTransaction();
        // try {
        //     //code...

        //     Dokumentasi::create($dokumentasi[]);
        //     DB::commit();
        // } catch (\Exception $e) {
        //     //throw $th;
        //     DB::rollBack();
        // };

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
        return view('dashboard.content.edit', ['content' => $content, 'kategori' => Kategori::all(), 'tahun' => Tahun::all()]);
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
            'id_user' => 'required',
            'id_kategori' => 'required',
            'id_level' => 'required',
            'id_tahun' => 'required',
            'nama_budaya_kerja' => 'required',
            'image' => 'nullable|image|file|max:2048',
            'path' => 'required',
            'latar_belakang' => ['nullable', new wordCount(403)],
            'sasaran' => ['nullable', new wordCount(203)],
            'indikator_kinerja' => ['nullable', new wordCount(153)],
            'target' => ['nullable', new wordCount(153)],
            'kondisi_sebelum' => ['nullable', new wordCount(203)],
            'implementasi' => ['nullable', new wordCount(503)],
            'kondisi_sesudah' => ['nullable', new wordCount(203)],
            'kesimpulan' => ['nullable', new wordCount(153)],
            // 'monev' => 'nullable',
            'link' => 'nullable '
        ]);

        if ($request->file('image')) {
            // $validate['foto_berita'] = $request->file('foto_berita')->storeAs('upload/foto_berita', $validate['judul_berita']);
            // $filename = $request->file('image')->getClientOriginalName();
            $validate['image'] = $request->file('image')->move('upload/flyer/', $request->file('image')->getClientOriginalName());
        }

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
    public function destroy($path)
    {

        DB::table('contents')->where('path', $path)->delete();
        // $hapus->delete();
        return back()->with('success', 'Data Berhasil di Hapus');
    }
    public function dokumentasi()
    {
    }
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
            'sk_tim' => 'nullable|file|mimes:pdf|max:2048',
            'anggaran' => 'nullable|file|mimes:pdf|max:2048',
            'sop' => 'nullable|file|mimes:pdf|max:2048',
            'data_dukung_1' => 'nullable|file|mimes:pdf|max:2048',
            'data_dukung_2' => 'nullable|file|mimes:pdf|max:2048'
            // 'dok_pembangunan' => 'nullable|file|mimes:pdf|max:2048'
        ]);

        // if ($request->file(['sk-tim', 'anggaran', 'sop', 'dok-pembangunan', 'link'])) {
        //     $validate[['sk-tim', 'anggaran', 'sop', 'dok-pembangunan', 'link']] = $request->file(['sk-tim', 'anggaran', 'sop', 'dok-pembangunan', 'link'])->store('upload/data_dukung');
        // }
        // $budaya_kerja = md5_file($request->file('your_input_name')->getRealPath());

        if ($request->file('sk_tim')) {
            // $validate['sk_tim'] = $request->file('sk_tim')->store('upload/data_dukung');
            $validate['sk_tim'] = $request->file('sk_tim')->move('upload/data_dukung/sk_tim', $request->file('sk_tim')->getClientOriginalName());
        }
        if ($request->file('anggaran')) {
            // $validate['anggaran'] = $request->file('anggaran')->store('upload/data_dukung');
            $validate['anggaran'] = $request->file('anggaran')->move('upload/data_dukung/anggaran', $request->file('anggaran')->getClientOriginalName());
        }
        if ($request->file('sop')) {
            // $validate['sop'] = $request->file('sop')->store('upload/data_dukung');
            $validate['sop'] = $request->file('sop')->move('upload/data_dukung/sop', $request->file('sop')->getClientOriginalName());
        }
        if ($request->file('dok_pembangunan')) {
            // $validate['dok_pembangunan'] = $request->file('dok_pembangunan')->store('upload/data_dukung');
            $validate['dok_pembangunan'] = $request->file('dok_pembangunan')->move('upload/data_dukung/dok_pembangunan', $request->file('dok_pembangunan')->getClientOriginalName());
        }

        // $validate['id_user'] = auth()->user()->id_user;
        // dd($validate);
        Content::where('id_content', $request->id_content)
            ->update($validate);


        return redirect('/content')->with('success', 'Berhasil menyimpan data.');
    }

    public function indexDataAdmin()
    {
        $content = Content::get()->all();
        return view('dashboard.content.indexDataAdmin', compact('content'));
    }
}
