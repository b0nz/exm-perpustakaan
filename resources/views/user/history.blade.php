@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <h3 class="f-3">History</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Code</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Tgl Pinjam</th>
                    <th scope="col">Tgl Pengembalian</th>
                    <th scope="col">Batas Waktu Pengembalian</th>
                    <th scope="col">Denda</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataTrx as $trx)
                <tr>
                    <td scope="row">{{ $loop->index + 1 }}</td>
                    <td>{{ $trx->TransCode }}</td>
                    <td>{{ $trx->BookName }}</td>
                    <td>{{ $trx->Qty }}</td>
                    <td>{{ $trx->TransDate }}</td>
                    <td>{{ isset($trx->Fine) ? date("Y-m-d", strtotime($trx->FineDays." day", strtotime($trx->ReturnDate))) : '-' }}</td>
                    <td>{{ $trx->ReturnDate }}</td>
                    <td>{{ $trx->Fine ?? '-' }}</td>
                    <td>
                        @if(!isset($trx->Fine))
                        <a href="{{ route('pengembalian', $trx->TransCode) }}" class="btn btn-primary fw-bold" role="button">Pengembalian</a>
                        @else
                        <p class="badge bg-secondary">Sudah Dikembalikan</p>
                        @endif
                    </td>
                </tr>
                @endforeach @isset($dataTrx) @if(count($dataTrx) == 0)
                <tr>
                    <td colspan="8" class="text-center">
                        Tidak ada data
                    </td>
                </tr>
                @endif @endisset
            </tbody>
        </table>
    </div>
</div>
@endsection
