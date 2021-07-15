@extends('users.layouts.default')

@section('title', $page->title)

@section('body')

  <section class="container-md section-landing" id="first-big-image">
    <div class="row justify-content-center">
      <div class="col-12 px-0 px-md-3">
        <img src="{{ asset('img/dorplast-big-min.jpg') }}" class="img-fluid w-100 d-none d-md-block" alt="dorplast Инвест">
        <img src="{{ asset('img/Mainphoto 1.jpg') }}" class="img-fluid w-100 d-block d-md-none" alt="Mainphoto 1.jpg">
      </div>
    </div>
  </section>

  <section class="container-md section-landing" id="second-about-section">
    <div class="row align-items-stretch">
      <div class="col-md-7">
        <h1 class="text-primary">{{ $page->s2_header }}</h1>

        <h2>
          {{ $page->s2_content }}
        </h2>

        <div class="row d-none d-md-flex">
          <div class="col-auto">
            <a href="{{ url('/') . '/' . \Backpack\Settings\app\Models\Setting::get('file') }}"
               class="btn btn-gradient-primary mt-3 px-4 py-2">
              Посмотреть продукцию
              <i class="iconly-l-arrow-right-2 ps-5 h5"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-5">
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
            <span class="iconly-l-arrow-left text-primary"
                  aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next"
                  type="button"
                  data-bs-target="#carouselSecondSection"
                  data-bs-slide="next">
            <span class="iconly-l-arrow-right text-primary"
                  aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section class="container-md section-landing" id="third-info-section">
    <div class="row gy-5 gx-lg-5 align-items-stretch">
      <div class="col-lg-6 col-md-8">

        <div class="row item-info align-items-center">
          <div class="col-3">
            <img src="{{ asset('img/industrial.svg') }}"
                 class="img-fluid w-100"
                 alt="Оборудование">
          </div>

          <div class="col-sm-9">
            <h4>{{ $page->s3_header_1 }}</h4>
            <p class="text-secondary mb-0">
              {{ $page->s3_content_1 }}
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
            <h4>{{ $page->s3_header_2 }}</h4>
            <p class="text-secondary mb-0">
              {{ $page->s3_content_2 }}
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
            <h4>{{ $page->s3_header_3 }}</h4>
            <p class="text-secondary mb-0">
              {{ $page->s3_content_3 }}
            </p>
          </div>
        </div>

      </div>
      <div class="col-lg-6 px-0 px-md-4">

        <div id="thirdCarouselSection" class="carousel slide h-100" data-bs-ride="carousel">
          <div class="carousel-inner h-100">
            <div class="carousel-item active">
              <picture>
                <source srcset="{{ asset('img/webp/toSliderThird.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/toSliderThird.jpg') }}" type="image/jpeg">
                <img src="{{ asset('img/toSliderThird.jpg') }}" class="object-fit-cover w-100 h-100" alt="dorplast Инвест">>
              </picture>
            </div>
            <div class="carousel-item">
              <picture>
                <source srcset="{{ asset('img/webp/toSliderThird.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/toSliderThird.jpg') }}" type="image/jpeg">
                <img src="{{ asset('img/toSliderThird.jpg') }}" class="object-fit-cover w-100 h-100" alt="dorplast Инвест">>
              </picture>
            </div>
            <div class="carousel-item">
              <picture>
                <source srcset="{{ asset('img/webp/toSliderThird.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/toSliderThird.jpg') }}" type="image/jpeg">
                <img src="{{ asset('img/toSliderThird.jpg') }}" class="object-fit-cover w-100 h-100" alt="dorplast Инвест">>
              </picture>
            </div>
          </div>
          <div class="wrapper-control">
            <button class="carousel-control-prev" type="button" data-bs-target="#thirdCarouselSection" data-bs-slide="prev">
            <span class="iconly-l-arrow-left text-primary"
                  aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#thirdCarouselSection" data-bs-slide="next">
            <span class="iconly-l-arrow-right text-primary"
                  aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container-md section-landing" id="four-future-section">
    <div class="row px-sm-3 px-0 p py-5 px-md-5">
      <div class="col-lg-7 d-flex align-items-center pb-3">
        <div class="row">
          <div class="col-12">
            <p class="text-primary">{{ $page->s4_short }}</p>
          </div>

          <div class="col-10">
            <h4>{{ $page->s4_header }}</h4>
          </div>

          <div class="col-11">
            <div class="row align-items-center mt-3">
              <div class="col-auto">
                <img src="{{ asset('img/dot_list.svg') }}" class="img-fluid" alt="list">
              </div>
              <div class="col">
                <p class="mb-0">{{ $page->s4_list_1 }}</p>
              </div>
            </div>

            <div class="row align-items-center mt-3">
              <div class="col-auto">
                <img src="{{ asset('img/dot_list.svg') }}" class="img-fluid" alt="list">
              </div>
              <div class="col">
                <p class="mb-0">{{ $page->s4_list_2 }}</p>
              </div>
            </div>

            <div class="row align-items-center mt-3">
              <div class="col-auto">
                <img src="{{ asset('img/dot_list.svg') }}" class="img-fluid" alt="list">
              </div>
              <div class="col">
                <p class="mb-0">{{ $page->s4_list_3 }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-10 offset-md-1 offset-lg-0 position-relative">

        <picture>
          <source srcset="{{ asset('img/webp/Group 30.webp') }}" type="image/webp">
          <source srcset="{{ asset('img/Group 30.png') }}" type="image/png">
          <img src="{{ asset('img/Group 30.png') }}" class="img-fluid w-100" alt="Человек" id="people-info-img">
        </picture>

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
              <h3 class="text-white fw-bold">{{ $page->s5_header }}</h3>
            </div>
            <div class="col-xxl-12 col-md-6 col-12 mt-4 mt-md-0 mt-xxl-4">
              <a href="{{ url('/') . '/' . \Backpack\Settings\app\Models\Setting::get('file') }}" class="btn btn-outline-light d-block py-3" download="">Получить коммерческое предложение</a>
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
        <h3 class="fw-bold">{{ $page->s6_header }}</h3>
      </div>
      <div class="col-md-6 offset-lg-2 mt-3 mt-md-0">
        <h4>{{ $page->s6_subheader }}</h4>
        <p class="mt-md-3">
          {{ $page->s6_content }}
        </p>
      </div>
    </div>
  </section>

  <section class="container-fluid section-landing" id="seven-info-section">
   <div class="container-md">
    <div class="row gx-5 align-items-stretch">
      <div class="col-lg-6 col-12 mt-4 mt-lg-0 px-0 pe-lg-5 ps-lg-3 order-last order-lg-first">
        <img src="{{ asset($page->s7_image) }}" class="img-fluid h-100 w-100 object-fit-cover" alt="dorplast Инвест">
      </div>
      <div class="col-lg-6 col-12" id="column-gray">
        <h5 class="fw-bold">{{ $page->s7_header }}</h5>

        <ul class="bar px-0 pe-2 pe-md-5">
          <li><span>{{ $page->s7_list_1 }}</span></li>
          <li><span>{{ $page->s7_list_2 }}</span></li>
          <li><span>{{ $page->s7_list_3 }}</span></li>
        </ul>

        <a href="{{ url('/') . '/' . \Backpack\Settings\app\Models\Setting::get('file') }}" class="btn btn-outline-gradient-primary mt-3 px-3 py-2 d-block d-md-inline-flex" download>Получить коммерческое предложение</a>
      </div>
    </div>
   </div>
  </section>

  <section class="container-lg section-landing d-none d-lg-block" id="eight-poesd-section">
    <div class="row px-4 py-5">
      <h5 class="text-white">{{ $page->s8_header }}</h5>
      <div class="col-lg-6 mt-4">
        <div class="row gy-5">

          <div class="col-lg-6">
            <h5 class="text-white fw-bold display-6">{{ $page->s8_list_header_1 }}</h5>
            <p class="text-white">{{ $page->s8_list_content_1 }}</p>
          </div>

          <div class="col-lg-6">
            <h5 class="text-white fw-bold display-6">{{ $page->s8_list_header_2 }}</h5>
            <p class="text-white">{{ $page->s8_list_content_2 }}</p>
          </div>

          <div class="col-lg-6">
            <h5 class="text-white fw-bold display-6">{{ $page->s8_list_header_3 }}</h5>
            <p class="text-white">{{ $page->s8_list_content_3 }}</p>
          </div>

          <div class="col-lg-6">
            <h5 class="text-white fw-bold display-6">{{ $page->s8_list_header_4 }}</h5>
            <p class="text-white">{{ $page->s8_list_content_4 }}</p>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="container-md section-landing" id="nine-maker-product-section">
    <div class="align-items-stretch gx-4 gx-md-5 gy-4 justify-content-center row">

      <div class="col-xxl-3 col-lg-4 col-sm-7 col-md-6 col-11 maker-product product-primary">
        <div class="row">
          <div class="col-12">
            <img src="{{ asset($page->s9_image_1) }}" alt="plastic icon" class="img-fluid">
          </div>
          <div class="col-12 mt-3">
            <h5>{{ $page->s9_header_1 }}</h5>
            <hr class="bg-light my-4">
            <p class="text-start">{{ $page->s9_content_1 }}</p>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-lg-4 col-sm-7 col-md-6 col-11 maker-product">
        <div class="row">
          <div class="col-12 mt-2">
            <img src="{{ asset($page->s9_image_2) }}" alt="plastic icon" class="img-fluid">
          </div>
          <div class="col-12 mt-3">
            <h5>{{ $page->s9_header_2 }}</h5>
            <p>
              {{ $page->s9_content_2 }}
            </p>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-lg-4 col-sm-7 col-md-6 col-11 maker-product">
        <div class="row">
          <div class="col-12 mt-2">
            <img src="{{ asset($page->s9_image_3) }}" alt="plastic icon" class="img-fluid">
          </div>
          <div class="col-12 mt-3">
            <h5>{{ $page->s9_header_3 }}</h5>
            <p>
              {{ $page->s9_content_3 }}
            </p>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-lg-4 col-sm-7 col-md-6 col-11 maker-product">
        <div class="row">
          <div class="col-12 mt-2">
            <img src="{{ asset($page->s9_image_4) }}" alt="plastic icon" class="img-fluid">
          </div>
          <div class="col-12 mt-3">
            <h5>{{ $page->s9_header_4 }}</h5>
            <p>
              {{ $page->s9_content_4 }}
            </p>
          </div>
        </div>
      </div>


    </div>
  </section>

  <section class="container-md section-landing" id="ten-product-section">
    <div class="row gy-4" id="info-products">
      <div class="col-lg-6">
        <h2>{{ $page->s10_header }}</h2>

        <ul class="mt-4">
          <li><p>{{ $page->s10_list_1 }}</p></li>
          <li><p>{{ $page->s10_list_2 }}</p></li>
          <li><p>{{ $page->s10_list_3 }}</p></li>
        </ul>
      </div>
      <div class="col-lg-6">
        <h3>{{ $page->s10_subheader }}</h3>
        <p class="mt-3">
          {{ $page->s10_content }}
        </p>
      </div>
    </div>

    <div class="row justify-content-center justify-content-md-start" id="products">

      @foreach(\App\Models\Product::all() as $product)
        <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-6 col-11 product">
          <div class="row">
            <div class="col-12">
              <img src="{{ asset($product->image) }}" class="img-fluid" alt="product">
            </div>
            <div class="col-12 name">
              <p>{{ $product->title }}</p>
            </div>
            <div class="col-12 description">
             {{ $product->description }}
            </div>
            <div class="col-12">
              <a href="{{ route('products', ['id' => $product->id]) }}" class="text-primary text-decoration-none d-flex align-items-center">Подробнее <i class="iconly-l-arrow-right-2 ms-1"></i></a>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </section>

  <section class="container-md section-landing" id="eleven-slider-section">

    <div class="align-items-center row">
      <div class="col-xxl-5 col-lg-6 col-md-12" id="info-for-slider">
        <div class="wrapper-gray">
          <h3>{{ $page->s11_header }}</h3>
          <p>
            {{ $page->s11_content }}
          </p>
        </div>
      </div>

      <div class="col-xxl-7 col-lg-6 col-md-12 mt-5 mt-lg-0 h-100">
        <div class="wrapper-slider">
          <div class="row align-items-center">
            <div class="col-xxl-10 col-lg-9" id="slider-wr-js">
              <div id="eleventCarouselSection" class="carousel slide h-100" data-bs-ride="carousel">
                <div class="carousel-inner h-100">
                  @for($i = 0; $i < 5; $i++)
                    <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                      <img src="https://placeimg.com/{{ 640 + $i }}/360/any" class="object-fit-cover w-100 h-100" alt="dorplast Инвест">
                      <div class="carousel-caption p-3">
                        <p>Посещение нащего предприятия сотрудников АО КТЖ</p>
                      </div>
                    </div>
                  @endfor
                </div>
                <div class="wrapper-control">
                  <button class="carousel-control-prev" type="button" data-bs-target="#eleventCarouselSection" data-bs-slide="prev">
                    <span class="iconly-l-arrow-left text-primary"
                    aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#eleventCarouselSection" data-bs-slide="next">
                    <span class="iconly-l-arrow-right text-primary"
                    aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
            <div class="col-xxl-2 col-lg-3 position-relative min-elements">
              <button class="btn border-0 text-primary w-100 d-none d-lg-block" id="up-scroll"><i class="iconly-l-arrow-up-2"></i></button>
              <div class="wrapper-min-img position-relative row flex-column flex-lg-row flex-wrap mt-3 mt-lg-0">
                @for($i = 0; $i < 5; $i++)
                  <div class="col-3 col-lg-12">
                    <div class="item">
                      <img src="https://placeimg.com/{{ 640 + $i }}/360/any" alt="https://placeimg.com/{{ 640 + $i }}/360/any" data-id="{{ $i }}" class="img-fluid">
                    </div>
                  </div>
                @endfor
              </div>
              <button class="btn border-0 text-primary w-100 d-none d-lg-block" id="down-scroll"><i class="iconly-l-arrow-down-2"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="container-md section-landing" id="twelfth-section">
    <div class="row gy-4 justify-content-center">
      @for($i=0;$i<6;$i++)
      <div class="col-lg-4 col-md-6 col-sm-6 col-12 news">
        <div class="row">
          <div class="col-12">
            <h3>Современные технологии достигли такого уровня, что глубокий уровень.</h3>
            <p class="description">Наличие опытной конструкторской базы и многолетнего сотрудничества с ведущими машиностроительными</p>
          </div>
          <div class="col-12">
            <a href="#!" class="text-primary text-decoration-none d-flex align-items-center">Подробнее <i class="iconly-l-arrow-right-2 ms-1"></i></a>
          </div>
        </div>
      </div>
      @endfor
    </div>
  </section>

  <section class="container-md section-landing" id="thirteen-section">
    <div class="row gy-md-3 gy-0 gy-lg-0 align-items-stretch">
      <div class="col-lg-6">
        <div class="row wrapper-gray">
          <div class="col-12">
            <p class="text-primary">ТОО “Дорпласт Инвест”</p>
          </div>
          <div class="col-12">
            <p class="telephone">{{ \Backpack\Settings\app\Models\Setting::get('phone') }}</p>
            <div class="row phones">
              <div class="col-auto">
                <p>{{ \Backpack\Settings\app\Models\Setting::get('phone_1') }}</p>
              </div>
              <div class="col-auto">
                <p>{{ \Backpack\Settings\app\Models\Setting::get('phone_2') }}</p>

              </div>
              <div class="col-auto">
                <p>{{ \Backpack\Settings\app\Models\Setting::get('phone_3') }}</p>

              </div>
            </div>
          </div>
          <div class="col-12 mt-3">
            <div class="row align-items-center">
              <div class="col-auto">
                <i class="iconly-l-fax"></i>
              </div>
              <div class="col">
                <p class="mb-0">+7 (72772) 35 297</p>
              </div>
            </div>
          </div>

          <div class="col-12 mt-3">
            <div class="row">
              <div class="col-auto">
                <i class="iconly-l-location"></i>
              </div>
              <div class="col">
                <p>{{ \Backpack\Settings\app\Models\Setting::get('location') }}</p>
              </div>
            </div>
          </div>

          <div class="col-12 mt-2">
            <div class="row align-items-center">
              <div class="col-auto">
                <i class="iconly-l-message"></i>
              </div>
              <div class="col">
                <a href="mailto:{{ \Backpack\Settings\app\Models\Setting::get('contact_email') }}" class="text-decoration-none text-dark">{{ \Backpack\Settings\app\Models\Setting::get('contact_email') }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Adadb76b401d65c6e16caed0350610aa803b008760a5c0116b986d9020f250681&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
      </div>
    </div>
  </section>

@endsection

@section('js')
  <script>
    $(function () {
      let sliderSecondSection = document.getElementById('carouselSecondSection')
      let counterFromSliderSecondSection = document.getElementById('counterFromSliderSecondSection')
      sliderSecondSection.addEventListener('slid.bs.carousel', function (el) {
        console.log(el.to)
        counterFromSliderSecondSection.textContent = el.to + 1
      })
      let mobile;
      if (window.innerWidth <= 992) {
        mobile = true
        $('.item').height($('.item').width())
        $('.wrapper-min-img').height($('.item').height() + 30).css('overflow-x', 'auto')
        $('#slider-wr-js').height('auto')
        $('.wrapper-min-img > .col-3').height($('.item').height())
      } else {
        mobile = false
        $('.wrapper-min-img').height($('#info-for-slider').height()).css('overflow', 'hidden')
        $('.item').height($('.item').width())
        $('#slider-wr-js').height($('#info-for-slider').height())
        $('.wrapper-min-img > .col-3').height('auto')
      }

      let sc = 0;
      let maxI = 5;
      let carouselEl = $('#eleventCarouselSection');
      let c = new bootstrap.Carousel(carouselEl, {
        interval: 5000
      })
      $(window).resize(function () {
        if (window.innerWidth <= 992) {
          mobile = true;
          $('.item').height($('.item').width())
          $('.wrapper-min-img').height($('.item').height() + 30).css('overflow-x', 'auto')
          $('#slider-wr-js').height('auto')
          $('.wrapper-min-img > .col-3').height($('.item').height())
          // $('.wrapper-min-img').height('auto')
          if (mobile) {
            $('.wrapper-min-img').scrollTop();
            sc = 0
            mobile = true
          }
        } else {
          $('.wrapper-min-img').height($('#info-for-slider').height()).css('overflow', 'hidden')
          $('.item').height($('.item').width())
          $('#slider-wr-js').height($('#info-for-slider').height())
          $('.wrapper-min-img > .col-3').height('auto')
          if (mobile) {
            $('.wrapper-min-img').scrollTop();
            $('.wrapper-min-img').css('--linerBottom', 0)
            sc = 0
            mobile = false
          }
        }
      })

      $('#down-scroll').click( function () {
        if ($('.item').height() * (maxI - 3) >= sc) {
          sc += $('.item').height()
          $('.wrapper-min-img')[0].scrollTo(0,  sc)
          $('.wrapper-min-img').css('--linerBottom', '-' + sc + 'px')
        }
      })

      $('#up-scroll').click( function () {
        sc -= $('.item').height()
        if (sc <= 0 )
          sc = 0

        if (sc > 0)
          $('.wrapper-min-img').css('--linerBottom', '-' + sc + 'px')
        else
        $('.wrapper-min-img').css('--linerBottom', sc + 'px')

        $('.wrapper-min-img')[0].scrollTo(0,  sc)
      })

      $('.wrapper-min-img .item img').click(function () {
        c.to($(this).attr("data-id"))
      })
    })

  </script>
@endsection
