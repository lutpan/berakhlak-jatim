<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Content;
use Illuminate\Http\Request;
use Monolog\Handler\IFTTTHandler;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->guest() || auth()->user()->id_level !== 1) {
            abort(403);
        };

        // if (auth()->user()->id_level !== 1) {
        //     abort(403);
        // }

        // dd($this->authorize('admin'));
        $users = User::all();
        return view('dashboard.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit($users)
    {
        $users = User::where('id_user', $users)->first();
        // ddd($users);
        return view('dashboard.users.edit', ['users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $users)
    {
        $validate = $request->validate([
            'id_user' => 'required',
            'name' => 'required',
            'username' => 'required',
            'password' => 'nullable',
        ]);


        // if ($request->file('avatar')) {
        //     // if ($request->oldImage) {
        //     //     Storage::delete($request->oldImage);
        //     // }
        //     $validate['avatar'] = $request->file('avatar')->store('upload/avatars');
        // }

        $validate['password'] = Hash::make($validate['password']);
        // $user = User::where('id_user', auth()->user()->id_user)->get();
        User::where('id_user', $users)->first()
            ->update($validate);
        // dd($user->id_user);
        // $user->update($request->all());
        // dd($validate);
        return redirect('/users')->with('success', 'User berhasil di update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //
    }

    public function password(User $user)
    {
        // $user = auth()->user()->id_user->get();
        // $users = User::where('id_user', $user)->first();
        $user = User::where('id_user', auth()->user()->id_user)->first();
        // ddd($user);
        return view('dashboard.password.index', compact('user'));
    }

    public function updatePassword(Request $request, $user)
    {
        $validate = $request->validate([
            'password' => 'required|confirmed|min:6',
        ]);

        $validate['password'] = Hash::make($validate['password']);

        // ddd($validate);
        User::where('id_user', auth()->user()->id_user)->first()
            ->update($validate);

        return redirect('/password')->with('success', 'Password berhasil di update');
    }
}
