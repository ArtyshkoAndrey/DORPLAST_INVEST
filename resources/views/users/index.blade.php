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
              <i class="icon-arrow-right-2 ps-5 h5"></i>
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
                <p>Являемся ведущим поставщиком элементов верхнего строения пути для предприятий АО «НК«КТЖ» 2</p>
              </div>
              <div class="carousel-item">
                <p>Являемся ведущим поставщиком элементов верхнего строения пути для предприятий АО «НК«КТЖ» 3</p>
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

  <section class="container-md section-landing"
           id="third-info-section">
    <div class="row gy-5 gx-lg-5 align-items-stretch">
      <div class="col-lg-6 col-md-8">

        <div class="row item-info align-items-center">
          <div class="col-3">
            <img src="{{ asset('img/industrial.svg') }}"
                 class="img-fluid w-100"
                 alt="Оборудование">
          </div>

          <div class="col-sm-9">
            <h4>Парк оборудования состоит из 14 термопластавтоматов</h4>
            <p class="text-secondary mb-0">
              с широким диапазоном возможностей по литью пластмасс (от 1 см3 до 3200 см3)
            </p>
          </div>
        </div>

        <div class="row item-info align-items-center">
          <div class="col-3">
            <img src="{{ asset('img/manufacture.svg') }}"
                 class="img-fluid w-100"
                 alt="Оборудование">
          </div>

          <div class="col-sm-9">
            <h4>Непрерывное 3-х сменное производство</h4>
            <p class="text-secondary mb-0">
              отработанные связи с поставщиками сырья, постоянный контроль качества
            </p>
          </div>
        </div>

        <div class="row item-info align-items-center">
          <div class="col-3">
            <img src="{{ asset('img/warehouse.svg') }}"
                 class="img-fluid w-100"
                 alt="Оборудование">
          </div>

          <div class="col-sm-9">
            <h4>15 000 м2 производственной и складской площади</h4>
            <p class="text-secondary mb-0">
              позволяет быстро и качественно производить полимерные изделия
            </p>
          </div>
        </div>

      </div>
      <div class="col-lg-6 px-0 px-md-4">

        <div id="thirdCarouselSection" class="carousel slide h-100" data-bs-ride="carousel">
          <div class="carousel-inner h-100">
            <div class="carousel-item active">
              <img src="{{ asset('img/toSliderThird.jpg') }}" class="object-fit-cover w-100 h-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/toSliderThird.jpg') }}" class="object-fit-cover w-100 h-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/toSliderThird.jpg') }}" class="object-fit-cover w-100 h-100" alt="">
            </div>
          </div>
          <div class="wrapper-control">
            <button class="carousel-control-prev" type="button" data-bs-target="#thirdCarouselSection" data-bs-slide="prev">
            <span class="icon-arrow-left-3 text-primary"
                  aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#thirdCarouselSection" data-bs-slide="next">
            <span class="icon-arrow-right-3 text-primary"
                  aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container-md section-landing pb-5" id="four-future-section">
    <div class="row px-3 py-5 px-md-5">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-12">
            <p class="text-primary">Наша цель – это Ваш экономический успех!</p>
          </div>

          <div class="col-10">
            <h4>Мы видим себя в качестве Вашего партнёра и консультанта.</h4>
          </div>

          <div class="col-11">
            <div class="row align-items-center mt-3">
              <div class="col-auto">
                <img src="{{ asset('img/dot_list.svg') }}" class="img-fluid" alt="list">
              </div>
              <div class="col">
                <p class="mb-0">Окажем Вам поддержку в выборе материалов при разработке конструкции изделий исполнения и инструмента</p>
              </div>
            </div>

            <div class="row align-items-center mt-3">
              <div class="col-auto">
                <img src="{{ asset('img/dot_list.svg') }}" class="img-fluid" alt="list">
              </div>
              <div class="col">
                <p class="mb-0">Совместно с Вами мы выработаем концепцию, какая технология и какое оборудование лучше всего подходит для Ваших производственных планов</p>
              </div>
            </div>

            <div class="row align-items-center mt-3">
              <div class="col-auto">
                <img src="{{ asset('img/dot_list.svg') }}" class="img-fluid" alt="list">
              </div>
              <div class="col">
                <p class="mb-0">Наши специалисты спланируют вместе с Вами взвешенное решение Ваших производственных задач!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 position-relative">
        <img src="{{ asset('img/Group 30.png') }}" class="img-fluid w-100" alt="Человек" id="people-info-img">
        <div class="" id="union"></div>
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
