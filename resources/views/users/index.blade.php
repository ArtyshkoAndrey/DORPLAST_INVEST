@extends('users.layouts.default')

@section('title', 'Главная страница')

@section('body')

  <section class="container-md section-landing"
           id="first-big-image">
    <div class="row justify-content-center">
      <div class="col-12 px-0 px-md-3">
        <img src="{{ asset('img/dorplast-big-min.jpg') }}"
             class="img-fluid w-100"
             alt="dorplast Инвест">
      </div>
    </div>
  </section>

  <section class="container-md section-landing"
           id="second-about-section">
    <div class="row">
      <div class="col-md-6">
        <h1 class="text-primary">ТОО “Дорпласт Инвест”</h1>

        <h2>
          Являемся ведущим поставщиком элементов верхнего строения пути для предприятий АО «НК«КТЖ»
        </h2>

        <a href="#!"
           class="btn btn-outline-gradient-primary mt-3">
          Посмотреть продукцию
          <span class="ps-5"> > </span>
        </a>
      </div>
    </div>
  </section>

@endsection

@section('js')
  <script>
    $(function () {
      $('#menu-links #links a').on('click', function (e) {
        e.preventDefault();
        $('#menu-links #links a').removeClass('active')
        $(this).toggleClass('active')
      })
    })
  </script>
@endsection
