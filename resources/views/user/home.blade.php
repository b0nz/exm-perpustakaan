@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            @foreach ($dataBuku as $buku)
                <div class="col-md-4 mb-4">
                    <div class="card bg-white">
                        <img src="assets/images/book-mockup.jpeg" class="card-img-top" alt="Book 2" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $buku->BookName }}</h5>
                            <div class="card-text">
                                <p class="mb-0">Publisher: {{ $buku->Publisher }}</p>
                                <p class="mb-0">Genre: Mystery</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
