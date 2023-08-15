<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;
use DateInterval;

class CartController extends Controller
{
    public function index()
    {
        $dataBuku = DB::table('Buku')->select('ID', 'BookName', 'Stock')->get();
        return view('user.cart', ['dataBuku' => $dataBuku]);
    }

    public function pinjam(Request $request, $id)
    {
        $dataBuku = DB::table('Buku')->select('ID', 'BookName', 'Stock')->where('ID', $id)->first();

        if($request->qty > $dataBuku->Stock){
            toastr()->error('Jumlah buku yang dipinjam melebihi stok yang tersedia');
            return redirect()->back();
        }

        try {
            $trxCode = uniqid();
            $currentDate = new DateTime();
            DB::table('Transaksi')->insert([
                "TransCode" => $trxCode,
                "TransDate" => $currentDate,
                "FineTotal" => 0,
            ]);
            DB::table('DetailTransaksi')->insert([
                "TransID" => $trxCode,
                "BookID" => $id,
                "Qty" => $request->qty,
                "ReturnDate" => $currentDate->add(new DateInterval('P7D')),
            ]);
            DB::table('Buku')->where('ID', $id)->update([
                "Stock" => $dataBuku->Stock - $request->qty,
            ]);
            toastr()->success('Buku berhasil dipinjam');
            return redirect()->route('home');
        } catch (Throwable $e) {
            toastr()->error($e.getMessage(), 'Error');
            return redirect()->route('home');
        }
    }
}
