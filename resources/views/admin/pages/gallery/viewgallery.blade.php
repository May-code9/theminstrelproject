@extends('admin.master')
@section('content')

<div class="wrapper-content">
  <div class="container">
    <div class="row  align-items-center justify-content-between">
      <div class="col-8 col-sm-10 page-title">
        <h3>Image Gallery</h3>
        <p>Creatively crafted Dashboard for your needs</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-16">
        <div class="row">
          <div class="grid three" style="position: relative; height: 1157px;">
            @forelse($galleries as $gallery)
            <div class="grid-item" style="position: absolute; left: 0px; top: 0px;">
              <a href="{{ asset('images/gallery/' . $gallery->large_image ) }}" rel="gallery-1" class="swipebox" title="My Caption">
                <img src="{{ asset('images/gallery/' . $gallery->mini_image ) }}" alt="image">
              </a>
            </div>
            @empty
            <h1>No Images Yet</h1>
            @endforelse
          </div>
          <div style="font-size:20px">
            {{ $galleries->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
