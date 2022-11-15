<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::where('id_user', auth()->user()->id_user)->first();
        // dd($user);
        // dd($data);
        // $user = User::where('id_user', auth()->user()->id_user)->get();
        // ddd($user);
        return view('dashboard.profile.index', ['user' => $user]);
    }

    public function setting(User $user)
    {
        $user = User::where('id_user', auth()->user()->id_user)->first();
        // dd($user);
        // $user = User::get();
        // ddd($user);
        return view('dashboard.profile.setting', ['user' => $user]);
    }

    public function updateSetting(Request $request, User $user)
    {
        // $user = User::where('id_user', auth()->user()->id_user)->first();

        $validate = $request->validate([
            'id_user' => 'required',
            'name' => 'nullable',
            'username' => 'nullable',
            'password' => 'nullable',
            'telfon' => 'nullable',
            'alamat' => 'nullable',
            'bio' => 'nullable',
            'email' => 'nullable',
            'avatar' => 'nullable|image|file|max:2048',
        ]);


        if ($request->file('avatar')) {
            // if ($request->oldImage) {
            //     Storage::delete($request->oldImage);
            // }
            $validate['avatar'] = $request->file('avatar')->store('upload/avatars');
        }

        // $user = User::where('id_user', auth()->user()->id_user)->get();
        User::where('id_user', auth()->user()->id_user)->first()
            ->update($validate);
        // dd($user->id_user);
        // $user->update($request->all());
        // dd($validate);
        return redirect('/profile')->with('success', 'Profil berhasil di update.');
        // $user = User::where('id_user', auth()->user()->id_user)->first();
        // return redirect('/profile')->with('success', 'Data berhasil di Update.');
    }
}
