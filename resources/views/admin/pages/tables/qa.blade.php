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
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Question <small>Table</small> | <small>Total Questions: </small>{{ qna() }}</h5>
            <h5 class="card-title"><small>To Edit Question, click "Edit"</small></h5>
          </div>
          <div class="card-body">
            <table class="table " id="dataTables-example">
              <thead>
                <tr>
                  <th>Id </th>
                  <th>Question </th>
                  <th>Option A</th>
                  <th>Option B</th>
                  <th>Option C</th>
                  <th>Option D</th>
                  <th>Club</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($questions as $question)
                <tr class="">
                  <td>{{ $question->id }}</td>
                  <td>{{ $question->question }}</td>
                  <td>{{ $question->option_a }}</td>
                  <td>{{ $question->option_b }}</td>
                  <td>{{ $question->option_c }}</td>
                  <td>{{ $question->option_d }}</td>
                  <td>{{ $question->club }}</td>
                  <td><a href="/qa/{{$question->id}}/edit" id="edit" class="btn btn-sm btn-primary mr-2">Edit</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div style="font-size:20px">
              {{ $questions->links() }}
            </div>
            <!-- /.table-responsive -->
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
