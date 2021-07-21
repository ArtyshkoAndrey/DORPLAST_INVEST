<?php
/*
 * Copyright (c) 2021.
 * All code files are the property of the Fulliton Creator.
 * No one has the right to modify files without the consent of the creator.
 * The code is completely open and copyable is allowed.
 * GitHub https://github.com/ArtyshkoAndrey/
 */

namespace App\Http\Controllers;

use Backpack\PageManager\app\Models\Page;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
  public function index($slug, $subs = null)
  {
    if ($slug !== null) {
      $page = Page::findBySlug($slug);
    } else {
      $page = Page::findBySlug('/');
    }

    if (!$page) {
      abort(404, 'Please go back to our <a href="' . url('') . '">homepage</a>.');
    }

    $this->data['title'] = $page->title;
    $this->data['page'] = $page->withFakes();
//    dd($page);
    return view('users.pages.' . $page->template, $this->data);
  }
}
