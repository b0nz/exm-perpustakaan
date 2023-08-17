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
            $totalBuku = DB::table('Buku')->count();
            $totalDenda = DB::table('DetailTransaksi')->sum('Fine');
            return view('admin.home', ['totalUser' => $totalUser, 'totalBuku' => $totalBuku, 'totalDenda' => $totalDenda]);
        } else if (Gate::allows('isUser')) {
            $dataBuku = DB::table('Buku')
                    ->leftJoin('JenisBuku', 'Buku.BookTypeID', '=', 'JenisBuku.ID')
                    ->select('Buku.ID', 'Buku.BookName', 'Buku.Description', 'Buku.Publisher', 'Buku.Year', 'Buku.Stock', 'JenisBuku.BookType')
                    ->get();
            return view('user.home', ['dataBuku' => $dataBuku]);
        }
        return abort(403);
    }
}
