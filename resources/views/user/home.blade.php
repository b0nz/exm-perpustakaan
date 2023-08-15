@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($dataBuku as $buku)
                <a href="{{ route('buku.detail', $buku->ID) }}" class="text-decoration-none text-dark">
                    <div class="col">
                        <div class="custom-card card bg-white opacity-50-hover:hover">
                            <img src="{{ asset('assets/images/book-mockup.jpeg') }}" class="card-img-top" alt="Book 2" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $buku->BookName }}</h5>
                                <div class="card-text">
                                    <p class="mb-0">Publisher: {{ $buku->Publisher }}</p>
                                    <p class="mb-0">Genre: {{ $buku->BookType }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
