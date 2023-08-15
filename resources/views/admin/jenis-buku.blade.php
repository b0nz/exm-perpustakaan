@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card bg-white">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between mb-4">
                    <h3 class="card-title">Jenis Buku</h3>
                    <button type="button" class="btn btn-primary fw-bold" data-bs-toggle="modal"
                    data-bs-target="#tambahJenisBukuModal">
                        Tambah Jenis Buku
                    </button>
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
                                <button
                                    type="button"
                                    class="btn btn-warning fw-bold"
                                    onclick="showEditJenisBukuModal('{{ json_encode($jenisBuku) }}')"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editJenisBukuModal"
                                >
                                    Edit
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-danger fw-bold"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteConfirmationModal"
                                    onclick="showDeleteConfirmationModal('{{json_encode($jenisBuku)}}')"
                                >
                                    Delete
                                </button>

                                <!-- Delete Confirmation -->
                                <div
                                    class="modal fade"
                                    id="deleteConfirmationModal"
                                    tabindex="-1"
                                    aria-labelledby="deleteConfirmationModalLabel"
                                    aria-hidden="true"
                                >
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1
                                                    class="modal-title fs-5"
                                                    id="deleteConfirmationModalLabel"
                                                >
                                                    Delete Confirmation
                                                </h1>
                                                <button
                                                    type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"
                                                ></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    Apakah anda yakin ingin
                                                    menghapus data?
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <form method="post">
                                                    @method('delete') @csrf
                                                    <button
                                                        type="button"
                                                        class="btn btn-outline-secondary"
                                                        data-bs-dismiss="modal"
                                                    >
                                                        Tidak
                                                    </button>
                                                    <button
                                                        type="submit"
                                                        class="btn btn-danger"
                                                    >
                                                        Ya
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @isset($dataJenisBuku)
                            @if(count($dataJenisBuku) == 0)
                            <tr>
                                <td colspan="3" class="text-center">
                                    Tidak ada data
                                </td>
                            </tr>
                            @endif
                        @endisset
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tambah Buku Modal -->
        <div
            class="modal fade"
            id="tambahJenisBukuModal"
            tabindex="-1"
            aria-labelledby="tambahJenisBukuModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahJenisBukuModalLabel">
                            Tambah Jenis Buku
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <form method="post" action="{{ url('jenis-buku') }}">
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
                                <label for="book_type" class="col-form-label"
                                    >Nama Jenis Buku:</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="book_type"
                                    name="book_type"
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
            id="editJenisBukuModal"
            tabindex="-1"
            aria-labelledby="editJenisBukuModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editJenisBukuModalLabel">
                            Edit Jenis Buku
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
                                <label for="book_type" class="col-form-label"
                                    >Nama Jenis Buku:</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="book_type"
                                    name="book_type"
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
    function showEditJenisBukuModal(data) {
        let el = document.getElementById("editJenisBukuModal");
        let parsedData = JSON.parse(data);

        el.querySelector("form").action = "{{ route('jenis-buku') }}/" + parsedData.ID;
        el.querySelector("#id").value = parsedData.ID;
        el.querySelector("#book_type").value = parsedData.BookType;
    }
    function showDeleteConfirmationModal(data) {
        let el = document.getElementById("deleteConfirmationModal");
        let parsedData = JSON.parse(data);

        el.querySelector("form").action = "{{ route('jenis-buku') }}/" + parsedData.ID;
    }
</script>
@endsection
