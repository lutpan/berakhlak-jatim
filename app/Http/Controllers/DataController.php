<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $data = Content::where('id_user', auth()->user()->id_user)->get(); #ambil user_id yang sama dengan auth user_id ketika login
        // $data = Content::get();
        // dd($data);
        return view('dashboard.data.index', ['data' => $data]);
    }

    public function create(Content $content)
    {
        $data = Content::where('id_content', auth()->user()->id_user)->first(); #ambil user_id yang sama dengan auth user_id ketika login
        ddd($data);
        return view('dashboard.data.create', ['data' => $data]);
    }
    public function store(Request $request, Content $content)
    {
        $validate = $request->validate([
            'id_user' => 'required',
            'id_content' => 'required',
            'sk_tim' => 'nullable|file|mimetypes:pdf|max:2048',
            'anggaran' => 'nullable|file|mimetypes:pdf|max:2048',
            'sop' => 'nullable|file|mimetypes:pdf|max:2048',
            'dok-pembangunan' => 'nullable|file|mimetypes:pdf|max:2048',
            'link' => 'nullable',
        ]);

        if ($request->file(['sk_tim', 'anggaran', 'sop', 'dok-pembangunan'])) {
            $validate[['sk_tim', 'anggaran', 'sop', 'dok-pembangunan']] = $request->file(['sk_tim', 'anggaran', 'sop', 'dok-pembangunan'])->store('upload/data_dukung');
        }

        $validate['id_user'] = auth()->user()->id_user;
        Content::where('id_content', $content->id_content)
            ->update($validate);


        redirect('/data');
    }
}
