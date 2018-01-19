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
      <div class="col-sm-16">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">User <small>Table</small> | <small>Total Users: </small>{{ countUser() }}</h5>
          </div>
          <div class="card-body">
            <table class="table " id="dataTables-example">
              <thead>
                <tr>
                  <th>Id </th>
                  <th>User FullName </th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Bank Name</th>
                  <th>Account Name</th>
                  <th>Account Number</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr class="">
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->phone_number }}</td>
                  <td>{{ $user->bank_name }}</td>
                  <td>{{ $user->account_name }}</td>
                  <td>{{ $user->account_number }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- /.table-responsive -->
            <div style="font-size:20px">
              {{ $users->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
