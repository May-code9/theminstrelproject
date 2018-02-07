@extends('layouts.master')
@section('title')
Video | {{ config('app.name') }}
@endsection

@section('content')
<!-- Page Content-->
<main class="page-content section-70 section-md-114">
  <div class="shell-wide">
    <div class="hr bg-gray-light"></div>
  </div>
  <!-- Portfolio Grid-->
  <section class="bg-catskill">
    <div class="shell-wide section-70">
      <h2 class="text-madison text-bold view-animate fadeInUpSmall delay-04">{{ config('app.name') }} Videos</h2>
      <div class="range offset-top-60 range-xs-center">
        @forelse($videouploads as $videoupload)
        <div class="cell-sm-6 cell-md-4 cell-xl-3 offset-top-50 offset-sm-top-20">
          <article class="post-event view-animate fadeInLeftSm delay-06 bg-white">
              <iframe src="{{ $videoupload->link }}" width="420" height="420" alt="" class="img-responsive" frameborder="0" allowfullscreen >
            </iframe>
            <div class="unit unit-lg unit-lg-horizontal">
              <div class="unit-left">
                <div class="post-event-meta text-center">
                  <div class="h3 text-bold reveal-inline-block reveal-lg-block">{{ $videoupload->Day }}</div>
                  <p class="reveal-inline-block reveal-lg-block">{{ $videoupload->Month }}</p>
                </div>
              </div>
              <div class="unit-body">
                <div class="post-event-body text-lg-left">
                  <h6><a href="event-page.php">{{ $videoupload->video_title }}</a></h6>

                </div>
              </div>
            </div>
          </article>
        </div>
        @empty
        <h1 style="text-align:center; color:black">No Video Uploads Yet</h1>
        @endforelse
      </div>
      <!-- <div class="offset-top-50 offset-lg-top-56 view-animate fadeInUpSmall"><a href="calendar.php" class="btn btn-ellipse btn-icon btn-icon-right btn-primary"><span class="icon fa-arrow-right"></span><span>View Event Calendar</span></a></div> -->
    </div>
    <div style="font-size:20px">
      {{ $videouploads->links() }}
    </div>
  </section>
</main>
<!-- Page Footer-->
@endsection
