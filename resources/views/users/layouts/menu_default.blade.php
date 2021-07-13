<!-- As a link -->
<nav class="navbar navbar-default navbar-expand-lg navbar-light bg-white d-block">
  <div class="container-xxl container-md my-2 mx-xxl-auto mx-md-auto justify-content-center">
    <div class="row w-100 align-items-center">
      {{--        Brand Name  --}}
      <div class="col-lg-2 col-md-3 col-5 me-auto">
        <a class="navbar-brand text-uppercase text-wrap fw-bolder d-flex"
           href="{{ route('index') }}">
          <img src="{{ asset('img/logo.svg') }}" alt="{{ config('app.name') }}" class="img-fluid">
        </a>
      </div>

      <div class="col-auto ml-auto mt-lg-0 mt-md-4 d-none d-md-block order-md-last order-lg-2 border-end border-secondary">
        <a href="mailto:info@dorplastinvest.kz" class="nav-link ps-md-0 text-dark">
          info@dorplastinvest.kz
        </a>
      </div>

      <div class="col-auto mt-lg-0 mt-md-4 d-none d-md-block order-md-last order-lg-3">
        <a href="tel:+77273285441" class="nav-link text-dark">
          +7(727) 328-54-41
        </a>
      </div>

      <div class="col-auto d-none d-md-block order-lg-4">
        <a href="#" class="btn btn-outline-gradient-primary">
          Получить  коммерческое предложение
        </a>
      </div>
      <div class="col-auto">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#menu-links" aria-controls="menu-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </div>
  <div class="container-fluid collapse navbar-collapse" id="menu-links">
    <div class="container-xxl container-md my-2 mx-0 mx-xxl-auto mx-md-auto mb-0">
      <div class="row gx-0 gx-lg-4 flex-column flex-lg-row mx-0 mx-lg-1" id="links">
        <div class="col-auto">
          <a href="#second-about-section" class="nav-link px-0">О компании</a>
        </div>
        <div class="col-auto">
          <a href="#five-info-section" class="nav-link px-0">Услуги</a>
        </div>
        <div class="col-auto">
          <a href="#six-info-section" class="nav-link px-0">Производство</a>
        </div>
        <div class="col-auto">
          <a href="#eight-poesd-section" class="nav-link px-0">Продукция</a>
        </div>
        <div class="col-auto">
          <a href="#eleven-slider-section" class="nav-link px-0">Галерея</a>
        </div>
        <div class="col-auto">
          <a href="#twelfth-section" class="nav-link px-0">Статьи</a>
        </div>
        <div class="col-auto">
          <a href="#thirteen-section" class="nav-link px-0">Контакты</a>
        </div>
        <hr class="d-block d-md-none m-0">
      </div>
      <div class="row gx-0 d-block d-md-none" id="secondary-mobile-links">
        <div class="col-12 px-0">
          <a href="mailto:info@dorplastinvest.kz" class="nav-link px-0">
            info@dorplastinvest.kz
          </a>
        </div>

        <div class="col-12 px-0">
          <a href="tel:+77273285441" class="nav-link px-0">
            +7(727) 328-54-41
          </a>
        </div>

        <div class="col-12 px-0">
          <a href="#" class="btn btn-outline-gradient-primary d-block">
            Получить  коммерческое предложение
          </a>
        </div>
      </div>

    </div>
  </div>
</nav>
