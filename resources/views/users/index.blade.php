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

  <section class="container-md section-landing pb-5"
           id="second-about-section">
    <div class="row align-items-stretch">
      <div class="col-md-6">
        <h1 class="text-primary">ТОО “Дорпласт Инвест”</h1>

        <h2>
          Являемся ведущим поставщиком элементов верхнего строения пути для предприятий АО «НК«КТЖ»
        </h2>

        <div class="row d-none d-md-flex">
          <div class="col-auto">
            <a href="#!"
               class="btn btn-gradient-primary mt-3 px-4 py-2">
              Посмотреть продукцию
              <span class="ps-5"> > </span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div id="carouselSecondSection"
             class="carousel slide h-100 row mt-3 mt-md-0"
             data-bs-ride="carousel"
             data-bs-interval="false"
             data-bs-wrap="true">
          <div class="col-md-8 col-10 align-self-center">
            <div class="carousel-inner pb-4">
              <div class="carousel-item active">
                <p>Являемся ведущим поставщиком элементов верхнего строения пути для предприятий АО «НК«КТЖ»</p>
              </div>
              <div class="carousel-item">
                <p>Парк оборудования состоит  из 14 термопластавтоматов </p>
              </div>
              <div class="carousel-item">
                <p>Непрерывное 3-х сменное производство</p>
              </div>
            </div>
          </div>
          <div class="carousel-number-arrow d-flex align-items-center">
            <span id="counterFromSliderSecondSection">1</span>
            <span class="d-inline-block"></span>
            <span>3</span>
          </div>
          <button class="carousel-control-prev"
                  type="button"
                  data-bs-target="#carouselSecondSection"
                  data-bs-slide="prev">
            <span class="icon-arrow-left-3 text-primary display-6"
                  aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next"
                  type="button"
                  data-bs-target="#carouselSecondSection"
                  data-bs-slide="next">
            <span class="icon-arrow-right-3 text-primary display-6"
                  aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
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

      let sliderSecondSection = document.getElementById('carouselSecondSection')
      let counterFromSliderSecondSection = document.getElementById('counterFromSliderSecondSection')
      sliderSecondSection.addEventListener('slid.bs.carousel', function (el) {
        console.log(el.to)
        counterFromSliderSecondSection.textContent = el.to + 1
      })
    })
  </script>
@endsection
