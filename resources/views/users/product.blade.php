@extends('users.layouts.products.default')

@section('title', 'Страница товара')

@section('body')
  <section class="container-md section-landing" id="section-title-with-image">
    <div class="row justify-content-center">
      <div class="col-xxl-9 col-lg-10 col-md-12 col-12 col-image">
        <img src="{{ asset('img/IMG_5453 1.jpg') }}" class="img-fluid w-100" alt="IMG_5453 1.jpg">
        <h1>Являемся ведущим поставщиком элементов верхнего строения пути для предприятий АО «НК«КТЖ»</h1>
      </div>
    </div>
  </section>
  <section class="container-md section-landing" id="content">
    <div class="row justify-content-center">
      <div class="col-xxl-9 col-lg-10 col-md-12 col-12 ">
        <h2>Современные технологии достигли такого уровня, что глубокий уровень.</h2>
        <h3>Современные технологии достигли такого уровня, что глубокий уровень.</h3>
        <h4>Современные технологии достигли такого уровня, что глубокий уровень.</h4>
        <h5>Современные технологии достигли такого уровня, что глубокий уровень.</h5>
        <h6>Современные технологии достигли такого уровня, что глубокий уровень.</h6>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
          consequuntur debitis expedita necessitatibus nemo numquam officia ullam!
          Accusamus cupiditate dicta dolore eveniet incidunt ipsa laborum laudantium soluta,
          suscipit voluptatibus. Perspiciatis.
        </p>

        <img src="{{ asset('img/IMG_5453 1.jpg') }}" alt="lol">

        <a href="">Ссылка обычная</a>

      </div>
    </div>
  </section>
@endsection
