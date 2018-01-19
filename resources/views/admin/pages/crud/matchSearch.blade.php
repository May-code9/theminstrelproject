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
            <h5 class="card-title">Edit Score <small>Table</small></h5>
            <h5 class="card-title"><small>Locate Match, click "Edit"</small></h5>
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
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @forelse($match as $score)
                <tr class="">
                  <td>{{ $score->id }}</td>
                  <td>{{ $score->league }}</td>
                  <td>{{ $score->club }}</td>
                  <td>vs</td>
                  <td>{{ $score->club2 }}</td>
                  <td>{{ $score->date_of_match }}</td>
                  <td>{{ $score->time_of_match }}</td>
                  <td><a href="/scores/{{$score->id}}/edit" id="edit" class="btn btn-sm btn-primary mr-2">Add</a></td>
                </tr>
                @empty
                <h2>Cannot Find {{ $date }}</h2>
                @endforelse
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
                  <th></th>
                </tr>
              </tfoot>
            </table>
            <!-- /.table-responsive -->
            <div style="font-size:20px">
              {{ $match->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
