<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class HistoryController extends Controller
{
    public function index()
    {
        if (Gate::allows('isAdmin')) {
            $dataTrx = DB::table('DetailTransaksi')
                        ->leftJoin('Transaksi', 'Transaksi.TransCode', '=', 'DetailTransaksi.TransID')
                        ->leftJoin('Buku', 'Buku.ID', '=', 'DetailTransaksi.BookID')
                        ->leftJoin('users', 'users.id', '=', 'Transaksi.UserID')
                        ->select('Transaksi.TransCode', 'Transaksi.TransDate', 'Transaksi.FineTotal', 'DetailTransaksi.ReturnDate', 'DetailTransaksi.Qty', 'DetailTransaksi.FineDays', 'DetailTransaksi.Fine', 'Buku.BookName', 'Buku.Publisher', 'Buku.Year', 'users.name')
                        ->get();

            return view('admin.transaksi', ['dataTrx' => $dataTrx]);
        } else if(Gate::allows('isUser')) {
            $dataTrx = DB::table('DetailTransaksi')
                        ->leftJoin('Transaksi', 'Transaksi.TransCode', '=', 'DetailTransaksi.TransID')
                        ->leftJoin('Buku', 'Buku.ID', '=', 'DetailTransaksi.BookID')
                        ->select('Transaksi.TransCode', 'Transaksi.TransDate', 'Transaksi.FineTotal', 'DetailTransaksi.ReturnDate', 'DetailTransaksi.Qty', 'DetailTransaksi.FineDays', 'DetailTransaksi.Fine', 'Buku.BookName', 'Buku.Publisher', 'Buku.Year')
                        ->where('Transaksi.UserID', '=', Auth::user()->id)
                        ->get();

            return view('user.history', ['dataTrx' => $dataTrx]);
        }
    }

    public function pengembalian($id)
    {
        $dataTrx = DB::table('DetailTransaksi')
                    ->leftJoin('Transaksi', 'Transaksi.TransCode', '=', 'DetailTransaksi.TransID')
                    ->leftJoin('Buku', 'Buku.ID', '=', 'DetailTransaksi.BookID')
                    ->select('Transaksi.TransCode', 'Transaksi.TransDate', 'Transaksi.FineTotal', 'DetailTransaksi.ReturnDate', 'DetailTransaksi.Qty', 'DetailTransaksi.FineDays', 'DetailTransaksi.Fine', 'DetailTransaksi.BookID', 'Buku.BookName', 'Buku.Publisher', 'Buku.Year')
                    ->where('Transaksi.UserID', '=', Auth::user()->id)
                    ->where('Transaksi.TransCode', '=', $id)
                    ->first();

        if (!isset($dataTrx)) {
            toastr()->error('Data tidak ditemukan');
        }

        try {
            $dateDiff = date_diff(date_create($dataTrx->ReturnDate), date_create(date('Y-m-d')))->format('%r%a');
            $calculateFine = $dateDiff > 10 ? 120000 : ($dateDiff < 0 ? 0 : $dateDiff * 10000) ;
            DB::table('DetailTransaksi')
                    ->where('TransID', '=', $id)
                    ->update([
                        'FineDays' => $dateDiff,
                        'Fine' => $calculateFine
                    ]);
            DB::table('Transaksi')
                    ->where('TransCode', '=', $id)
                    ->update([
                        'FineTotal' => $calculateFine
                    ]);
            DB::table('Buku')
                    ->where('ID', '=', $dataTrx->BookID)
                    ->update([
                        'Stock' => DB::raw('Stock + ' . $dataTrx->Qty)
                    ]);
            toastr()->success('Buku berhasil dikembalikan');
            return redirect()->route('history');
        } catch (Throwable $e) {
            toastr()->error($e.getMessage(), 'Error');
            return redirect()->route('history');
        }
    }
}
