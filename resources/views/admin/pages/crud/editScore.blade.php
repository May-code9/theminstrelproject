@extends('admin.master')
@section('content')

<div class="wrapper-content">
  <div class="container">
    <div class="row  align-items-center justify-content-between">
      <div class="col-11 col-sm-12 page-title">
        <h3>Save Table</h3>
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

    <!-- Edit Scores -->
    <div class="row">
      <div class="col-sm-16">
        <form class="form-horizontal" role="form" method="POST" action="/editScores/{{$score->id}}">
          {{ method_field('PUT') }}
          {{ csrf_field() }}
          <div class="card">

            <div class="card-body">
              <h5 class="m-0"> Edit Scores</h5>
              <hr>

              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Club</label>
                        <input id="club" name="" type="text" class="form-control" value="{{ $club1->club }}" disabled style="background-color: #739cc5;">
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Score</label>
                        <input id="score_1" name="score_1" type="text" class="form-control" value="{{ $score->score_1 }}" placeholder="Enter Score">
                        @if ($errors->has('score_1'))
                        <span class="help-block">
                          <strong>{{ $errors->first('score_1') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Club 2</label>
                        <input id="club2" name="" type="text" class="form-control" value="{{ $club2->club2 }}" disabled style="background-color: #739cc5;">
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Score</label>
                        <input id="score_2" name="score_2" type="text" class="form-control" value="{{ $score->score_2 }}" placeholder="Enter Score">
                        @if ($errors->has('score_2'))
                        <span class="help-block">
                          <strong>{{ $errors->first('score_2') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                    <input id="admin_id" name="admin_id" type="hidden" class="form-control" value="{{ Auth::user()->id }}">
                  </div>
                </div>
              </div>

            </div>

            <div class="card-footer">
              <button class="btn btn-success pull-right" type="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
  @endsection
