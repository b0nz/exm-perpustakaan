@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-white">
                <div class="card-body">
                    <h5 class="card-title">Total User</h5>
                    <p class="card-text">{{ $totalUser }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-white">
                <div class="card-body">
                    <h5 class="card-title">Total Buku</h5>
                    <p class="card-text">{{ $totalBuku }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-white">
                <div class="card-body">
                    <h5 class="card-title">Total Denda Diperoleh</h5>
                    <p class="card-text">{{ 'Rp '.$totalDenda }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
