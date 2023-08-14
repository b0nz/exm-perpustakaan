@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card bg-white">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between mb-4">
                    <h3 class="card-title">Buku</h3>
                    <button type="button" class="btn btn-primary fw-bold">Tambah Buku</button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Buku</th>
                            <th scope="col">Publisher</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataBuku as $buku)
                            <tr>
                                <td scope="row">{{ $loop->index + 1 }}</td>
                                <td>{{ $buku->BookName }}</td>
                                <td>{{ $buku->Publisher }}</td>
                                <td>{{ $buku->Year }}</td>
                                <td>{{ $buku->Stock }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning fw-bold">Edit</button>
                                    <button type="button" class="btn btn-danger fw-bold">Delete</button>
                                </td>
                            </tr>
                        @endforeach

                        @isset($dataBuku)
                            @if(count($dataBuku) == 0)
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data</td>
                                </tr>
                            @endif
                        @endisset
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
