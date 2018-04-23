@extends('layouts.master')
@section('title')
Contact | {{ config('app.name') }}
@endsection
@section('content')
<main class="page-content section-70 section-md-114">
  <div class="shell-wide">
    <div class="hr bg-gray-light"></div>
  </div>
  <section class="section-70 section-md-114">
    <div class="shell">
      <div class="range range-xs-center">
        <div class="cell-xs-10 cell-md-8 text-md-left">
          <h2 class="text-bold text-colour">Get in Touch</h2>
          <div class="hr-sm-left-0"></div>
          <div class="offset-top-30 offset-md-top-60" style="color:black">
            <p>You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit our office personally. We would be happy to answer your questions.</p>
          </div>
          <div class="offset-top-30">
            @if(Session::has('success_status'))
              <div class="alert alert-success">{{ Session::get('success_status') }}</div>
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
              <li><a href="#" class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled"></a></li>
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
                  <li><span class="icon icon-xs text-madison fa fa-phone text-middle"></span><a href="callto:1-800-1234-567" class="text-middle inset-left-10 text-dark">1-800-1234-567</a></li>
                  <li><span class="icon icon-xs text-madison fa fa-phone text-middle"></span><a href="callto:1-800-6547-321" class="text-middle inset-left-10 text-dark">1-800-6547-321</a></li>
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
                  <li><span class="icon icon-xs text-madison fa fa-envelope-o text-middle"></span><a href="mailto:info@demolink.org" class="text-primary text-middle inset-left-10">info@demolink.org</a></li>
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
                    <p><a href="#" class="text-dark">2130 Fulton Street San Diego, CA 94117-1080 USA</a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="offset-top-30 offset-md-top-65">
              <h6 class="text-bold text-colour">Opening Hours</h6>
              <div>
                <div class="hr bg-gray-light offset-top-10"></div>
              </div>
              <div class="offset-top-15">
                <div class="unit unit-horizontal unit-spacing-xs">
                  <div class="unit-left"><span class="icon icon-xs fa fa-calendar-o text-madison"></span></div>
                  <div class="unit-body">
                    <div>
                      <p>Mon-Fri: 8:00am-8:00pm</p>
                    </div>
                    <div>
                      <p>Sat: 8:00am-3:00pm</p>
                    </div>
                    <div>
                      <p>Sun: Closed</p>
                    </div>
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
      <div id="rd-google-map" data-zoom="14" data-x="-73.9874068" data-y="40.643180" data-styles='[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#b4d4e1"},{"visibility":"on"}]}]' class="rd-google-map__model"></div>
      <ul class="rd-google-map__locations">
        <li data-x="-73.9874068" data-y="40.643180">
          <p>9870 St Vincent Place, Glasgow</p>
        </li>
      </ul>
    </div>
  </section>
</main>
<!-- Page Footer-->
@endsection
