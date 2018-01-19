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
            <h5 class="card-title">Game <small>Table</small> | <small>All Games:</small> {{ countGames() }} | <small>Available for Bet:</small> {{ countAvailableGames() }}</h5>
          </div>
          <div class="card-body">
            <table class="table " id="dataTables-example">
              <thead>
                <tr>
                  <th>Id </th>
                  <th>League</th>
                  <th>Club 1</th>
                  <th></th>
                  <th>Club 2</th>
                  <th>Match Date</th>
                  <th>Match Time</th>
                </tr>
              </thead>
              <tbody>
                @for($i = 0; $i < count($league_list); $i++ )
                <tr class="">
                  <td><img src="{{asset('img/product1.jpg')}}" alt="" class="gridpic">{{ $league_list[$i]->id }}</td>
                  <td>{{ $league_list[$i]->league }}</td>
                  <td>{{ $league_list[$i]->club }}</td>
                  <td>vs</td>
                  <td>{{ $league_list[$i]->club2 }}</td>
                  <td>{{ $league_list[$i]->date_of_match }}</td>
                  <td>{{ $league_list[$i]->time_of_match }}</td>
                </tr>
                @endfor
              </tbody>
              <tfoot>
                <tr>
                  <th>Id </th>
                  <th>League</th>
                  <th>Club 1</th>
                  <th></th>
                  <th>Club 2</th>
                  <th>Match Date</th>
                  <th>Match Time</th>
                </tr>
              </tfoot>
            </table>
            <!-- /.table-responsive -->
            <div style="font-size:20px">
              {{ $league_list->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

@endsection
