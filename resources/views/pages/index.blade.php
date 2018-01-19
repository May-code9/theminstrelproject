@extends('layouts.master')
@section('title')
{{ config('app.name') }}
@endsection
@section('content')


@if (session('alert'))
{!! session('alert') !!}
@endif

<!-- Page Content-->
<main class="page-content">
  <section>
    <!-- Swiper-->
    <div data-height="100vh" data-loop="false" data-dragable="false" data-min-height="480px" data-slide-effect="true" class="swiper-container swiper-slider">
      <div class="swiper-wrapper">
        <div data-slide-bg="images/slide-01-1920x810.jpg" style="background-position: 80% center" class="swiper-slide">
          <div class="swiper-slide-caption header-transparent-slide-caption">
            <div class="container">
              <div class="range range-xs-center range-lg-right range-condensed">
                <div class="cell-md-6 text-md-left cell-xs-10">
                  <div data-caption-animate="fadeInUp" data-caption-delay="100" data-caption-duration="1700">
                    <h2 class="text-bold">Scouting, Developing and Mentoring young talents.</h2>
                  </div>
                  <div data-caption-animate="fadeInUp" data-caption-delay="150" data-caption-duration="1700" class="offset-top-20 offset-xs-top-40 offset-xl-top-60">
                    <h4 class="text-regular font-default">{{ config('app.name') }} is an exclusive initiative of a non-government agency known as <br> <strong>NOAH’s 1:1.601 TEENAGE CLUB</strong></h4>
                  </div>
                  <div data-caption-animate="fadeInUp" data-caption-delay="400" data-caption-duration="1700" class="offset-top-20 offset-xl-top-40">
                    @guest
                    <a href="{{ route('register') }}" class="btn btn-madison btn-ellipse">Sign Up</a>
                    @elseif($checkForSerialNumber == 0)
                    <a href="{{ route('minstrelTeller') }}" class="btn btn-madison btn-ellipse">Fill Teller Number</a>
                    @endguest
                    <div class="inset-xs-left-30 reveal-lg-inline-block"><a href="#" class="btn btn-primary-transparent btn-ellipse veil reveal-lg-inline-block">Learn More</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-slide-bg="images/slide-02-1920x810.jpg" style="background-position: 80% center" class="swiper-slide">
          <div class="swiper-slide-caption header-transparent-slide-caption">
            <div class="container">
              <div class="range range-xs-center range-lg-left range-condensed">
                <div class="cell-md-6 text-md-left cell-xs-10">
                  <div data-caption-animate="fadeInUp" data-caption-delay="100" data-caption-duration="1700">
                    <h2 class="text-bold">A Perfect Developing Center for Your Kids.</h2>
                  </div>
                  <div data-caption-animate="fadeInUp" data-caption-delay="150" data-caption-duration="1700" class="offset-top-20 offset-xs-top-40 offset-xl-top-60">
                    <h4 class="text-regular font-default">The success of a child can starts with good exposure. At {{ config('app.name') }}, your children will have the right exposure that will be especially useful for them.</h4>
                  </div>
                  <div data-caption-animate="fadeInUp" data-caption-delay="400" data-caption-duration="1700" class="offset-top-20 offset-xl-top-40">
                    @guest
                    <a href="{{ route('register') }}" class="btn btn-madison btn-ellipse">Sign Up</a>
                    @elseif($checkForSerialNumber == 0)
                    <a href="{{ route('minstrelTeller') }}" class="btn btn-madison btn-ellipse">Fill Teller Number</a>
                    @endguest
                    <div class="inset-xs-left-30 reveal-lg-inline-block"><a href="#" class="btn btn-primary-transparent btn-ellipse veil reveal-lg-inline-block">Learn More</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-slide-bg="images/slide-03-1920x810.jpg" style="background-position: 80% center" class="swiper-slide">
          <div class="swiper-slide-caption header-transparent-slide-caption">
            <div class="container">
              <div class="range range-xs-center range-lg-right range-condensed">
                <div class="cell-md-6 text-md-left cell-xs-10">
                  <div data-caption-animate="fadeInUp" data-caption-delay="100" data-caption-duration="1700">
                    <h2 class="text-bold">We Offer Different Kinds of Activities.</h2>
                  </div>
                  <div data-caption-animate="fadeInUp" data-caption-delay="150" data-caption-duration="1700" class="offset-top-20 offset-xs-top-40 offset-xl-top-60">
                    <h4 class="text-regular font-default">With us, your kid will enjoy plenty of different activities that will develop them and act as a perfect ground for further development. Explore the bright future of your child at {{ config('app.name') }}!</h4>
                  </div>
                  <div data-caption-animate="fadeInUp" data-caption-delay="400" data-caption-duration="1700" class="offset-top-20 offset-xl-top-40"><a href="{{ route('register') }}" class="btn btn-ellipse btn-madison">Sign Up for Excursion</a>
                    <div class="inset-xs-left-30 reveal-lg-inline-block"><a href="academic.php" class="btn btn-ellipse btn-primary-transparent veil reveal-lg-inline-block">Learn More</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Swiper Pagination-->
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <!-- A Few Words About the University-->
  <section class="section-70 section-md-50 bg-index-body">
    <div class="shell">
      <div class="range text-sm-left range-sm-justify" style="margin-bottom: 45px;">
        <div class="cell-sm-7 view-animate fadeInRightSm delay-04">
          <div class="img-wrap-2">
            <figure><span data-toggle="modal" data-target="#myModal" class=""></span><img src="images/home-01-620-350.jpg" width="620" height="350" alt="" class="img-responsive reveal-inline-block"></figure>
          </div>
        </div>
        <div class="cell-sm-5 offset-top-50 offset-sm-top-0">
          <h3 class="home-headings-custom text-bold view-animate fadeInLeftSm delay-06">About {{ config('app.name') }}</h3>
          <div class="offset-top-35 offset-md-top-60 view-animate fadeInLeftSm delay-08">
            <p style="font-size: 17px; text-align: justify">{{ config('app.name') }} is a talent hunt reality tv show property crafted to scout, develop, mentor and reward young talents in the gospel music industry. The talent hunt reality tv show first edition will run for three months, on selected national television channels, the participants must be between the age of 12 -22 years.</p>
          </div>
          <div class="offset-top-30 view-animate fadeInLeftSm delay-1"><a href="#" class="btn btn-ellipse btn-icon btn-icon-right btn-default"><span class="icon fa-arrow-right"></span><span>Learn More</span></a></div>
        </div>
      </div>
    </div>
  </section>
  <!--Our Featured Courses-->
  <!-- <section class="bg-madison section-70 section-md-50 text-center">
    <div class="shell">
      <h2 class="text-bold text-white view-animate fadeInUpSmall delay-04">Our Programs</h2>
      <div class="offset-top-35 offset-md-top-30 text-white view-animate fadeInUpSmall delay-06">Our Featured Programs are selected through a rigorous process and uniquely created for each semester.</div>
      <div class="range range-xs-center offset-top-30 text-sm-left">
        <div class="cell-sm-6 cell-md-3 view-animate fadeInRightSm delay-1">
          <article class="post-news bg-white"><a href="news-post-page.php"><img src="images/home-02-370x240.jpg" width="370" height="240" alt="" class="img-responsive"></a>
            <div class="post-news-body-variant-1">
              <div class="post-news-meta">
                <time datetime="2016" class="text-middle text-italic">June 3, 2016</time>
              </div>
              <h6><a href="news-post-page.php">Arts Programs</a></h6>
              <div class="offset-top-9">
                <p class="text-base">Charles Banks</p>
              </div>
              <div class="offset-top-9">
                <ul class="list-inline list-unstyled list-inline-primary">
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Part time" class="icon icon-xxs fa-hourglass-end"></a></li>
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Certified" class="icon icon-xxs fa-star"></a></li>
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Online Course" class="icon icon-xxs fa-laptop"></a></li>
                </ul>
              </div>
            </div>
          </article>
        </div>
        <div class="cell-sm-6 cell-md-3 view-animate fadeInUpSmall delay-08">
          <article class="post-news bg-white"><a href="news-post-page.php"><img src="images/home-03-370x240.jpg" width="370" height="240" alt="" class="img-responsive"></a>
            <div class="post-news-body-variant-1">
              <div class="post-news-meta">
                <time datetime="2016" class="text-middle text-italic">June 3, 2016</time>
              </div>
              <h6><a href="news-post-page.php">Foreign Language Programs</a></h6>
              <div class="offset-top-9">
                <p class="text-base">Maria Howard</p>
              </div>
              <div class="offset-top-9">
                <ul class="list-inline list-unstyled list-inline-primary">
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Part time" class="icon icon-xxs fa-hourglass-end"></a></li>
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Certified" class="icon icon-xxs fa-star"></a></li>
                </ul>
              </div>
            </div>
          </article>
        </div>
        <div class="cell-sm-6 cell-md-3 view-animate fadeInRightSm delay-08">
          <article class="post-news bg-white"><a href="news-post-page.php"><img src="images/home-03-370x240.jpg" width="370" height="240" alt="" class="img-responsive"></a>
            <div class="post-news-body-variant-1">
              <div class="post-news-meta">
                <time datetime="2016" class="text-middle text-italic">June 3, 2016</time>
              </div>
              <h6><a href="news-post-page.php">Foreign Language Programs</a></h6>
              <div class="offset-top-9">
                <p class="text-base">Maria Howard</p>
              </div>
              <div class="offset-top-9">
                <ul class="list-inline list-unstyled list-inline-primary">
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Part time" class="icon icon-xxs fa-hourglass-end"></a></li>
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Certified" class="icon icon-xxs fa-star"></a></li>
                </ul>
              </div>
            </div>
          </article>
        </div>
        <div class="cell-sm-6 cell-md-3 offset-top-30 offset-md-top-0 view-animate fadeInLeftSm delay-1">
          <article class="post-news bg-white"><a href="news-post-page.php"><img src="images/home-04-370x240.jpg" width="370" height="240" alt="" class="img-responsive"></a>
            <div class="post-news-body-variant-1">
              <div class="post-news-meta">
                <time datetime="2016" class="text-middle text-italic">June 3, 2016</time>
              </div>
              <h6><a href="news-post-page.php">Sports Programs</a></h6>
              <div class="offset-top-9">
                <p class="text-base">Steven Carter</p>
              </div>
              <div class="offset-top-9">
                <ul class="list-inline list-unstyled list-inline-primary">
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Part time" class="icon icon-xxs fa-hourglass-end"></a></li>
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Certified" class="icon icon-xxs fa-star"></a></li>
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Online Course" class="icon icon-xxs fa-laptop"></a></li>
                </ul>
              </div>
            </div>
          </article>
        </div>
      </div>
      <div class="offset-top-35 offset-lg-top-70 view-animate fadeInUpSmall"><a href="{{ route('register') }}" class="btn btn-ellipse btn-primary">View All Programs</a></div>
    </div>
  </section> -->
  <!-- Counters-->
  <!-- <section class="text-center bg-index-body">
    <div class="shell">
      <div class="range range-xs-center range-sm-left offset-top-0">
        <div class="cell-xs-10 cell-sm-7 section-image-aside section-image-aside-right">
          <div style="background-image: url(images/home-01-846x1002.jpg)" class="section-image-aside-img veil reveal-sm-block view-animate zoomInSmall delay-04"></div>
          <div class="section-image-aside-body section-70 section-md-50 inset-md-right-70 inset-lg-right-110">
            <h2 class="home-headings-custom text-bold view-animate fadeInLeftSm delay-04">Our Features</h2>
            <div class="offset-top-35 offset-md-top-30 view-animate fadeInLeftSm delay-06">At Kids Tree, we see our aim in providing care and an early learning environment which is tailored to each individual child’s needs, in safe, secure, happy and relaxed surroundings. We are committed to your children’s success!</div>
            <div class="text-center text-xs-left">
              <div class="range range-xs-center range-md-left offset-top-35 counters">
                <div class="cell-xs-6 view-animate fadeInLeftSm delay-08">

                  <div class="unit unit-xs-horizontal unit-responsive-md counter-type-2">
                    <div class="unit-left"><span class="icon icon-md text-madison fa-graduation-cap"></span></div>
                    <div class="unit-body">
                      <div class="h3 text-bold text-primary"><span data-speed="1300" data-from="0" data-to="15" class="counter"></span><span></span></div>
                      <div class="offset-top-3">
                        <h6 class="text-black font-accent">Awards</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cell-xs-6 offset-top-65 offset-xs-top-0 view-animate fadeInLeftSm delay-04">

                  <div class="unit unit-xs-horizontal unit-responsive-md counter-type-2">
                    <div class="unit-left"><span class="icon icon-md text-madison fa-suitcase"></span></div>
                    <div class="unit-body">
                      <div class="h3 text-bold text-primary"><span data-speed="1250" data-from="0" data-to="30" class="counter"></span><span>+</span></div>
                      <div class="offset-top-3">
                        <h6 class="text-black font-accent">Certified Teachers</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cell-xs-6 offset-top-65 view-animate fadeInLeftSm delay-1">

                  <div class="unit unit-xs-horizontal unit-responsive-md counter-type-2">
                    <div class="unit-left"><span class="icon icon-md text-madison fa-building"></span></div>
                    <div class="unit-body">
                      <div class="h3 text-bold text-primary offset-top-5"><span data-step="500" data-from="0" data-to="10" class="counter"></span></div>
                      <div class="offset-top-3">
                        <h6 class="text-black font-accent">Featured Programs </h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cell-xs-6 offset-top-65 view-animate fadeInLeftSm delay-06">

                  <div class="unit unit-xs-horizontal unit-responsive-md counter-type-2">
                    <div class="unit-left"><span class="icon icon-md text-madison fa-users"></span></div>
                    <div class="unit-body">
                      <div class="h3 text-bold text-primary offset-top-5"><span data-step="1500" data-from="0" data-to="100" class="counter"></span></div>
                      <div class="offset-top-3">
                        <h6 class="text-black font-accent">Children</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- Events-->
  <!-- <section class="bg-catskill">
    <div class="shell-wide section-70 section-md-50">
      <h2 class="text-madison text-bold view-animate fadeInUpSmall delay-04">Events</h2>
      <div class="range offset-top-60 range-xs-center">
        <div class="cell-sm-6 cell-md-5 cell-xl-3">
          <article class="post-event view-animate fadeInLeftSm delay-04 bg-white">
            <div class="post-event-img-overlay"><img src="images/blog/events-05-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
              <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-ellipse btn-primary">Book Now</a>
                <div class="offset-top-20"><a href="event-page.php" class="btn btn-ellipse btn-default">Learn More</a></div>
              </div>
            </div>
            <div class="unit unit-lg unit-lg-horizontal">
              <div class="unit-left">
                <div class="post-event-meta text-center">
                  <div class="h3 text-bold reveal-inline-block reveal-lg-block">31</div>
                  <p class="reveal-inline-block reveal-lg-block">September</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                </div>
              </div>
              <div class="unit-body">
                <div class="post-event-body text-lg-left">
                  <h6><a href="event-page.php">Preschool Dinner</a></h6>
                  <ul class="list-inline list-inline-xs">
                    <li><a href="team-member-profile.php"><span class="icon icon-xxs fa-user text-middle"></span><span class="inset-left-10 text-dark text-middle">Walter Stanley</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
        </div>
        <div class="cell-sm-6 cell-md-5 cell-xl-3 offset-top-50 offset-sm-top-0">
          <article class="post-event view-animate fadeInLeftSm delay-06 bg-white">
            <div class="post-event-img-overlay"><img src="images/blog/events-06-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
              <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-ellipse btn-primary">Book Now</a>
                <div class="offset-top-20"><a href="event-page.php" class="btn btn-ellipse btn-default">Learn More</a></div>
              </div>
            </div>
            <div class="unit unit-lg unit-lg-horizontal">
              <div class="unit-left">
                <div class="post-event-meta text-center">
                  <div class="h3 text-bold reveal-inline-block reveal-lg-block">5</div>
                  <p class="reveal-inline-block reveal-lg-block">July</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                </div>
              </div>
              <div class="unit-body">
                <div class="post-event-body text-lg-left">
                  <h6><a href="event-page.php">Grandparents Day</a></h6>
                  <ul class="list-inline list-inline-xs">
                    <li><a href="team-member-profile.php"><span class="icon icon-xxs fa-user text-middle"></span><span class="inset-left-10 text-dark text-middle">Raymond Salazar</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
        </div>
        <div class="cell-sm-6 cell-md-5 cell-xl-3 offset-top-50 offset-xl-top-0">
          <article class="post-event view-animate fadeInLeftSm delay-08 bg-white">
            <div class="post-event-img-overlay"><img src="images/blog/events-02-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
              <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-ellipse btn-primary">Book Now</a>
                <div class="offset-top-20"><a href="event-page.php" class="btn btn-ellipse btn-default">Learn More</a></div>
              </div>
            </div>
            <div class="unit unit-lg unit-lg-horizontal">
              <div class="unit-left">
                <div class="post-event-meta text-center">
                  <div class="h3 text-bold reveal-inline-block reveal-lg-block">15</div>
                  <p class="reveal-inline-block reveal-lg-block">June</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                </div>
              </div>
              <div class="unit-body">
                <div class="post-event-body text-lg-left">
                  <h6><a href="event-page.php">Family Celebration</a></h6>
                  <ul class="list-inline list-inline-xs">
                    <li><a href="team-member-profile.php"><span class="icon icon-xxs fa-user text-middle"></span><span class="inset-left-10 text-dark text-middle">Bruce Hawkins</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
        </div>
        <div class="cell-sm-6 cell-md-5 cell-xl-3 offset-top-50 offset-xl-top-0">
          <article class="post-event view-animate fadeInLeftSm delay-1 bg-white">
            <div class="post-event-img-overlay"><img src="images/blog/events-09-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
              <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-ellipse btn-primary">Book Now</a>
                <div class="offset-top-20"><a href="event-page.php" class="btn btn-ellipse btn-default">Learn More</a></div>
              </div>
            </div>
            <div class="unit unit-lg unit-lg-horizontal">
              <div class="unit-left">
                <div class="post-event-meta text-center">
                  <div class="h3 text-bold reveal-inline-block reveal-lg-block">5</div>
                  <p class="reveal-inline-block reveal-lg-block">June</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                </div>
              </div>
              <div class="unit-body">
                <div class="post-event-body text-lg-left">
                  <h6><a href="event-page.php">Summer Drawing Contest</a></h6>
                  <ul class="list-inline list-inline-xs">
                    <li><a href="team-member-profile.php"><span class="icon icon-xxs fa-user text-middle"></span><span class="inset-left-10 text-dark text-middle">Danielle Garza</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
      <div class="offset-top-50 offset-lg-top-56 view-animate fadeInUpSmall"><a href="calendar.php" class="btn btn-ellipse btn-icon btn-icon-right btn-primary"><span class="icon fa-arrow-right"></span><span>View Event Calendar</span></a></div>
    </div>
  </section> -->
  <!-- Testimonials-->
  <section class="context-dark position-relative">
    <!-- RD Parallax-->
    <div data-on="false" data-md-on="true" class="rd-parallax">
      <div data-speed="0.2" data-type="media" data-url="images/parallax-01.jpg" class="rd-parallax-layer"></div>
      <div data-speed="0.05" data-type="html" class="rd-parallax-layer">
        <div class="shell section-70 section-xl-100 section-xl-bottom-114">
          <div data-items="1" data-sm-items="2" data-nav="true" data-dots="true" data-margin="30" data-loop="true" data-nav-class="[&quot;owl-prev fa-angle-left&quot;, &quot;owl-next fa-angle-right&quot;]" class="owl-carousel owl-carousel-default veil-xl-owl-dots veil-owl-nav reveal-xl-owl-nav">
            <div>
              <div class="quote-classic-boxed text-left">
                <div class="quote-body just">
                  <q class="">Words truly can't express how delighted I am that a talent show like this exists. I thought that an idea like this was a mythical unicorn that would never be.</q>
                  <div class="offset-top-30 text-left">
                    <div class="unit unit-horizontal">
                      <div class="unit-left"><img src="images/users/afy-douglas-230x230.png" width="80" height="80" alt="" class="img-responsive reveal-inline-block img-circle"></div>
                      <div class="unit-body">
                        <cite class="font-accent">Afy Douglas</cite>
                        <div class="offset-top-5">
                          <p class="text-dark text-italic">Project Manager</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div>
              <div class="quote-classic-boxed text-left">
                <div class="quote-body">
                  <q> I want to take this opportunity to thank you and your staff for all you have done for my daughter. I am in awe at how much Lauren has grown both emotionally and intellectually since last year.</q>
                  <div class="offset-top-30 text-left">
                    <div class="unit unit-horizontal">
                      <div class="unit-left"><img src="images/users/user-steven-alvarez-230x230.jpg" width="80" height="80" alt="" class="img-responsive reveal-inline-block img-circle"></div>
                      <div class="unit-body">
                        <cite class="font-accent">Steven Alvarez</cite>
                        <div class="offset-top-5">
                          <p class="text-dark text-italic">Taxi driver</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="quote-classic-boxed text-left">
                <div class="quote-body">
                  <q>Words truly can't express how grateful I am that a preschool like this exists. I thought that a place like this was a mythical unicorn that parents searched for, but never found.</q>
                  <div class="offset-top-30 text-left">
                    <div class="unit unit-horizontal">
                      <div class="unit-left"><img src="images/users/user-debra-banks-230x230.jpg" width="80" height="80" alt="" class="img-responsive reveal-inline-block img-circle"></div>
                      <div class="unit-body">
                        <cite class="font-accent">Debra Banks</cite>
                        <div class="offset-top-5">
                          <p class="text-dark text-italic">Sales manager</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="quote-classic-boxed text-left">
                <div class="quote-body">
                  <q> I want to take this opportunity to thank you and your staff for all you have done for my daughter. I am in awe at how much Lauren has grown both emotionally and intellectually since last year.</q>
                  <div class="offset-top-30 text-left">
                    <div class="unit unit-horizontal">
                      <div class="unit-left"><img src="images/users/user-steven-alvarez-230x230.jpg" width="80" height="80" alt="" class="img-responsive reveal-inline-block img-circle"></div>
                      <div class="unit-body">
                        <cite class="font-accent">Steven Alvarez</cite>
                        <div class="offset-top-5">
                          <p class="text-dark text-italic">Taxi driver</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Latest news-->
  <!-- <section class="bg-catskill">
    <div class="shell-wide section-70 section-md-114">
      <h2 class="home-headings-custom text-bold view-animate fadeInUpSmall delay-06">Latest News</h2>
      <div class="range offset-top-60 text-left range-xs-center">
        <div class="cell-sm-6 cell-md-3">
          <article class="post-news post-news-mod-1 view-animate fadeInLeftSm delay-04"><a href="news-post-page.php"><img src="images/blog/news-04-420x270.jpg" width="370" height="240" alt="" class="img-responsive img-fullwidth"></a>
            <div class="post-news-body">
              <h6><a href="news-post-page.php">Mother’s Day</a></h6>
              <div class="offset-top-20">
                <p>Mother’s Day is a celebration honoring the mother of the family, as well as motherhood, maternal bonds, and the influence of mothers in society.</p>
              </div>
              <div class="post-news-meta offset-top-20"><span class="icon icon-xs fa-calendar-o text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>
            </div>
          </article>
        </div>
        <div class="cell-sm-6 cell-md-3 offset-top-30 offset-sm-top-0">
          <article class="post-news post-news-mod-1 view-animate fadeInLeftSm delay-06"><a href="news-post-page.php"><img src="images/blog/news-03-420x270.jpg" width="370" height="240" alt="" class="img-responsive img-fullwidth"></a>
            <div class="post-news-body">
              <h6><a href="news-post-page.php">Painting Class</a></h6>
              <div class="offset-top-20">
                <p>In our kids' painting classes, we guarantee the best personalized instruction and one-on-one guidance for every single child who walks through our door.</p>
              </div>
              <div class="post-news-meta offset-top-20"><span class="icon icon-xs fa-calendar-o text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>
            </div>
          </article>
        </div>
        <div class="cell-sm-6 cell-md-3 offset-top-30 offset-md-top-0">
          <article class="post-news post-news-mod-1 view-animate fadeInLeftSm delay-08"><a href="news-post-page.php"><img src="images/blog/news-08-420x270.jpg" width="370" height="240" alt="" class="img-responsive img-fullwidth"></a>
            <div class="post-news-body">
              <h6><a href="news-post-page.php">Our New Teacher</a></h6>
              <div class="offset-top-20">
                <p>We are glad to welcome Mary Johnson, our new teacher. She now teaches the class of 5 children aged up to 7 years old at Kids Tree Preschool.</p>
              </div>
              <div class="post-news-meta offset-top-20"><span class="icon icon-xs fa-calendar-o text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>
            </div>
          </article>
        </div>
        <div class="cell-sm-6 cell-md-3 offset-top-30 offset-md-top-0">
          <article class="post-news post-news-mod-1 view-animate fadeInLeftSm delay-1"><a href="news-post-page.php"><img src="images/blog/news-09-420x270.jpg" width="370" height="240" alt="" class="img-responsive img-fullwidth"></a>
            <div class="post-news-body">
              <h6><a href="news-post-page.php">We Integrate Creativity</a></h6>
              <div class="offset-top-20">
                <p>All children need to be truly creative is the freedom to commit themselves completely to the effort and make whatever activity they are doing their own.</p>
              </div>
              <div class="post-news-meta offset-top-20"><span class="icon icon-xs fa-calendar-o text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>
            </div>
          </article>
        </div>
      </div>
      <div class="offset-top-50 view-animate fadeInUpSmall"><a href="modern-news.php" class="btn btn-ellipse btn-primary">View All News Posts</a></div>
    </div>
  </section> -->
  <!-- Gallery-->
  <!-- <section>
    <div data-items="1" data-xs-items="2" data-sm-items="3" data-lg-items="4" data-xl-items="6" data-nav="false" data-dots="false" data-mouse-drag="true" data-photo-swipe-gallery="" data-flickr-tags="tm-61183" data-stage-padding="0" data-xl-stage-padding="0" class="owl-carousel flickr"><a data-photo-swipe-item="" href="" data-image_c="href" data-size="320x320" data-type="flickr-item" class="thumbnail-default thumbnail-flickr"><img width="320" height="320" data-title="alt" src="images/_blank.png" alt="" data-image_z="src"><span class="icon fa-search-plus"></span></a><a data-photo-swipe-item="" href="" data-image_c="href" data-size="320x320" data-type="flickr-item" class="thumbnail-default thumbnail-flickr"><img width="320" height="320" data-title="alt" src="images/_blank.png" alt="" data-image_z="src"><span class="icon fa-search-plus"></span></a><a data-photo-swipe-item="" href="" data-image_c="href" data-size="320x320" data-type="flickr-item" class="thumbnail-default thumbnail-flickr"><img width="320" height="320" data-title="alt" src="images/_blank.png" alt="" data-image_z="src"><span class="icon fa-search-plus"></span></a><a data-photo-swipe-item="" href="" data-image_c="href" data-size="320x320" data-type="flickr-item" class="thumbnail-default thumbnail-flickr"><img width="320" height="320" data-title="alt" src="images/_blank.png" alt="" data-image_z="src"><span class="icon fa-search-plus"></span></a><a data-photo-swipe-item="" href="" data-image_c="href" data-size="320x320" data-type="flickr-item" class="thumbnail-default thumbnail-flickr"><img width="320" height="320" data-title="alt" src="images/_blank.png" alt="" data-image_z="src"><span class="icon fa-search-plus"></span></a><a data-photo-swipe-item="" href="" data-image_c="href" data-size="320x320" data-type="flickr-item" class="thumbnail-default thumbnail-flickr"><img width="320" height="320" data-title="alt" src="images/_blank.png" alt="" data-image_z="src"><span class="icon fa-search-plus"></span></a></div>
  </section> -->
  <!-- Contact info-->
  <section class="section-60">
    <div class="shell">
      <div class="range range-xs-center features-list">
        <div class="cell-sm-4">
          <div class="unit unit-vertical unit-responsive-md section-45">
            <div class="unit-left"><span class="icon icon-contact-sm text-madison fa-phone"></span></div>
            <div class="unit-body"><a href="callto:#" class="h6 text-regular text-colour">08119055551</a></div>
            <div class="unit-body"><a href="callto:#" class="h6 text-regular text-colour">07066803471</a></div>
          </div>
        </div>
        <div class="cell-sm-4">
          <div class="unit unit-vertical unit-responsive-md section-45">
            <div class="unit-left"><span class="icon icon-contact-sm text-madison fa-map-marker"></span></div>
            <div class="unit-body"><a href="#" class="h6 text-regular text-colour">Port Harcourt <br class="visible-lg-inline"> Rivers State</a></div>
          </div>
        </div>
        <div class="cell-sm-4">
          <div class="unit unit-vertical unit-responsive-md section-45">
            <div class="unit-left"><span class="icon icon-contact-sm text-madison fa-envelope-o"></span></div>
            <div class="unit-body"><a href="mailto:#" class="h6 text-regular text-colour">contact@theminstrelproject.org</a></div>
            <div class="unit-body"><a href="mailto:#" class="h6 text-regular text-colour">info@theminstrelproject.org</a></div>
            <div class="unit-body"><a href="mailto:#" class="h6 text-regular text-colour">marketing@theminstrelproject.org</a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Google map-->
  <section>
    <!-- RD Google Map-->
    <div class="rd-google-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127221.86632073516!2d6.963504972442749!3d4.824332623180287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cea39f2c48e3%3A0x53562bdd7d8832db!2sPort+Harcourt!5e0!3m2!1sen!2sng!4v1516373256193" width="1900" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
      <!-- <ul class="rd-google-map__locations">
        <li data-x="-73.9874068" data-y="40.643180">
          <p>9870 St Vincent Place, Glasgow</p>
        </li>
      </ul> -->
    </div>
  </section>
</main>
@endsection
