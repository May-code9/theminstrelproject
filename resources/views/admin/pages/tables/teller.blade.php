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
      <div class="col-sm-16 col-md-16">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">All Teller <small>Table</small> | <small>Total Number of Tellers: </small>{{ countConfirmation() }} </h5>
          </div>
          <div class="card-body">
            <table class="table " id="dataTables-example">
              <thead>
                <tr>
                  <th>Id </th>
                  <th>Subscriber</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>School Address</th>
                  <th>State</th>
                  <th>Disability</th>
                  <th>Teller No</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($getListOfUsers as $getListOfUser)
                <tr class="">
                  <td>{{ $getListOfUser->id }}</td>
                  <td>{{ $getListOfUser->first_name }} {{ $getListOfUser->last_name }}</td>
                  <td>{{ $getListOfUser->age }}</td>
                  <td>{{ $getListOfUser->gender }}</td>
                  <td>{{ $getListOfUser->address }}</td>
                  <td>{{ $getListOfUser->state }}</td>
                  <td>{{ $getListOfUser->handicap }}</td>
                  <td>{{ $getListOfUser->teller_no }}</td>
                  <td>{{ $getListOfUser->confirmed }}</td>
                  <td class="center"><a href="/teller/{{$getListOfUser->id}}/edit" id="edit" class="btn btn-sm btn-primary mr-2">Edit Status</a></td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>Id </th>
                  <th>Subscriber</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>School Address</th>
                  <th>State</th>
                  <th>Disability</th>
                  <th>Teller No</th>
                  <th>Status</th>
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
