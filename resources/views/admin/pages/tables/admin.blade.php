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
      <div class="col-sm-16">
        <form method="GET" action="{{ route('user.search') }}" role="form">
          {{ csrf_field() }}
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Search Users<small> to Add as Admin</small></h5>
            <h5 class="card-title"><small>To Add to Admin, Search "First Name" of user</small></h5>
          </div>
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-8 ">
                <div class="row ">
                  <div class="col-md-16">
                    <div class="form-group">
                      <label>First Name</label>
                      <input id="first_name" name="first_name" type="text" class="form-control" placeholder="Search By First Name">
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-sm btn-primary mr-2">Search</button>
          </div>
        </div>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-16">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Admin <small>Table</small></h5>
            <h5 class="card-title"><small>To delete from Admin, click "Edit", then Change "Role" to "0"</small></h5>
          </div>
          <div class="card-body">
            <table class="table " id="dataTables-example">
              <thead>
                <tr>
                  <th>Id </th>
                  <th>Admin FullName </th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Role</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($admins as $admin)
                <tr class="">
                  <td>{{ $admin->id }}</td>
                  <td>{{ $admin->first_name }} {{ $admin->last_name }}</td>
                  <td>{{ $admin->email }}</td>
                  <td>{{ $admin->phone_number }}</td>
                  <td>Admin</td>
                  <td><a href="/admin/{{$admin->id}}/edit" id="edit" class="btn btn-sm btn-primary mr-2">Edit</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- /.table-responsive -->
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-16">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Super Admin <small>Table</small></h5>
          </div>
          <div class="card-body">
            <table class="table " id="dataTables-example">
              <thead>
                <tr>
                  <th>Id </th>
                  <th>Super Admin FullName </th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Role</th>
                </tr>
              </thead>
              <tbody>
                @foreach($superadmins as $superadmin)
                <tr class="">
                  <td>{{ $superadmin->id }}</td>
                  <td>{{ $superadmin->first_name }} {{ $superadmin->last_name }}</td>
                  <td>{{ $superadmin->email }}</td>
                  <td>{{ $superadmin->phone_number }}</td>
                  <td>Super Admin</td>
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
