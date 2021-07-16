<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class="las la-cog nav-icon"></i> Настройки</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('page') }}'><i class='nav-icon la la-file-o'></i> <span>Страницы</span></a></li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('product') }}'><i class='nav-icon la la-boxes'></i> Товары</a></li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('newses') }}'><i class='nav-icon la la-paperclip'></i> Новости</a></li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('images') }}'><i class='nav-icon la la-images'></i> Галерея</a></li>
