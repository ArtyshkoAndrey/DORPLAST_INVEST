@extends('users.layouts.default')

@section('title', 'Главная страница')

@section('body')

@endsection

@section('js')
  <script>
    $(function() {
      $('#menu-links #links a').on('click', function (e) {
        e.preventDefault();
        $('#menu-links #links a').removeClass('active')
        $(this).toggleClass('active')
      })
    })
  </script>
@endsection
