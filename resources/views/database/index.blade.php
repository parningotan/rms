@extends('layouts.app')
@section('title', 'Database Management')

@section('main')
    <section class="title">
        <div class="row">
            <div class="d-none d-lg-block col-md-12 d-flex ">
                <h4 class="text-secondary fs-4 text-wrap mr-auto">Database Management</h4>
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </section>

    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title mb-5">Brand</div>
                <table class="table table-hover ">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>John</td>
                        <td>Doe</td>
                        <td>@social</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </section>
@endsection
