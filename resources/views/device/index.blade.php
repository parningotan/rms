@extends('layouts.app')
@section('title', 'Device Management')

@section('main')
    <div class="d-flex align-items-center mb-3">
        <p class="h4 text-secondary my-0">Device Management</p>
        <ul class="nav ms-auto">
            <li class="nav-item">
                <a class=" nav-link d-flex align-items-center" href="#newProfileModal" data-url="{{route('deviceProfile.index')}}"><span class="material-symbols-outlined me-1">add</span>New Profile</a>
            </li>
            <li class="nav-item">
                <a class=" nav-link d-flex align-items-center" href="#newBrandModal" data-url="{{route('brand.create')}}"><span class="material-symbols-outlined me-1">add</span>New Brand</a>
            </li>
        </ul>
    </div>
    <section>
        <div class="card border rounded-0">
            <div class="card-body">
                <form action="" method="POST" class="form-floating">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="serialNumber" class="form-label">Serial Number</label>
                                <input type="text" class="form-control" id="serialNumber" aria-describedby="snHelp">
                                <div id="snHelp" class="invalid-feedback">We'll never share your email with anyone else.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="Description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="Description" aria-describedby="descHelp">
                                <div id="descHelp" class="invalid-feedback">We'll never share your email with anyone else.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="brandSelect" class="form-label">Brand</label>
                                <select class="form-select" aria-label="Default select example" id="brandSelect">
                                    <option selected>Select a Brand</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div id="brandSelect" class="invalid-feedback">We'll never share your email with anyone
                                    else.</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="CategorySelect" class="form-label">Category</label>
                                <select class="form-select" aria-label="Default select example" id="CategorySelect">
                                    <option selected>Select a </option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div id="brandSelect" class="invalid-feedback">We'll never share your email with anyone
                                    else.</div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </section>
    @include('layouts.modal')
@endsection


