<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    public function index()
    {
        #ambil
        $users = DB::table('users')->get();
        #kirim
        return view('users.index', ['users' => $users]);
    }
}
