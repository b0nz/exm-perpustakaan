@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <h3 class="f-3">Cart</h3>
        <div id="cartItem" class="row justify-content-center" />
    </div>
</div>

<script>
    let storage = localStorage.getItem("cart");
    let carts = JSON.parse(storage);
    let dataBuku = '{!!json_encode($dataBuku)!!}';
    let parsedDataBuku = JSON.parse(dataBuku);

    document.getElementById("cartItem").innerHTML = carts.map(item => (
        `
        <div class="row mb-4">
            <div class="col-12 col-md-2">
                <img src="{{ asset('assets/images/book-mockup.jpeg') }}" class="img-thumbnail" alt="Book 2" />
            </div>
            <div class="col">
                <form method="post" action="/cart/${item}">
                    @csrf
                    <h5 class="f-5">${parsedDataBuku.find(f => f.ID.toString() === item).BookName || "-"}</h5>
                    <input name="id" class="d-none" value="${item}" />
                    <div class="d-flex mb-4 gap-4">
                        <label for="qty" class="col-form-label">Qty</label>
                        <input
                            type="number"
                            class="form-control w-25"
                            id="qty"
                            name="qty"
                            value="1"
                            min="1"
                            max="${parsedDataBuku.find(f => f.ID.toString() === item).Stock || 1}"
                        />
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary" onclick="localStorage.setItem('cart', JSON.stringify(carts.filter(f => f != ${item})))">Pinjam Buku</button>
                        <button type="button" class="btn btn-outline-danger" onclick="localStorage.setItem('cart', JSON.stringify(carts.filter(f => f != ${item})));window.location.reload()">Remove</button>
                    </div>
                </form>
            </div>
        </div>
        `
    ));
</script>
@endsection
