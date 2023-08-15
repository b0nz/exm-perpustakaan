<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class JenisBukuController extends Controller
{
    public function index()
    {
        $dataJenisBuku = DB::table('JenisBuku')->get();
        return view('admin.jenis-buku', ['dataJenisBuku' => $dataJenisBuku]);
    }

    public function create(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'book_type' => 'required',
            ]);

            if ($validator->fails()) {
                toastr()->error($validator->errors()->first(), 'Error');
                return redirect()->route('buku');
            }
            DB::table('JenisBuku')->insert([
                'BookType' => $request->book_type,
            ]);
            toastr()->success('Berhasil menambahkan jenis buku', 'Success');
            return redirect()->route('jenis-buku');
        } catch (Exception $e) {
            toastr()->error($e.getMessage(), 'Error');
            return redirect()->route('jenis-buku');
        }
    }

    public function update(Request $request, $id) {
        try {
            $validator = Validator::make($request->all(), [
                'book_type' => 'required',
            ]);

            if ($validator->fails()) {
                toastr()->error($validator->errors()->first(), 'Error');
                return redirect()->route('buku');
            }
            DB::table('JenisBuku')->where('ID', $id)->update([
                'BookType' => $request->book_type,
            ]);
            toastr()->success('Berhasil mengubah jenis buku', 'Success');
            return redirect()->route('jenis-buku');
        } catch (Exception $e) {
            toastr()->error($e.getMessage(), 'Error');
            return redirect()->route('jenis-buku');
        }
    }

    public function delete($id) {
        try {
            DB::table('JenisBuku')->where('ID', request()->id)->delete();
            toastr()->success('Berhasil menghapus jenis buku', 'Success');
            return redirect()->route('jenis-buku');
        } catch (Exception $e) {
            toastr()->error($e.getMessage(), 'Error');
            return redirect()->route('jenis-buku');
        }
    }
}
