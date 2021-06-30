<!-- As a link -->
<nav class="navbar navbar-light bg-light">
  <div class="container">
    <div class="row w-100 align-items-center">
      {{--        Brand Name  --}}
      <div class="col-lg-2 col-md-3 col-4 me-auto">
        <a class="navbar-brand text-uppercase text-wrap fw-bolder d-flex"
           href="{{ route('index') }}">
          {{ config('app.name') }}
        </a>
      </div>

      <div class="col-auto ml-auto">
        <a href="#" class="nav-link border-end border-dark">
          info@dorplastinvest.kz
        </a>
      </div>

      <div class="col-auto">
        <a href="#" class="nav-link">
          +7(727) 328-54-41
        </a>
      </div>

      <div class="col-auto">
        <a href="#" class="btn btn-outline-primary">
          Получить  коммерческое предложение
        </a>
      </div>
    </div>
  </div>
</nav>
