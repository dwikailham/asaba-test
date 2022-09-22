@extends('layout.main')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" aria-label="Tenth navbar example">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08"
                aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Split Bill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <main>
            <div class="py-5 text-center">
                <h2>Split Bill Form</h2>
            </div>

            <div class="row g-5">
                <div class="col-md col-lg">
                    <h4 class="mb-3">Bill Form</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3 mb-3">

                            <div class="col-md-5">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="" value=""
                                    required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="product" class="form-label">Product</label>
                                <select class="form-select" id="product" required>
                                    <option value="">Choose...</option>
                                    <option>California</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="satuan" class="form-label">Jumlah Satuan</label>
                                <input type="number" class="form-control" id="satuan" placeholder="" required>
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>

                        <button class="w-100 btn btn-success btn-lg" type="submit">Add Participant</button>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg mb-5" type="submit">Continue to checkout</button>
                    </form>
                </div>
            </div>
        </main>
    @endsection
