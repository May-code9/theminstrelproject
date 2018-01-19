@extends('admin.master')
@section('content')

<div class="wrapper-content">
  <div class="container">
    <div class="row  align-items-center justify-content-between">
      <div class="col-11 col-sm-12 page-title">
        <h3>{{ config('app.name') }} Dashboard</h3>
        <p>Creatively crafted Dashboard for your needs</p>
      </div>

    </div>

    @if(session('success_status'))
    <div class = "alert alert-success">
      {{session('success_status')}}
    </div>
    @endif

    @if(session('failure_status'))
    <div class = "alert alert-danger">
      {{session('failure_status')}}
    </div>
    @endif

    <div class="row">
      <div class="col-sm-12 push-1">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Product <small>Table</small></h5>
            <h5 class="card-title"><small>To Edit Product, click "Edit"</small></h5>
          </div>
          <div class="card-body">
            <table class="table " id="dataTables-example">
              <thead>
                <tr>
                  <th>Id </th>
                  <th>Product </th>
                  <th>Cost </th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($costs as $cost)
                <tr class="">
                  <td>{{ $cost->id }}</td>
                  <td>{{ $cost->product }}</td>
                  <td>{{ $cost->cost }}</td>
                  <td><a href="/cost/{{$cost->id}}/edit" id="edit" class="btn btn-sm btn-primary mr-2">Edit</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- /.table-responsive -->
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
