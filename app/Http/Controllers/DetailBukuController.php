<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailBukuController extends Controller
{
    public function index($id) {
        $buku = DB::table('Buku')
                    ->leftJoin('JenisBuku', 'Buku.BookTypeID', '=', 'JenisBuku.ID')
                    ->select('Buku.ID', 'Buku.BookName', 'Buku.Description', 'Buku.Publisher', 'Buku.Year', 'Buku.Stock', 'JenisBuku.BookType')
                    ->where('Buku.ID', '=', $id)
                    ->first();
        return view('user.detail-buku', ['buku' => $buku]);
    }
}
