@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card bg-white">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between mb-4">
                    <h3 class="card-title">Jenis Buku</h3>
                    <button type="button" class="btn btn-primary fw-bold">Tambah Jenis Buku</button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Jenis Buku</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataJenisBuku as $jenisBuku)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $jenisBuku->BookType }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning fw-bold">Edit</button>
                                    <button type="button" class="btn btn-danger fw-bold">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                        @isset($dataJenisBuku)
                            @if (count($dataJenisBuku) == 0)
                                <tr>
                                    <td colspan="3" class="text-center">Tidak ada data</td>
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
