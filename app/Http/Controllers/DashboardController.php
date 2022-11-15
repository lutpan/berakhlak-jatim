<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {
        #ambil
        $users = DB::table('users')->get();
        #kirim
        // return Auth::user();
        // return json_encode(Auth::user());
        return view('dashboard.dashboard', ['users' => $users]);
    }
}
