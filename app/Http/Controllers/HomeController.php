<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Gate::allows('isAdmin')) {
            $totalUser = DB::table('users')->where('role', '=', 'user')->count();
            return view('admin.home', ['totalUser' => $totalUser]);
        } else if (Gate::allows('isUser')) {
            $dataBuku = DB::table('Buku')->get();
            return view('user.home', ['dataBuku' => $dataBuku]);
        }
        return abort(403);
    }
}
