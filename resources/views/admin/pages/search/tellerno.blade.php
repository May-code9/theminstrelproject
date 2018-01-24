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
      <div class="col-sm-16 col-md-16">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Search Result(s)</h5>
          </div>
          <div class="card-body">
            <table class="table " id="dataTables-example">
              <thead>
                <tr>
                  <th>Id </th>
                  <th>Subscriber</th>
                  <th>Teller No</th>
                  <th>Status</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>School</th>
                  <th>State</th>
                  <th>Disability</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @forelse($users as $user)
                <tr class="">
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                  <td>{{ $user->teller_no }}</td>
                  <td>{{ $user->confirmed }}</td>
                  <td>{{ $user->age }}</td>
                  <td>{{ $user->gender }}</td>
                  <td>{{ $user->school }}</td>
                  <td>{{ $user->state }}</td>
                  <td>{{ $user->handicap }}</td>
                  <td class="center"><a href="/teller/{{$user->id}}/edit" id="edit" class="btn btn-sm btn-primary mr-2">Edit Status</a></td>
                </tr>
                @empty
                <h2>Cannot Find {{ $nameSearch }}</h2>
                @endforelse
              </tbody>
              <tfoot>
                <tr>
                  <th>Id </th>
                  <th>Subscriber</th>
                  <th>Teller No</th>
                  <th>Status</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>School</th>
                  <th>State</th>
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
