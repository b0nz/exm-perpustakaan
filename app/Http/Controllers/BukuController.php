<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index() {
        $dataBuku = DB::table('Buku')->get();
        return view('admin.buku', ['dataBuku' => $dataBuku]);
    }
}
