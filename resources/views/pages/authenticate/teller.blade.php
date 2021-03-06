@extends('layouts.master')
@section('title')
Teller Number | {{ config('app.name') }}
@endsection

@section('content')
<main class="page-content section-70 section-md-114">
  <div class="shell-wide">
    <div class="hr bg-gray-light"></div>
  </div>
  <section class="offset-top-85">
    <div class="shell">
      <div class="range range-xs-center">
        <div class="cell-xs-10 cell-lg-12">
          <!-- Responsive-tabs-->
          <div data-type="vertical" class="responsive-tabs responsive-tabs-classic vertical">
            <ul data-group="tabs-group-default" class="resp-tabs-list tabs-1 text-center tabs-group-default">
              <li>Registration Fee</li>
              <li>Account Details</li>
            </ul>
            <div data-group="tabs-group-default" class="resp-tabs-container text-sm-left tabs-group-default">
              <div>
                <div class="inset-lg-left-30">
                  <p>To Complete Registration, you will be required to pay 1000, (click Account Details Tab for more Information) then text your teller number to <strong>08119055551 or 07066803471</strong>. Finally, Input your bank Teller number in the box below</p>
                </div>
              </div>
              <div>
                <div class="inset-lg-left-30">
                  <table class="table table-custom table-fixed table-hover-rows table-product">
                    <tbody>
                      <tr>
                        <td>Bank Name</td>
                        <td>FCMB</td>
                      </tr>
                      <tr>
                        <td>Account Name</td>
                        <td>Noah's 1.1.601 Teenage Club Minstrel Project</td>
                      </tr>
                      <tr>
                        <td>Account Number</td>
                        <td>5045801011</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr>

  <!--Section Login Register-->
  <section class="section-98 section-sm-110 section-bottom-66" style="margin-top: 30px">
    <div class="shell">
      <div class="range range-xs-center section-34">
        <div class="cell-xs-8 cell-sm-6 cell-md-4">
          <h2 class="text-bold text-colour">Submit Teller Number</h2>
          <div class="offset-sm-top-45 text-center">
            <!-- Responsive-tabs-->
            <div data-type="horizontal" class="responsive-tabs responsive-tabs-classic horizontal">
              <ul data-group="tabs-group-default" class="resp-tabs-list tabs-1 text-center tabs-group-default">
                <li>Teller Number</li>
              </ul>
              <div data-group="tabs-group-default" class="resp-tabs-container text-sm-left tabs-group-default">
                <div>
                  <!-- RD Mailform-->
                  <form method="post" action="{{ route('minstrelSubmitTeller') }}" class="text-left">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                      <label for="first_name" class="form-label form-label-outside">Your Name:</label>
                      <input id="first_name" type="text" name="first_name" class="form-control bg-white" value="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}" disabled>
                    </div>
                    <div class="form-group offset-top-15{{ $errors->has('teller_no') ? ' has-error' : '' }}">
                      <label for="teller_no" class="form-label form-label-outside">Teller Number:</label>
                      <input id="teller_no" type="teller_no" name="teller_no" class="form-control bg-white" required>
                      @if ($errors->has('teller_no'))
                      <span class="help-block">
                        <strong>{{ $errors->first('teller_no') }}</strong>
                      </span>
                      @endif
                    </div>
                    <div class="offset-top-20">
                      <button type="submit" class="btn btn-ellipse btn-primary reveal-block reveal-lg-inline-block">Submit</button><span class="inset-lg-left-20 text-middle small reveal-inline-block offset-top-20 offset-lg-top-0">or enter with</span>
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
