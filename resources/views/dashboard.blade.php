@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 3 1 6.5 2.5 8l4-3-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>
      </nav>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="card bg-white sha border-0 border-start rounded-start border-primary border-5">
            <div class="card-body">
                <h5 class="card-title text-primary">Total Gas Detector</h5>
                <div class="d-flex ">
                    <p class="card-text fs-4 fw-bold text-primary">10,500</p>
                    <span class="ms-2 fs-4">Units</span>
                </div>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 border-start rounded-start border-success border-5">
            <div class="card-body">
                <h5 class="card-title text-success">Ready To Use</h5>
                <div class="d-flex ">
                    <p class="card-text fs-2 fw-bold text-success">10,500</p>
                    <span class="ms-2 fs-2">Units</span>
                </div>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 border-start rounded-start border-warning border-5">
            <div class="card-body">
                <h5 class="card-title text-warning">On Services</h5>
                <div class="d-flex ">
                    <p class="card-text fs-2 fw-bold text-warning">10,500</p>
                    <span class="ms-2 fs-2">Units</span>
                </div>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 border-start rounded-start border-danger border-5">
            <div class="card-body">
                <h5 class="card-title text-danger">Broken</h5>
                <div class="d-flex ">
                    <p class="card-text fs-2 fw-bold text-danger">10,500</p>
                    <span class="ms-2 fs-2">Units</span>
                </div>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div>

@endsection
