@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card bg-white">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between mb-4">
                    <h3 class="card-title">Users</h3>
                    <!-- <button type="button" class="btn btn-primary fw-bold">Tambah User</button> -->
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created At</th>
                            <!-- <th scope="col">Aksi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <!-- <td>
                                    <button type="button" class="btn btn-warning fw-bold">Edit</button>
                                    <button type="button" class="btn btn-danger fw-bold">Delete</button>
                                </td> -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
