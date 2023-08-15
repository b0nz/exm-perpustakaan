@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card bg-white">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between mb-4">
                    <h3 class="card-title">Buku</h3>
                    <button
                        type="button"
                        class="btn btn-primary fw-bold"
                        data-bs-toggle="modal"
                        data-bs-target="#tambahBukuModal"
                    >
                        Tambah Buku
                    </button>
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
                                <button
                                    type="button"
                                    class="btn btn-warning fw-bold"
                                    onclick="showEditBukuModal('{{ json_encode($buku) }}')"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editBukuModal"
                                >
                                    Edit
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-danger fw-bold"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteConfirmationModal"
                                    onclick="showDeleteConfirmationModal('{{ json_encode($buku) }}')"
                                >
                                    Delete
                                </button>

                                <!-- Delete Confirmation -->
                                <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="deleteConfirmationModalLabel">Delete Confirmation</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah anda yakin ingin menghapus data?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <form method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tidak</button>
                                                    <button type="submit" class="btn btn-danger">Ya</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach @isset($dataBuku) @if(count($dataBuku) == 0)
                        <tr>
                            <td colspan="6" class="text-center">
                                Tidak ada data
                            </td>
                        </tr>
                        @endif @endisset
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tambah Buku Modal -->
        <div
            class="modal fade"
            id="tambahBukuModal"
            tabindex="-1"
            aria-labelledby="tambahBukuModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahBukuModalLabel">
                            Tambah Buku
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <form method="post" action="{{ url('buku') }}">
                        @csrf
                        <div class="modal-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger mb-3">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="book_name" class="col-form-label"
                                    >Nama Buku:</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="book_name"
                                    name="book_name"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="col-form-label"
                                    >Deskripsi:</label
                                >
                                <textarea
                                    class="form-control"
                                    id="deskripsi"
                                    name="deskripsi"
                                ></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="genre" class="form-label"
                                    >Genre:</label
                                >
                                <select class="form-select" id="genre" name="genre">
                                    @foreach($dataJenisBuku as $jenisBuku)
                                    <option value="{{ $jenisBuku->ID }}">
                                        {{ $jenisBuku->BookType }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="publisher" class="col-form-label"
                                    >Publisher:</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="publisher"
                                    name="publisher"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="year" class="col-form-label"
                                    >Tahun Terbit:</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="year"
                                    name="year"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="stock" class="col-form-label"
                                    >Stok:</label
                                >
                                <input
                                    type="number"
                                    class="form-control"
                                    id="stock"
                                    name="stock"
                                />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-outline-danger"
                                data-bs-dismiss="modal"
                            >
                                Close
                            </button>
                            <button type="submit" class="btn btn-success">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Buku Modal -->
        <div
            class="modal fade"
            id="editBukuModal"
            tabindex="-1"
            aria-labelledby="editBukuModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editBukuModalLabel">
                            Edit Buku
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <form method="post">
                        @method('put')
                        @csrf
                        <div class="modal-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger mb-3">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="d-none">
                                <label for="id" class="col-form-label"
                                    >ID:</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="id"
                                    name="id"
                                />
                            </div>

                            <div class="mb-3">
                                <label for="book_name" class="col-form-label"
                                    >Nama Buku:</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="book_name"
                                    name="book_name"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="col-form-label"
                                    >Deskripsi:</label
                                >
                                <textarea
                                    class="form-control"
                                    id="deskripsi"
                                    name="deskripsi"
                                ></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="genre" class="form-label"
                                    >Genre:</label
                                >
                                <select class="form-select" id="genre" name="genre">
                                    @foreach($dataJenisBuku as $jenisBuku)
                                    <option value="{{ $jenisBuku->ID }}">
                                        {{ $jenisBuku->BookType }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="publisher" class="col-form-label"
                                    >Publisher:</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="publisher"
                                    name="publisher"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="year" class="col-form-label"
                                    >Tahun Terbit:</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="year"
                                    name="year"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="stock" class="col-form-label"
                                    >Stok:</label
                                >
                                <input
                                    type="number"
                                    class="form-control"
                                    id="stock"
                                    name="stock"
                                />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-outline-danger"
                                data-bs-dismiss="modal"
                            >
                                Close
                            </button>
                            <button type="submit" class="btn btn-success">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showEditBukuModal(data) {
        let el = document.getElementById("editBukuModal");
        let parsedData = JSON.parse(data);

        el.querySelector("form").action = "{{ route('buku') }}/" + parsedData.ID;
        el.querySelector("#id").value = parsedData.ID;
        el.querySelector("#book_name").value = parsedData.BookName;
        el.querySelector("#deskripsi").value = parsedData.Description;
        el.querySelector("#genre").value = parsedData.BookTypeID;
        el.querySelector("#publisher").value = parsedData.Publisher;
        el.querySelector("#year").value = parsedData.Year;
        el.querySelector("#stock").value = parsedData.Stock;
    }
    function showDeleteConfirmationModal(data) {
        let el = document.getElementById("deleteConfirmationModal");
        let parsedData = JSON.parse(data);

        el.querySelector("form").action = "{{ route('buku') }}/" + parsedData.ID;
    }
</script>
@endsection
