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
        <form class="form-horizontal" method="GET" action="{{ route('match.search') }}" role="form">
          {{ csrf_field() }}
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Search Match<small> by date to update score</small></h5>
          </div>
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-8 ">
                <div class="row ">
                  <div class="col-md-16">
                    <div class="form-group">
                      <label>Date of Match</label>
                      <div class="input-group">
                      <input id="date_of_match" name="date_of_match" type="text" class="form-control datepicker" placeholder="Search By Match Date">
                    </div>
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
            <h5 class="card-title">Score <small>Table</small></h5>
          </div>
          <div class="card-body">
            <table class="table " id="dataTables-example">
              <thead>
                <tr>
                  <th>Id </th>
                  <th>League</th>
                  <th>Club 1</th>
                  <th>Score</th>
                  <th></th>
                  <th>Club 2</th>
                  <th>Score</th>
                  <th>Match Date</th>
                  <th>Match Time</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($scores as $score)
                <tr class="">
                  <td>{{ $score->id }}</td>
                  <td>{{ $score->league }}</td>
                  <td>{{ $score->club }}</td>
                  <td>{{ $score->score_1 }}</td>
                  <td>vs</td>
                  <td>{{ $score->club2 }}</td>
                  <td>{{ $score->score_2 }}</td>
                  <td>{{ $score->date_of_match }}</td>
                  <td>{{ $score->time_of_match }}</td>
                  <th><a href="/editScores/{{$score->id}}/edit" id="edit" name="edit" class="btn btn-sm btn-primary mr-2">Edit</a></th>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>Id </th>
                  <th>League</th>
                  <th>Club 1</th>
                  <th>Score</th>
                  <th></th>
                  <th>Club 2</th>
                  <th>Score</th>
                  <th>Match Date</th>
                  <th>Match Time</th>
                  <th></th>
                </tr>
              </tfoot>
            </table>
            <!-- /.table-responsive -->
            <div style="font-size:20px">
              {{ $scores->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
