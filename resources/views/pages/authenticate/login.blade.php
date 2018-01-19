@extends('layouts.master')
@section('title')
Login | {{ config('app.name') }}
@endsection

@section('content')
<main class="page-content section-70 section-md-114">
  <div class="shell-wide">
    <div class="hr bg-gray-light"></div>
  </div>
  <!--Section Login Register-->
  <section class="section-98 section-sm-110 section-bottom-66" style="margin-top: 30px">
    <div class="shell">
      <div class="range range-xs-center section-34">
        <div class="cell-xs-8 cell-sm-6 cell-md-4">
          <h2 class="text-bold text-colour">Sign In</h2>
          <div class="offset-sm-top-45 text-center">
            <!-- Responsive-tabs-->
            <div data-type="horizontal" class="responsive-tabs responsive-tabs-classic horizontal">
              <ul data-group="tabs-group-default" class="resp-tabs-list tabs-1 text-center tabs-group-default">
                <li>Login</li>
                <!-- <li>Registration</li> -->
              </ul>
              <div data-group="tabs-group-default" class="resp-tabs-container text-sm-left tabs-group-default">
                <div>
                  <!-- RD Mailform-->
                  <form method="post" action="{{ route('login') }}" class="text-left">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="email" class="form-label form-label-outside">E-mail:</label>
                      <input id="email" type="email" name="email" class="form-control bg-white" required>
                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group offset-top-15{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password" class="form-label form-label-outside">Password:</label>
                      <input id="password" type="password" name="password" class="form-control bg-white" required>
                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="offset-top-20">
                      <button type="submit" class="btn btn-ellipse btn-primary reveal-block reveal-lg-inline-block">Sign in</button><span class="inset-lg-left-20 text-middle small reveal-inline-block offset-top-20 offset-lg-top-0">or enter with</span>
                      <ul class="list-inline list-inline-xs list-inline-madison reveal-lg-inline-block inset-lg-left-10 inset-xl-left-20 text-middle offset-top-15 offset-lg-top-0">
                        <li><a href="#" class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled"></a></li>
                        <li><a href="#" class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled"></a></li>
                        <li><a href="#" class="icon icon-xxs fa-google icon-circle icon-gray-light-filled"></a></li>
                      </ul>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
