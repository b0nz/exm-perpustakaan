@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center gap-3">
        <div class="col-12 col-md-4">
            <img src="{{ asset('assets/images/book-mockup.jpeg') }}" class="img-thumbnail" alt="Book 2" />
        </div>
        <div class="col">
            <h1>{{ $buku->BookName }}</h1>
            <p>{{ $buku->Description }}</p>

            <p class="mb-0">Publisher: {{ $buku->Publisher }}</p>
            <p class="mb-0">Genre: {{ $buku->BookType }}</p>
            <p class="mb-0">Year: {{ $buku->Year }}</p>
            <p class="mb-0">
                Stock: <span class="badge {{ $buku->Stock == 0 ? 'bg-danger' : 'bg-secondary'}}">{{ $buku->Stock > 0 ? $buku->Stock : "Habis" }}</span>
            </p>
            <button class="btn btn-primary mt-4" {{ $buku->Stock <= 0 ? 'disabled' : ''}} onclick="addToCart('{{ $buku->ID }}')">Tambah ke Keranjang</button>
        </div>
        <div id="alertWrapper" />
    </div>
</div>
<script>
    function addToCart(id) {
        let storage = localStorage.getItem('cart');
        let cart = storage ? JSON.parse(storage) : [];

        if (!cart.includes(id)) {
            cart.push(id);
        }

        localStorage.setItem('cart', JSON.stringify(cart));

        document.getElementById('alertWrapper').innerHTML = `
            <div class="mt-4 alert alert-info alert-dismissible fade show" role="alert">
                Berhasil menambahkan ke keranjang!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
    }
</script>
@endsection
