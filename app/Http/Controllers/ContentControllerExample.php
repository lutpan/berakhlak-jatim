<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    public function index()
    {
        return view('dashboard.content.index');
    }

    public function insert()
    {
        return view('dashboard.content.insert');
    }


    public function insert_data(Request $request)
    {
        DB::table('contents')->insert([
            'nama_budaya_kerja' => $request->nama_budaya_kerja,
            'kategori' => $request->kategori,
            'latar_belakang' => $request->latar_belakang,
            'tujuan' => $request->tujuan,
            'sasaran' => $request->sasaran,
            'kondisi_sebelum' => $request->kondisi_sebelum,
            'implementasi' => $request->implementasi,
            'kondisi_sesudah' => $request->kondisi_sesudah,
            'manfaat' => $request->manfaat,
            'peran_pimpinan' => $request->peran_pimpinan,
            'monev' => $request->monev,
        ]);
        return redirect('content.index');
    }
}
