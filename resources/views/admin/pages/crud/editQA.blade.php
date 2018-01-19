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
        <form class="form-horizontal" role="form" method="POST" action="/qa/{{$question->id}}">
          {{ method_field('PUT') }}
          {{ csrf_field() }}
          <div class="card">

            <div class="card-body">
              <h5 class="m-0"> Edit Question</h5>
              <hr>

              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-16 col-md-16">
                      <div class="form-group">
                        <label>Question</label>
                        <input id="question" name="question" type="text" class="form-control" value="{{ $question->question }}">
                        @if ($errors->has('question'))
                        <span class="help-block">
                          <strong>{{ $errors->first('question') }}</strong>
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
                        <label>Option A</label>
                        <input id="option_a" name="option_a" type="text" class="form-control" value="{{ $question->option_a }}" placeholder="Edit Option A">
                        @if ($errors->has('option_a'))
                        <span class="help-block">
                          <strong>{{ $errors->first('option_a') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Option B</label>
                        <input id="option_b" name="option_b" type="text" class="form-control" value="{{ $question->option_b }}" placeholder="Edit Option B">
                        @if ($errors->has('option_b'))
                        <span class="help-block">
                          <strong>{{ $errors->first('option_b') }}</strong>
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
                        <label>Option C</label>
                        <input id="option_c" name="option_c" type="text" class="form-control" value="{{ $question->option_c }}" placeholder="Edit Option C">
                        @if ($errors->has('option_c'))
                        <span class="help-block">
                          <strong>{{ $errors->first('option_c') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Option D</label>
                        <input id="option_d" name="option_d" type="text" class="form-control" value="{{ $question->option_d }}" placeholder="Edit Option D">
                        @if ($errors->has('option_d'))
                        <span class="help-block">
                          <strong>{{ $errors->first('option_d') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <input id="admin_id" name="admin_id" type="hidden" class="form-control" value="{{ Auth::user()->id }}">
                  </div>
                </div>
              </div>

              <br/>
              <br/>
              <br/>

              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Correct Answer</label>
                        <input id="answer" name="answer" type="text" class="form-control" value="{{ $answer->answer }}" placeholder="Answer">
                        @if ($errors->has('answer'))
                        <span class="help-block">
                          <strong>{{ $errors->first('answer') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group{{ $errors->has('club_id') ? ' has-error' : '' }} ">
                        <label>Club</label>
                        <select class="form-control" id="club_id" name="club_id" required >
                          <option value="" >-- Select --</option>
                          @foreach($clubs as $club)
                          <option value="{{ $club->id }}">{{ $club->club }}</option>
                          @endforeach
                        </select>
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
