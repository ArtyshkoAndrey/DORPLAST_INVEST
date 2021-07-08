@extends('users.layouts.default')

@section('title', 'Главная страница')

@section('body')

  <section class="container-md pt-1 pt-md-3 pt-md-5">
    <div class="row justify-content-center">
      <div class="col-12 px-0 px-md-3">
        <img src="{{ asset('img/dorplast-big-min.png') }}"
             class="img-fluid w-100"
             alt="dorplast Инвест">
      </div>
    </div>
  </section>

@endsection

@section('js')
  <script>
    $(function() {
      $('#menu-links #links a').on('click', function (e) {
        e.preventDefault();
        $('#menu-links #links a').removeClass('active')
        $(this).toggleClass('active')
      })
    })
  </script>
@endsection
