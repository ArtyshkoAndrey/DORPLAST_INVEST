<footer class="py-5">
  <div class="container-md">
    <div class="row pb-3">
      <div class="col-lg-3">
        <img src="{{ asset('img/logo_dark.svg') }}" class="img-fluid" alt="logo">
      </div>
      <div class="col-lg d-none d-lg-flex justify-content-end">
        <nav class="nav">
          <a class="nav-link" href="{{ route('index') }}#second-about-section">О компании</a>
          <a class="nav-link" href="{{ route('index') }}#five-info-section">Услуги</a>
          <a class="nav-link" href="{{ route('index') }}#six-info-section">Производство</a>
          <a class="nav-link" href="{{ route('index') }}#eight-poesd-section">Продукция</a>
          <a class="nav-link" href="{{ route('index') }}#eleven-slider-section">Галерея</a>
          <a class="nav-link" href="{{ route('index') }}#twelfth-section">Статьи</a>
          <a class="nav-link" href="{{ route('index') }}#thirteen-section">Контакты</a>
        </nav>
      </div>
    </div>
  </div>
  <hr class="bg-light">

  <div class="container-md pt-3">
    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="row">
          <div class="col-12">
            <a href="tel:{{ \Backpack\Settings\app\Models\Setting::get('phone') }}" class="text-decoration-none text-white telephone">{{ \Backpack\Settings\app\Models\Setting::get('phone') }}</a>
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
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-white">

        <div class="row">
          <div class="col-auto">
            <img src="{{ asset('img/cil_fax_white.svg') }}" alt="cil_fax.svg" class="img-fluid">
          </div>
          <div class="col">
            <p>+7 (72772) 35 297</p>
          </div>
        </div>

        <div class="row text-white">
          <div class="col-auto">
            <img src="{{ asset('img/Message_white.svg') }}" alt="message" class="img-fluid">
          </div>
          <div class="col">
            <a href="mailto:{{ \Backpack\Settings\app\Models\Setting::get('contact_email') }}" class="text-decoration-none text-white">{{ \Backpack\Settings\app\Models\Setting::get('contact_email') }}</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <p class="text-white">{{ \Backpack\Settings\app\Models\Setting::get('location') }}</p>
      </div>
    </div>
  </div>
</footer>
