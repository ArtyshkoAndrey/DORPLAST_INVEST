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

  <section class="container-md section-landing" id="four-future-section">
    <div class="row px-3 py-5 px-md-5">
      <div class="col-lg-7 pb-3">
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
      <div class="col-lg-5 col-md-10 offset-md-1 offset-lg-0 position-relative">
        <img src="{{ asset('img/Group 30.png') }}" class="img-fluid w-100" alt="Человек" id="people-info-img">
        <div class="" id="union"></div>
      </div>
    </div>
  </section>

  <section class="container-fluid section-landing" id="five-info-section">
    <div class="container-md">
      <div class="row py-5">
        <div class="col-xxl-4 col-md-12 col-12">
          <div class="row">
            <div class="col-xxl-12 col-md-6 col-sm-4 col-8">
              <h3 class="text-white fw-bold">Услуги компании Дорпласт инвест</h3>
            </div>
            <div class="col-xxl-12 col-md-6 col-12 mt-4 mt-md-0 mt-xxl-4">
              <a href="#!" class="btn btn-outline-light d-block py-3 fw-bold">Получить коммерческое предложение</a>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-md-6 col-12 px-xxl-5 mt-md-5 mt-xxl-0 mt-4">

          <div class="row">
            <div class="col-12">
              <h5>Разработка конструкторской документации на изделие</h5>
              <p>Окажем Вам поддержку в выборе материалов при разработке конструкции изделий исполнения и инструмента</p>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <h5>Изготовление технологической оснастки  в металле</h5>
              <p>Окажем Вам поддержку в выборе материалов при разработке конструкции изделий исполнения и инструмента</p>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <h5>Поддержание работоспособности технологической оснастки в течении всего периода производства</h5>
              <p>Окажем Вам поддержку в выборе материалов при разработке конструкции изделий исполнения и инструмента</p>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <h5>Серийное производство изделий из пластмассы методом литья под давлением</h5>
              <p>Окажем Вам поддержку в выборе материалов при разработке конструкции изделий исполнения и инструмента</p>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <h5>Многоступенчатый контроль качества производимых изделий</h5>
              <p>Окажем Вам поддержку в выборе материалов при разработке конструкции изделий исполнения и инструмента</p>
            </div>
          </div>

        </div>

        <div class="col-xxl-4 col-md-6 col-12 px-xxl-5 mt-md-5 mt-xxl-0">

          <div class="row">
            <div class="col-12">
              <h5>Разработка конструкторской документации на технологическую оснастку</h5>
              <p>Окажем Вам поддержку в выборе материалов при разработке конструкции изделий исполнения и инструмента</p>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <h5>Испытания технологической оснастки (литьевых форм)</h5>
              <p>Окажем Вам поддержку в выборе материалов при разработке конструкции изделий исполнения и инструмента</p>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <h5>Подготовка полимеров и красителей для изготовления продукции (сушка, окрашивание и т.п.);</h5>
              <p>Окажем Вам поддержку в выборе материалов при разработке конструкции изделий исполнения и инструмента</p>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <h5>Дополнительные операции по доработке производимых изделий до эталонного образца</h5>
              <p>Окажем Вам поддержку в выборе материалов при разработке конструкции изделий исполнения и инструмента</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <h5>Отгрузка и поставка готовой продукции на склад заказчика</h5>
              <p>Окажем Вам поддержку в выборе материалов при разработке конструкции изделий исполнения и инструмента</p>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <section class="container-md section-landing" id="six-info-section">
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <h3 class="fw-bold">Большой опыт и сотрудничество</h3>
      </div>
      <div class="col-md-6 offset-lg-2 mt-3 mt-md-0">
        <h4>Мы видим себя в качестве Вашего партнёра и консультанта.</h4>
        <p class="mt-md-3">
          Наличие опытной конструкторской базы и многолетнего сотрудничества с ведущими машиностроительными предприятиями,
          позволяет нашему заводу полимерных изделий оперативно проектировать, изготовлять и ремонтировать пресс формы,
          обеспечивая кратчайшие сроки освоения новых изделий из пластмассы.
        </p>
      </div>
    </div>
  </section>

  <section class="container-fluid section-landing" id="seven-info-section">
   <div class="container-md">
    <div class="row gx-5 align-items-stretch">
      <div class="col-lg-6 col-12 mt-4 mt-lg-0 px-0 pe-lg-5 ps-lg-3 order-last order-lg-first">
        <img src="{{ asset('img/toSliderThird.jpg') }}" alt="image" class="img-fluid h-100 w-100 object-fit-cover">
      </div>
      <div class="col-lg-6 col-12" id="column-gray">
        <h5 class="fw-bold">Мы обеспечим</h5>

        <ul class="bar px-0 pe-5">
          <li><span>профессиональный подход к каждому предложенному проекту с учетом всех возможных вариантов его реализации</span></li>
          <li><span>подбор качественных композиционных материалов, имеющие соответствующие сертификаты</span></li>
          <li><span>подбор наиболее оптимальной конструкции изделия в соответствии с конкретными условиями его дальнейшей эксплуатации</span></li>
        </ul>

        <a href="#!" class="btn btn-outline-gradient-primary mt-3 px-3 py-2">Получить коммерческое предложение</a>
      </div>
    </div>
   </div>
  </section>

  <section class="container-lg section-landing d-none d-lg-block mb-5" id="eight-poesd-section">
    <div class="row px-4 py-5">
      <h5 class="text-white">Производственные площади</h5>
      <div class="col-lg-6 mt-4">
        <div class="row gy-5">

          <div class="col-lg-6">
            <h5 class="text-white fw-bold display-6">70 000 м2</h5>
            <p class="text-white">Общая площадь производства</p>
          </div>

          <div class="col-lg-6">
            <h5 class="text-white fw-bold display-6">67 400 м2</h5>
            <p class="text-white">Переработка отходов, ремонта и техническое обслуживание </p>
          </div>

          <div class="col-lg-6">
            <h5 class="text-white fw-bold display-6">1800 м2</h5>
            <p class="text-white">Машинный зал</p>
          </div>

          <div class="col-lg-6">
            <h5 class="text-white fw-bold display-6">800 м2</h5>
            <p class="text-white">Общая площадь производства</p>
          </div>
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
