<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BukuController extends Controller
{
    public function index() {
        $dataJenisBuku = DB::table('JenisBuku')->get();
        $dataBuku = DB::table('Buku')->get();
        return view('admin.buku', ['dataBuku' => $dataBuku, 'dataJenisBuku' => $dataJenisBuku]);
    }

    public function create(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'genre' => 'required',
                'book_name' => 'required',
                'deskripsi' => 'required',
                'publisher' => 'required',
                'year' => 'required',
                'stock' => 'required',
            ]);

            if ($validator->fails()) {
                toastr()->error($validator->errors()->first(), 'Error');
                return redirect()->route('buku');
            }
            DB::table('Buku')->insert([
                'BookTypeID' => $request->genre,
                'BookName' => $request->book_name,
                'Description' => $request->deskripsi,
                'Publisher' => $request->publisher,
                'Year' => $request->year,
                'Stock' => $request->stock,
            ]);
            toastr()->success('Berhasil menambahkan buku', 'Success');
            return redirect()->route('buku');
        } catch (Exception $e) {
            toastr()->error($e.getMessage(), 'Error');
            return redirect()->route('buku');
        }
    }

    public function update(Request $request, $id) {
        try {
            $validator = Validator::make($request->all(), [
                'genre' => 'required',
                'book_name' => 'required',
                'deskripsi' => 'required',
                'publisher' => 'required',
                'year' => 'required',
                'stock' => 'required',
            ]);

            if ($validator->fails()) {
                toastr()->error($validator->errors()->first(), 'Error');
                return redirect()->route('buku');
            }
            DB::table('Buku')->where('ID', $id)->update([
                'BookTypeID' => $request->genre,
                'BookName' => $request->book_name,
                'Description' => $request->deskripsi,
                'Publisher' => $request->publisher,
                'Year' => $request->year,
                'Stock' => $request->stock,
            ]);
            toastr()->success('Berhasil mengubah buku', 'Success');
            return redirect()->route('buku');
        } catch (Exception $e) {
            toastr()->error($e.getMessage(), 'Error');
            return redirect()->route('buku');
        }
    }

    public function delete($id) {
        try {
            DB::table('Buku')->where('ID', request()->id)->delete();
            toastr()->success('Berhasil menghapus buku', 'Success');
            return redirect()->route('buku');
        } catch (Exception $e) {
            toastr()->error($e.getMessage(), 'Error');
            return redirect()->route('buku');
        }
    }
}
