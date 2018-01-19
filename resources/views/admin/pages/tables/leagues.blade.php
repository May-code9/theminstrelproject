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
      <div class="col-sm-12 push-1">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">League <small>Table</small> | <small>Total Leagues: </small>{{ countLeague() }}</h5>
          </div>
          <div class="card-body">
            <table class="table " id="dataTables-example">
              <thead>
                <tr>
                  <th>Id </th>
                  <th>League</th>
                  <th>Activation Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($leagues as $league)
                <tr class="">
                  <td><img src="{{asset('img/product1.jpg')}}" alt="" class="gridpic">{{ $league->id }}</td>
                  <td>{{ $league->league }}</td>
                  <td class="center"><span class="status success">{{ $league->activate }}</span></td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>Id </th>
                  <th>League</th>
                  <th>Activation Status</th>
                </tr>
              </tfoot>
            </table>
            <!-- /.table-responsive -->
            <div style="font-size:20px">
              {{ $leagues->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
