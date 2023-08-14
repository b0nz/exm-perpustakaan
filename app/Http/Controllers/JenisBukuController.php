<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisBukuController extends Controller
{
    public function index()
    {
        $dataJenisBuku = DB::table('JenisBuku')->get();
        return view('admin.jenis-buku', ['dataJenisBuku' => $dataJenisBuku]);
    }
}
