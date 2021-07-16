@extends('users.layouts.products.default')

@section('title', $news->title)

@section('body')
  <section class="container-md section-landing" id="section-title-with-image">
    <div class="row justify-content-center">
      @if ($news->baner)
        <div class="col-xxl-9 col-lg-10 col-md-12 col-12 col-image">
            <img src="{{ asset($news->baner) }}" class="img-fluid w-100" alt="IMG_5453 1.jpg">
          <h1>{{ $news->title }}</h1>
        </div>
      @else
        <div class="col-xxl-9 col-lg-10 col-md-12 col-12">
          <h1>{{ $news->title }}</h1>
        </div>
      @endif
    </div>
  </section>
  <section class="container-md section-landing" id="content">
    <div class="row justify-content-center">
      <div class="col-xxl-9 col-lg-10 col-md-12 col-12 ">
        {!! $news->content !!}
      </div>
    </div>
  </section>
@endsection
