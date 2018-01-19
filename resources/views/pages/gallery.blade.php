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
  <section style="margin-top: 30px">
    <div class="shell">
      <h2>Grid Without Padding Gallery</h2>
      <div class="offset-top-60">
        <div data-photo-swipe-gallery="gallery" class="range range-xs-center range-lg-condensed">
          <div class="cell-xs-10 cell-sm-6 cell-md-3">
            <figure class="thumbnail-classic">
              <div class="thumbnail-classic-img-wrap"><img width="370" height="370" src="images/portfolio/gallery-01-370x370.jpg" alt=""/><a class="gallery-link-mobile veil-lg" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-01-1200x800_original.jpg"></a></div>
              <figcaption class="thumbnail-classic-caption text-center">
                <div>
                  <h4 class="thumbnail-classic-title">Photo #1</h4>
                </div>
                <hr class="divider divider-sm"/>
                <p>We believe education is not a one-size-fits-all experience. Every child has different needs.</p>
                <div class="offset-top-20 veil reveal-lg-block"><a class="icon icon-xxs fa-search-plus" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-01-1200x800_original.jpg"></a></div>
              </figcaption>
            </figure>
          </div>
          <div class="cell-xs-10 cell-sm-6 cell-md-3 offset-top-30 offset-sm-top-0">
            <figure class="thumbnail-classic">
              <div class="thumbnail-classic-img-wrap"><img width="370" height="370" src="images/portfolio/gallery-02-370x370.jpg" alt=""/><a class="gallery-link-mobile veil-lg" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-02-1200x800_original.jpg"></a></div>
              <figcaption class="thumbnail-classic-caption text-center">
                <div>
                  <h4 class="thumbnail-classic-title">Photo #2</h4>
                </div>
                <hr class="divider divider-sm"/>
                <p>We believe education is not a one-size-fits-all experience. Every child has different needs.</p>
                <div class="offset-top-20 veil reveal-lg-block"><a class="icon icon-xxs fa-search-plus" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-02-1200x800_original.jpg"></a></div>
              </figcaption>
            </figure>
          </div>
          <div class="cell-xs-10 cell-sm-6 cell-md-3 offset-top-30 offset-md-top-0">
            <figure class="thumbnail-classic">
              <div class="thumbnail-classic-img-wrap"><img width="370" height="370" src="images/portfolio/gallery-03-370x370.jpg" alt=""/><a class="gallery-link-mobile veil-lg" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-03-1200x800_original.jpg"></a></div>
              <figcaption class="thumbnail-classic-caption text-center">
                <div>
                  <h4 class="thumbnail-classic-title">Photo #3</h4>
                </div>
                <hr class="divider divider-sm"/>
                <p>We believe education is not a one-size-fits-all experience. Every child has different needs.</p>
                <div class="offset-top-20 veil reveal-lg-block"><a class="icon icon-xxs fa-search-plus" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-03-1200x800_original.jpg"></a></div>
              </figcaption>
            </figure>
          </div>
          <div class="cell-xs-10 cell-sm-6 cell-md-3 offset-top-30 offset-lg-top-0">
            <figure class="thumbnail-classic">
              <div class="thumbnail-classic-img-wrap"><img width="370" height="370" src="images/portfolio/gallery-04-370x370.jpg" alt=""/><a class="gallery-link-mobile veil-lg" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-04-1200x800_original.jpg"></a></div>
              <figcaption class="thumbnail-classic-caption text-center">
                <div>
                  <h4 class="thumbnail-classic-title">Photo #4</h4>
                </div>
                <hr class="divider divider-sm"/>
                <p>We believe education is not a one-size-fits-all experience. Every child has different needs.</p>
                <div class="offset-top-20 veil reveal-lg-block"><a class="icon icon-xxs fa-search-plus" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-04-1200x800_original.jpg"></a></div>
              </figcaption>
            </figure>
          </div>
          <div class="cell-xs-10 cell-sm-6 cell-md-3 offset-top-30 offset-lg-top-0">
            <figure class="thumbnail-classic">
              <div class="thumbnail-classic-img-wrap"><img width="370" height="370" src="images/portfolio/gallery-05-370x370.jpg" alt=""/><a class="gallery-link-mobile veil-lg" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-05-1200x800_original.jpg"></a></div>
              <figcaption class="thumbnail-classic-caption text-center">
                <div>
                  <h4 class="thumbnail-classic-title">Photo #5</h4>
                </div>
                <hr class="divider divider-sm"/>
                <p>We believe education is not a one-size-fits-all experience. Every child has different needs.</p>
                <div class="offset-top-20 veil reveal-lg-block"><a class="icon icon-xxs fa-search-plus" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-05-1200x800_original.jpg"></a></div>
              </figcaption>
            </figure>
          </div>
          <div class="cell-xs-10 cell-sm-6 cell-md-3 offset-top-30 offset-lg-top-0">
            <figure class="thumbnail-classic">
              <div class="thumbnail-classic-img-wrap"><img width="370" height="370" src="images/portfolio/gallery-06-370x370.jpg" alt=""/><a class="gallery-link-mobile veil-lg" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-06-1200x800_original.jpg"></a></div>
              <figcaption class="thumbnail-classic-caption text-center">
                <div>
                  <h4 class="thumbnail-classic-title">Photo #6</h4>
                </div>
                <hr class="divider divider-sm"/>
                <p>We believe education is not a one-size-fits-all experience. Every child has different needs.</p>
                <div class="offset-top-20 veil reveal-lg-block"><a class="icon icon-xxs fa-search-plus" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-06-1200x800_original.jpg"></a></div>
              </figcaption>
            </figure>
          </div>
          <div class="cell-xs-10 cell-sm-6 cell-md-3 offset-top-30 offset-lg-top-0">
            <figure class="thumbnail-classic">
              <div class="thumbnail-classic-img-wrap"><img width="370" height="370" src="images/portfolio/gallery-07-370x370.jpg" alt=""/><a class="gallery-link-mobile veil-lg" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-07-1200x800_original.jpg"></a></div>
              <figcaption class="thumbnail-classic-caption text-center">
                <div>
                  <h4 class="thumbnail-classic-title">Photo #7</h4>
                </div>
                <hr class="divider divider-sm"/>
                <p>We believe education is not a one-size-fits-all experience. Every child has different needs.</p>
                <div class="offset-top-20 veil reveal-lg-block"><a class="icon icon-xxs fa-search-plus" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-07-1200x800_original.jpg"></a></div>
              </figcaption>
            </figure>
          </div>
          <div class="cell-xs-10 cell-sm-6 cell-md-3 offset-top-30 offset-lg-top-0">
            <figure class="thumbnail-classic">
              <div class="thumbnail-classic-img-wrap"><img width="370" height="370" src="images/portfolio/gallery-08-370x370.jpg" alt=""/><a class="gallery-link-mobile veil-lg" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-08-1200x800_original.jpg"></a></div>
              <figcaption class="thumbnail-classic-caption text-center">
                <div>
                  <h4 class="thumbnail-classic-title">Photo #8</h4>
                </div>
                <hr class="divider divider-sm"/>
                <p>We believe education is not a one-size-fits-all experience. Every child has different needs.</p>
                <div class="offset-top-20 veil reveal-lg-block"><a class="icon icon-xxs fa-search-plus" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-08-1200x800_original.jpg"></a></div>
              </figcaption>
            </figure>
          </div>
          <div class="cell-xs-10 cell-sm-6 cell-md-3 offset-top-30 offset-lg-top-0">
            <figure class="thumbnail-classic">
              <div class="thumbnail-classic-img-wrap"><img width="370" height="370" src="images/portfolio/gallery-09-370x370.jpg" alt=""/><a class="gallery-link-mobile veil-lg" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-09-1200x800_original.jpg"></a></div>
              <figcaption class="thumbnail-classic-caption text-center">
                <div>
                  <h4 class="thumbnail-classic-title">Photo #9</h4>
                </div>
                <hr class="divider divider-sm"/>
                <p>We believe education is not a one-size-fits-all experience. Every child has different needs.</p>
                <div class="offset-top-20 veil reveal-lg-block"><a class="icon icon-xxs fa-search-plus" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-09-1200x800_original.jpg"></a></div>
              </figcaption>
            </figure>
          </div>
          <div class="cell-xs-10 cell-sm-6 cell-md-3 offset-top-30 offset-lg-top-0">
            <figure class="thumbnail-classic">
              <div class="thumbnail-classic-img-wrap"><img width="370" height="370" src="images/portfolio/gallery-07-370x370.jpg" alt=""/><a class="gallery-link-mobile veil-lg" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-07-1200x800_original.jpg"></a></div>
              <figcaption class="thumbnail-classic-caption text-center">
                <div>
                  <h4 class="thumbnail-classic-title">Photo #7</h4>
                </div>
                <hr class="divider divider-sm"/>
                <p>We believe education is not a one-size-fits-all experience. Every child has different needs.</p>
                <div class="offset-top-20 veil reveal-lg-block"><a class="icon icon-xxs fa-search-plus" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-07-1200x800_original.jpg"></a></div>
              </figcaption>
            </figure>
          </div>
          <div class="cell-xs-10 cell-sm-6 cell-md-3 offset-top-30 offset-lg-top-0">
            <figure class="thumbnail-classic">
              <div class="thumbnail-classic-img-wrap"><img width="370" height="370" src="images/portfolio/gallery-08-370x370.jpg" alt=""/><a class="gallery-link-mobile veil-lg" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-08-1200x800_original.jpg"></a></div>
              <figcaption class="thumbnail-classic-caption text-center">
                <div>
                  <h4 class="thumbnail-classic-title">Photo #8</h4>
                </div>
                <hr class="divider divider-sm"/>
                <p>We believe education is not a one-size-fits-all experience. Every child has different needs.</p>
                <div class="offset-top-20 veil reveal-lg-block"><a class="icon icon-xxs fa-search-plus" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-08-1200x800_original.jpg"></a></div>
              </figcaption>
            </figure>
          </div>
          <div class="cell-xs-10 cell-sm-6 cell-md-3 offset-top-30 offset-lg-top-0">
            <figure class="thumbnail-classic">
              <div class="thumbnail-classic-img-wrap"><img width="370" height="370" src="images/portfolio/gallery-09-370x370.jpg" alt=""/><a class="gallery-link-mobile veil-lg" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-09-1200x800_original.jpg"></a></div>
              <figcaption class="thumbnail-classic-caption text-center">
                <div>
                  <h4 class="thumbnail-classic-title">Photo #9</h4>
                </div>
                <hr class="divider divider-sm"/>
                <p>We believe education is not a one-size-fits-all experience. Every child has different needs.</p>
                <div class="offset-top-20 veil reveal-lg-block"><a class="icon icon-xxs fa-search-plus" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-09-1200x800_original.jpg"></a></div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- Page Footer-->
@endsection
