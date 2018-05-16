@extends('layouts.master')
@section('title')
Contact | {{ config('app.name') }}
@endsection
@section('content')
<main class="page-content section-70 section-md-114">
  <div class="shell-wide">
    <div class="hr bg-gray-light"></div>
  </div>
  <section class="section-50">
    <div class="shell">
      <div class="range range-xs-center">
        <div class="cell-xs-10 cell-md-8 text-md-left">
          <h2 class="text-bold text-colour">Get in Touch</h2>
          <div class="hr-sm-left-0"></div>
          <div class="offset-top-30 offset-md-top-60" style="color:black">
            <p>You can contact us in any way convenient for you. We are available 24/7 via email or call. You can also use a quick contact form below. We would be happy to answer your questions.</p>
          </div>
          <div class="offset-top-30">
            @if(Session::has('success_status'))
              <div class="alert alert-success">{{ Session::get('success_status') }}</div>
            @elseif(Session::has('failure_status'))
              <div class="alert alert-danger">{{ Session::get('failure_status') }}</div>
            @else
            <form  method="post" action="{{ route('contact.store') }}" class="text-left">
              {{ csrf_field() }}
              <div class="range">
                <div class="cell-lg-6">
                  <div class="form-group">
                    <label  class="form-label form-label-outside">First name</label>
                    <input id="first_name" type="text" name="first_name" required class="form-control">
                  </div>
                </div>
                <div class="cell-lg-6 offset-top-12 offset-lg-top-0">
                  <div class="form-group">
                    <label class="form-label form-label-outside">Last name</label>
                    <input id="last_name" type="text" name="last_name" required class="form-control">
                  </div>
                </div>
                <div class="cell-lg-6 offset-top-12">
                  <div class="form-group">
                    <label  class="form-label form-label-outside">E-mail</label>
                    <input id="email" type="email" name="email" required class="form-control">
                  </div>
                </div>
                <div class="cell-lg-6 offset-top-12">
                  <div class="form-group">
                    <label  class="form-label form-label-outside">Phone</label>
                    <input id="phone_number" type="text" name="phone_number" required class="form-control">
                  </div>
                </div>
                <div class="cell-lg-12 offset-top-12">
                  <div class="form-group">
                    <label class="form-label form-label-outside">Message</label>
                    <textarea id="message" name="message" required style="height: 220px" class="form-control"></textarea>
                  </div>
                </div>
              </div>
              <div class="text-center text-lg-left offset-top-20">
                <button type="submit" class="btn btn-ellipse btn-primary">Send Message</button>
              </div>
            </form>
            @endif
          </div>
        </div>
        <div class="cell-xs-10 cell-md-4 offset-top-65 offset-md-top-0 text-left">
          <div class="inset-md-left-30">
            <h6 class="text-bold">Socials</h6>
            <div class="hr bg-gray-light offset-top-10"></div>
            <ul class="list-inline list-inline-xs list-inline-madison">
              <li><a href="https://www.facebook.com/Theminstrelproject" target="_blank" class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled"></a></li>
              <li><a href="#" class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled"></a></li>
              <li><a href="#" class="icon icon-xxs fa-google icon-circle icon-gray-light-filled"></a></li>
              <li><a href="#" class="icon icon-xxs fa-instagram icon-circle icon-gray-light-filled"></a></li>
            </ul>
            <div class="offset-top-30 offset-md-top-60">
              <h6 class="text-bold text-colour">Phones</h6>
              <div>
                <div class="hr bg-gray-light offset-top-10"></div>
              </div>
              <div class="offset-top-15">
                <ul class="list list-unstyled">
                  <li><span class="icon icon-xs text-madison fa fa-phone text-middle"></span><a href="callto:1-800-1234-567" class="text-middle inset-left-10 text-dark">08119055551</a></li>
                  <li><span class="icon icon-xs text-madison fa fa-phone text-middle"></span><a href="callto:1-800-6547-321" class="text-middle inset-left-10 text-dark">07066803471</a></li>
                </ul>
              </div>
            </div>
            <div class="offset-top-30 offset-md-top-60">
              <h6 class="text-bold text-colour">E-mail</h6>
              <div>
                <div class="hr bg-gray-light offset-top-10"></div>
              </div>
              <div class="offset-top-15">
                <ul class="list list-unstyled">
                  <li><span class="icon icon-xs text-madison fa fa-envelope-o text-middle"></span><a href="mailto:contact@theminstrelproject.org" class="text-primary text-middle inset-left-10">contact@theminstrelproject.org</a></li>
                  <li><span class="icon icon-xs text-madison fa fa-envelope-o text-middle"></span><a href="mailto:info@theminstrelproject.org" class="text-primary text-middle inset-left-10">info@theminstrelproject.org</a></li>
                  <li><span class="icon icon-xs text-madison fa fa-envelope-o text-middle"></span><a href="mailto:marketing@theminstrelproject.org" class="text-primary text-middle inset-left-10">marketing@theminstrelproject.org</a></li>
                </ul>
              </div>
            </div>
            <div class="offset-top-30 offset-md-top-60">
              <h6 class="text-bold text-colour">Address</h6>
              <div>
                <div class="hr bg-gray-light offset-top-10"></div>
              </div>
              <div class="offset-top-15">
                <div class="unit unit-horizontal unit-spacing-xs">
                  <div class="unit-left"><span class="icon icon-xs fa fa-map-marker text-madison"></span></div>
                  <div class="unit-body">
                    <p><a href="#" class="text-dark">Port Harcourt, Rivers State, Nigeria</a></p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-madison">
    <!-- RD Google Map-->
    <div class="rd-google-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d127221.86632073596!2d6.963504972442756!3d4.824332623180291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1516873046242" width="1900" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </section>
</main>
<!-- Page Footer-->
@endsection
