<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{

    public function upload()
    {
        $content = Content::find('id_content');
        return view('dashboard.content.upload', ['content' => $content]);
    }

    public function storeUpload(Request $request)
    {
        $this->validate($request, [
            'file' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        $nama_file = time() . "_" . $file->getClientOriginalName();
        $extension = pathinfo($nama_file, PATHINFO_EXTENSION);
        $namaFile = $nama_file . '-' . $extension;
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = scandir(public_path('uploads/data_pendukung'));
        $file->move($tujuan_upload, $namaFile);

        Upload::create([
            'file' => $file,
        ]);
        // dd($file)

        return redirect('content')->with('success', 'berhasil upload');
    }
}
