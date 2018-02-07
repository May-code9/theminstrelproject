@extends('layouts.master')
@section('title')
Gallery | {{ config('app.name') }}
@endsection

@section('content')
<!-- Page Content-->
<main class="page-content section-70 section-md-114">
  <div class="shell-wide">
    <div class="hr bg-gray-light"></div>
  </div>
  <!-- Portfolio Grid-->
  <section style="margin-top: 30px; margin-bottom:30px">
    <div class="shell">
      <h2 class="text-colour">{{ config('app.name') }} Images</h2>
      <div class="offset-top-60">
        <div data-photo-swipe-gallery="gallery" class="range range-xs-center range-lg-condensed">
          @forelse($galleries as $gallery)
          <div class="cell-xs-10 cell-sm-6 cell-md-3 offset-top-30 offset-lg-top-0">
            <figure class="thumbnail-classic">
              <div class="thumbnail-classic-img-wrap"><img width="370" height="370" src="{{ asset('images/gallery/' . $gallery->mini_image) }}" alt=""/><a class="gallery-link-mobile veil-lg" data-photo-swipe-item="" data-size="1200x800" href="{{ asset('images/gallery/' . $gallery->large_image) }}"></a></div>
              <figcaption class="thumbnail-classic-caption text-center">
                <div>
                  <h4 class="thumbnail-classic-title">{{ $gallery->image_title }}</h4>
                </div>
                <hr class="divider divider-sm"/>
                <p>{{ $gallery->image_text }}</p>
                <div class="offset-top-20 veil reveal-lg-block"><a class="icon icon-xxs fa-search-plus" data-photo-swipe-item="" data-size="1200x800" href="{{ asset('images/gallery/' . $gallery->large_image) }}"></a></div>
              </figcaption>
            </figure>
          </div>
          @empty
          <h1 class="text-colour">No Images Yet</h1>
          @endforelse
        </div>
      </div>
    </div>
  </section>
  <div style="font-size:20px">
    {{ $galleries->links() }}
  </div>
</main>
<!-- Page Footer-->
@endsection
