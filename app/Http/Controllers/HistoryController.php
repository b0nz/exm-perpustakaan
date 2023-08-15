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

    public function pengembalian($id)
    {
        $dataTrx = DB::table('DetailTransaksi')
                    ->leftJoin('Transaksi', 'Transaksi.TransCode', '=', 'DetailTransaksi.TransID')
                    ->leftJoin('Buku', 'Buku.ID', '=', 'DetailTransaksi.BookID')
                    ->select('Transaksi.TransCode', 'Transaksi.TransDate', 'Transaksi.FineTotal', 'DetailTransaksi.ReturnDate', 'DetailTransaksi.Qty', 'DetailTransaksi.FineDays', 'DetailTransaksi.Fine', 'Buku.BookName', 'Buku.Publisher', 'Buku.Year')
                    ->where('Transaksi.UserID', '=', Auth::user()->id)
                    ->where('Transaksi.TransCode', '=', $id)
                    ->first();

        if (!isset($dataTrx)) {
            toastr()->error('Data tidak ditemukan');
        }

        try {
            $dateDiff = date_diff(date_create($dataTrx->ReturnDate), date_create(date('Y-m-d')))->format('%a');
            $calculateFineDay = $dateDiff <= 0 ? 0 : $dateDiff;
            $calculateFine = $calculateFineDay > 10 ? 120000 : ($calculateFineDay < 0 ? 0 : $calculateFineDay) * 10000;
            DB::table('DetailTransaksi')
                    ->where('TransID', '=', $id)
                    ->update([
                        'FineDays' => $calculateFineDay,
                        'Fine' => $calculateFine
                    ]);
            DB::table('Transaksi')
                    ->where('TransCode', '=', $id)
                    ->update([
                        'FineTotal' => $calculateFine
                    ]);
            toastr()->success('Buku berhasil dikembalikan');
            return redirect()->route('history');
        } catch (Throwable $e) {
            toastr()->error($e.getMessage(), 'Error');
            return redirect()->route('history');
        }
    }
}
