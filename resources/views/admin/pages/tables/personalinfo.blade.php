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
    <div class="row">
      <div class="col-sm-16 col-md-16 ">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">All Subscribers' <small>Guardian</small> | <small>Total Number of Subscribers: </small>{{ countUser() }} </h5>
          </div>
          <div class="card-body">
            <table class="table " id="dataTables-example">
              <thead>
                <tr>
                  <th>Id </th>
                  <th>Subscriber</th>
                  <th>Gender</th>
                  <th>Age</th>
                  <th>Inspiration</th>
                  <th>Disability</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($getListOfUsers as $getListOfUser)
                <tr class="">
                  <td>{{ $getListOfUser->id }}</td>
                  <td>{{ $getListOfUser->first_name }} {{ $getListOfUser->last_name }}</td>
                  <td>{{ $getListOfUser->gender }}</td>
                  <td>{{ $getListOfUser->age }}</td>
                  <td>{{ $getListOfUser->inspiration }}</td>
                  <td>{{ $getListOfUser->handicap }}</td>
                  <td class="center"><a href="/personalinfo/{{$getListOfUser->id}}/edit" id="edit" class="btn btn-sm btn-primary mr-2">Edit Info </a></td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>Id </th>
                  <th>Subscriber</th>
                  <th>Gender</th>
                  <th>Age</th>
                  <th>Inspiration</th>
                  <th>Disability</th>
                  <th></th>
                </tr>
              </tfoot>
            </table>
            <!-- /.table-responsive -->

          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
