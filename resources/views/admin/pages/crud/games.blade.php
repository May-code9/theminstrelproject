@extends('admin.master')
@section('content')

<div class="wrapper-content">
  <div class="container">
    <div class="row  align-items-center justify-content-between">
      <div class="col-11 col-sm-12 page-title">
        <h3>Leagues</h3>
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

    <!-- Add Games -->
    <div class="row">
      <div class="col-sm-16">
        <form class="form-horizontal" role="form" method="POST" action="{{route('games.store')}}">
          {{ csrf_field() }}
          <div class="card">
            <div class="card-body">
              <h5 class="m-0">Add Games</h5>
              <hr>

              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group{{ $errors->has('league_id') ? ' has-error' : '' }} ">
                        <label>League</label>
                        <select class="form-control" id="league_id" name="league_id" required >
                          <option value="" >Select</option>
                          @foreach($leagues as $league)
                          <option value="{{ $league->league }}">{{ $league->league }}</option>
                          @endforeach
                        </select>

                        @if ($errors->has('league_id'))
                        <span class="help-block">
                          <strong>{{ $errors->first('league_id') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                  </div>
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group ">
                        <label>Club 1</label>
                        <select class="form-control" id="club_1_id" name="club_1_id" required >
                          <option value="" >Select</option>
                          @foreach($clubs as $club)
                          <option value="{{ $club->club }}">{{ $club->club }}</option>
                          @endforeach
                        </select>

                        @if ($errors->has('club_1_id'))
                        <span class="help-block">
                          <strong>{{ $errors->first('club_1_id') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group ">
                        <label>Club 2</label>
                        <select class="form-control" id="club_2_id" name="club_2_id" required >
                          <option value="" >Select</option>
                          @foreach($club2s as $club2)
                          <option value="{{ $club2->club2 }}">{{ $club2->club2 }}</option>
                          @endforeach
                        </select>

                        @if ($errors->has('club_2_id'))
                        <span class="help-block">
                          <strong>{{ $errors->first('club_2_id') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group ">
                        <label>Date of Match</label>
                        <div class="input-group">
                          <input id="date_of_match" name="date_of_match" type="text" class="form-control datepicker" aria-label="" placeholder="Match's Date">
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group ">
                        <label> Time of Match</label>
                        <div class="input-group">
                          <input id="time_of_match" name="time_of_match" type="time" class="form-control" aria-label="" placeholder="Match's Time">
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-secondary">Cancel</button>
              <button class="btn btn-success pull-right">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection
