<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Slider $slider)
    {
        $slider = Slider::get()->all();
        return view('dashboard.slider.index', ['slider' => $slider]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.slider.create');
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
            'judul_slider' => 'required',
            'link_slider' => 'nullable',
            'urutan_slider' => 'nullable',
            'foto_slider' => 'nullable|image|file',
            'is_aktif' => 'nullable'
        ]);
        if ($request->file('foto_slider')) {
            // $validate['foto_slider'] = $request->file('foto_slider')->store('upload/foto_slider');
            $validate['foto_slider'] = $request->file('foto_slider')->move('upload/foto_slider', $request->file('foto_slider')->getClientOriginalName());
        }
        // ddd($validate);
        Slider::create($validate);

        return redirect('/slider')->with('success', 'Berhasil menyimpan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        // dd($slider);
        return view('dashboard.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        // ddd($slider);
        $validate = $request->validate([
            'judul_slider' => 'required',
            'link_slider' => 'nullable',
            'urutan_slider' => 'nullable',
            'foto_slider' => 'nullable|image|file',
            'is_aktif' => 'nullable'
        ]);
        if ($request->file('foto_slider')) {
            // $validate['foto_slider'] = $request->file('foto_slider')->store('upload/foto_slider');
            $validate['foto_slider'] = $request->file('foto_slider')->move('upload/foto_slider', $request->file('foto_slider')->getClientOriginalName());
        }

        Slider::where('id_slider', $slider->id_slider)->update($validate);
        // ddd($slider);
        return redirect('/slider')->with('success', 'Berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
