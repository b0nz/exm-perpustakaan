<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index()
    {
        $dataTrx = DB::table('DetailTransaksi')
                    ->leftJoin('Transaksi', 'Transaksi.TransCode', '=', 'DetailTransaksi.TransID')
                    ->leftJoin('Buku', 'Buku.ID', '=', 'DetailTransaksi.BookID')
                    ->select('Transaksi.TransCode', 'Transaksi.TransDate', 'Transaksi.FineTotal', 'DetailTransaksi.ReturnDate', 'DetailTransaksi.Qty', 'DetailTransaksi.FineDays', 'DetailTransaksi.Fine', 'Buku.BookName', 'Buku.Publisher', 'Buku.Year')
                    ->where('Transaksi.UserID', '=', Auth::user()->id)
                    ->get();

        return view('user.history', ['dataTrx' => $dataTrx]);
    }
}
