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

    <div class="row">
      <div class="col-sm-16">
        <form class="form-horizontal" role="form" method="POST" action="{{route('leagues.store')}}">
          {{ csrf_field() }}
          <div class="card">
            <div class="card-body">
              <h5 class="m-0">Add League</h5>
              <hr>

              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group{{ $errors->has('league') ? ' has-error' : '' }}">
                        <label>League Name</label>
                        <input id="league" name="league" type="text" class="form-control" value="{{ old('league') }}" required>

                        @if ($errors->has('league'))
                        <span class="help-block">
                          <strong>{{ $errors->first('league') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8" style="padding-top: 33px;">
                      <div class="form-group ">
                        <div class="can-toggle can-toggle--size-small">
                          <input id="b" type="checkbox" name="activate">
                          <label for="b">
                            <div class="can-toggle__switch" data-checked="On" data-unchecked="Off" class="form-control"></div>
                          </label>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-secondary">Edit</button>
              <button class="btn btn-success pull-right">Add</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>


  @endsection
