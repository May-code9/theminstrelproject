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
        <form class="form-horizontal" method="POST" action="{{ route('qa.store') }}" role="form">
          {{ csrf_field() }}
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Add<small> Question</small></h5>
            </div>
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-10 col-md-10">
                      <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }} ">
                        <label>Question</label>
                        <textarea  id="question" name="question" type="text" class="form-control" rows="4" placeholder="Question goes in here" style="display:none"></textarea>
                        @if ($errors->has('question'))
                        <span class="help-block">
                          <strong>{{ $errors->first('question') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                      <div class="form-group{{ $errors->has('club_id') ? ' has-error' : '' }} ">
                        <label>Club</label>
                        <select class="form-control" id="club_id" name="club_id" required >
                          <option value="" >Select</option>
                          @foreach($clubs as $club)
                          <option value="{{ $club->id }}">{{ $club->club }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group{{ $errors->has('option_a') ? ' has-error' : '' }}">
                        <label>Option A</label>
                        <input id="option_a" name="option_a" type="text" class="form-control" placeholder="Type in First Option">
                        @if ($errors->has('option_a'))
                        <span class="help-block">
                          <strong>{{ $errors->first('option_a') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8" style="padding-top: 33px;">
                      <div class="form-group ">
                        <div class="can-toggle can-toggle--size-small">
                          <input id="a" type="checkbox" name="activate_a">
                          <label for="a">
                            <div class="can-toggle__switch" data-checked="Yes" data-unchecked="No" class="form-control"></div>
                          </label>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group{{ $errors->has('option_b') ? ' has-error' : '' }}">
                        <label>Option B</label>
                        <input id="option_b" name="option_b" type="text" class="form-control" placeholder="Type in Second Option">
                        @if ($errors->has('option_b'))
                        <span class="help-block">
                          <strong>{{ $errors->first('option_b') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8" style="padding-top: 33px;">
                      <div class="form-group ">
                        <div class="can-toggle can-toggle--size-small">
                          <input id="b" type="checkbox" name="activate_b">
                          <label for="b">
                            <div class="can-toggle__switch" data-checked="Yes" data-unchecked="No" class="form-control"></div>
                          </label>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group{{ $errors->has('option_c') ? ' has-error' : '' }}">
                        <label>Option C</label>
                        <input id="option_c" name="option_c" type="text" class="form-control" placeholder="Type in Third Option">
                        @if ($errors->has('option_c'))
                        <span class="help-block">
                          <strong>{{ $errors->first('option_c') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8" style="padding-top: 33px;">
                      <div class="form-group ">
                        <div class="can-toggle can-toggle--size-small">
                          <input id="c" type="checkbox" name="activate_c">
                          <label for="c">
                            <div class="can-toggle__switch" data-checked="Yes" data-unchecked="No" class="form-control"></div>
                          </label>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group{{ $errors->has('option_d') ? ' has-error' : '' }}">
                        <label>Option D</label>
                        <input id="option_d" name="option_d" type="text" class="form-control" placeholder="Type in Second Option">
                        @if ($errors->has('option_d'))
                        <span class="help-block">
                          <strong>{{ $errors->first('option_d') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8" style="padding-top: 33px;">
                      <div class="form-group ">
                        <div class="can-toggle can-toggle--size-small">
                          <input id="d" type="checkbox" name="activate_d">
                          <label for="d">
                            <div class="can-toggle__switch" data-checked="Yes" data-unchecked="No" class="form-control"></div>
                          </label>
                        </div>
                      </div>
                    </div>

                    <input id="admin_id" name="admin_id" type="hidden" class="form-control" value="{{ AUth::user()->id }}">
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-sm btn-primary mr-2">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>

  @endsection
