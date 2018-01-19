@extends('layouts.master')
@section('title')
Register | {{ config('app.name') }}
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
        <div class="cell-xs-8 cell-sm-10 cell-md-8">
          <h2 class="text-bold text-colour">Sign Up</h2>
          <div class="offset-sm-top-45 text-center">
            <!-- Responsive-tabs-->
            <div data-type="horizontal" class="responsive-tabs responsive-tabs-classic horizontal">
              <ul data-group="tabs-group-default" class="resp-tabs-list tabs-1 text-center tabs-group-default">
                <!-- <li>Login</li>  -->
                <li>Registration</li>
              </ul>
              <div data-group="tabs-group-default" class="resp-tabs-container text-sm-left tabs-group-default">
                <div>
                  <!-- RD Mailform-->
                  <form method="post" action="{{ route('register') }}" class="text-left">
                    {{ csrf_field() }}
                    <h3 class="text-colour">Participant's Information</h3>
                    <div class="range offset-top-17">
                      <div class="cell-sm-6">
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                          <label for="first_name" class="form-label form-label-outside">First Name:</label>
                          <input id="first_name" type="text" name="first_name" class="form-control bg-white" required>
                          @if ($errors->has('first_name'))
                          <span class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                          </span>
                          @endif
                        </div>
                      </div>
                      <div class="cell-sm-6 offset-top-17 offset-sm-top-0">
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                          <label for="last_name" class="form-label form-label-outside">Last Name:</label>
                          <input id="last_name" type="text" name="last_name" class="form-control bg-white" required>
                          @if ($errors->has('last_name'))
                          <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                          </span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="range offset-top-17">
                      <div class="cell-sm-6">
                        <div class="form-group">
                          <label for="gender" class="form-label form-label-outside">Gender:</label>
                          <select id="gender" class="form-control" name="gender" required>
                            <option value="">-- Select --</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                          </select>
                        </div>
                      </div>

                      <div class="cell-sm-6">
                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                          <label for="age" class="form-label form-label-outside">Age:</label>
                          <select class="form-control" id="age" name="age" required>
                            <option value="">-- Between 12 &amp; 22 --</option>
                            @for($i = 0; $i < count(getAge()); $i++)
                            <option value="{{getAge()[$i]}}">{{getAge()[$i]}}</option>
                            @endfor
                          </select>
                        </div>
                      </div>

                    </div>
                    <div class="offset-top-17">
                      <div class="form-group">
                        <label for="inspiration" class="form-label form-label-outside">Inspiration</label>
                        <textarea id="inspiration" name="inspiration" style="height: 100px" class="form-control" placeholder="What has inspired you to contest?"></textarea>
                      </div>
                    </div>
                    <div class="offset-top-17">
                      <div class="form-group">
                        <label for="handicap" class="form-label form-label-outside">Disability</label>
                        <input id="handicap" type="text" name="handicap" class="form-control bg-white" placeholder="State if any...">
                        @if ($errors->has('handicap'))
                        <span class="help-block">
                          <strong>{{ $errors->first('handicap') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                    <hr>
                    <h3 class="text-colour">Address Information</h3>
                    <div class="range offset-top-10">
                      <div class="cell-sm-6">
                        <div class="form-group offset-top-15{{ $errors->has('city') ? ' has-error' : '' }}">
                          <label for="city" class="form-label form-label-outside">City:</label>
                          <select class="form-control" id="city" name="city" required>
                            <option value="">-- Select --</option>
                            @for($i = 0; $i < count(getCities()); $i++)
                            <option value="{{getCities()[$i]}}">{{getCities()[$i]}}</option>
                            @endfor
                          </select>
                        </div>
                      </div>
                      <div class="cell-sm-6 offset-top-17 offset-sm-top-0">
                        <div class="form-group offset-top-15{{ $errors->has('state') ? ' has-error' : '' }}">
                          <label for="state" class="form-label form-label-outside">State:</label>
                          <select class="form-control" id="state" name="state" required>
                            <option value="">-- Select --</option>
                            @for($i = 0; $i < count(getStates()); $i++)
                            <option value="{{getStates()[$i]}}">{{getStates()[$i]}}</option>
                            @endfor
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="range offset-top-10">
                      <div class="cell-sm-12">
                        <div class="form-group offset-top-15{{ $errors->has('school') ? ' has-error' : '' }}">
                          <label for="school" class="form-label form-label-outside">School Address:</label>
                          <input id="school" type="text" name="school" class="form-control bg-white" required>
                          @if ($errors->has('school'))
                          <span class="help-block">
                            <strong>{{ $errors->first('school') }}</strong>
                          </span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <hr>
                    <h3 class="text-colour">Contact</h3>
                    <div class="range offset-top-10">
                      <div class="cell-sm-6">
                        <div class="form-group offset-top-15{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="form-label form-label-outside">Email:</label>
                          <input id="email" type="email" name="email" class="form-control bg-white" required>
                          @if ($errors->has('email'))
                          <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                          </span>
                          @endif
                        </div>
                      </div>
                      <div class="cell-sm-6 offset-top-17 offset-sm-top-0">
                        <div class="form-group offset-top-15{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="password" class="form-label form-label-outside">Password:</label>
                          <input id="password" type="password" name="password" class="form-control bg-white" required>
                          @if ($errors->has('password'))
                          <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                          </span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="range offset-top-10">
                      <div class="cell-sm-6">
                        <div class="form-group offset-top-15">
                          <label for="password-confirm" class="form-label form-label-outside">Confirm Password:</label>
                          <input id="password-confirm" type="password" name="password_confirmation" class="form-control bg-white" required>
                        </div>
                      </div>
                      <div class="cell-sm-6 offset-top-17 offset-sm-top-0">
                        <div class="form-group offset-top-15{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                          <label for="phone_number" class="form-label form-label-outside">Phone Number:</label>
                          <input id="phone_number" type="text" name="phone_number" class="form-control bg-white" required>
                          @if ($errors->has('phone_number'))
                          <span class="help-block">
                            <strong>{{ $errors->first('phone_number') }}</strong>
                          </span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <hr>
                    <h3 class="text-colour">Guardian Information</h3>
                    <div class="range offset-top-17">
                      <div class="cell-sm-6">
                        <div class="form-group{{ $errors->has('parent_name') ? ' has-error' : '' }}">
                          <label for="parent_name" class="form-label form-label-outside">Guardian Name:</label>
                          <input id="parent_name" type="text" name="parent_name" class="form-control bg-white" required>
                          @if ($errors->has('parent_name'))
                          <span class="help-block">
                            <strong>{{ $errors->first('parent_name') }}</strong>
                          </span>
                          @endif
                        </div>
                      </div>
                      <div class="cell-sm-6 offset-top-17 offset-sm-top-0">
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                          <label for="address" class="form-label form-label-outside">Guardian Address:</label>
                          <input id="address" type="text" name="address" class="form-control bg-white" required>
                          @if ($errors->has('address'))
                          <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                          </span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="range offset-top-17">
                      <div class="cell-sm-6">
                        <div class="form-group{{ $errors->has('church') ? ' has-error' : '' }}">
                          <label for="church" class="form-label form-label-outside">Church:</label>
                          <input id="church" type="text" name="church" class="form-control bg-white" required>
                          @if ($errors->has('church'))
                          <span class="help-block">
                            <strong>{{ $errors->first('church') }}</strong>
                          </span>
                          @endif
                        </div>
                      </div>
                      <div class="cell-sm-6 offset-top-17 offset-sm-top-0">
                        <div class="form-group{{ $errors->has('phone_number2') ? ' has-error' : '' }}">
                          <label for="phone_number2" class="form-label form-label-outside">Phone Number:</label>
                          <input id="phone_number2" type="text" name="phone_number2" class="form-control bg-white" required>
                          @if ($errors->has('phone_number2'))
                          <span class="help-block">
                            <strong>{{ $errors->first('phone_number2') }}</strong>
                          </span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="offset-top-20">
                      <button type="submit" class="btn btn-ellipse btn-primary">Register</button>
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
