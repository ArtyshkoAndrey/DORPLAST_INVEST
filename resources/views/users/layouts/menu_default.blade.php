<!-- As a link -->
<nav class="navbar navbar-expand-lg navbar-light bg-white d-block">
  <div class="container-xxl container-md my-2 mx-2 mx-xxl-auto mx-md-auto">
    <div class="row w-100 align-items-center">
      {{--        Brand Name  --}}
      <div class="col-lg-2 col-md-3 col-4 me-auto">
        <a class="navbar-brand text-uppercase text-wrap fw-bolder d-flex"
           href="{{ route('index') }}">
          <img src="{{ asset('img/logo.svg') }}" alt="{{ config('app.name') }}" class="img-fluid">
        </a>
      </div>

      <div class="col-auto ml-auto mt-lg-0 mt-md-4 d-none d-md-block order-md-last order-lg-2 border-end border-secondary">
        <a href="#" class="nav-link ps-md-0">
          info@dorplastinvest.kz
        </a>
      </div>

      <div class="col-auto mt-lg-0 mt-md-4 d-none d-md-block order-md-last order-lg-3">
        <a href="#" class="nav-link">
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
    <div class="container-xxl container-md my-2 mx-2 mx-xxl-auto mx-md-auto mb-0">
      <div class="row gx-4">
        <div class="col-auto">
          <a href="" class="nav-link px-0">О компании</a>
        </div>
        <div class="col-auto">
          <a href="" class="nav-link px-0">Услуги</a>
        </div>
        <div class="col-auto">
          <a href="" class="nav-link px-0">Производство</a>
        </div>
        <div class="col-auto">
          <a href="" class="nav-link px-0">Продукция</a>
        </div>
        <div class="col-auto">
          <a href="" class="nav-link px-0">Галерея</a>
        </div>
        <div class="col-auto">
          <a href="" class="nav-link px-0">Статьи</a>
        </div>
        <div class="col-auto">
          <a href="" class="nav-link px-0">Контакты</a>
        </div>
      </div>
    </div>
  </div>
</nav>
