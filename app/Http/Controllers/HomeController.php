<?php

namespace App\Http\Controllers;

use App\Models\Newses;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{

  /**
   * Index Home Page
   * @return Factory|View|Application
   */
  public function index()
  {
    return view('users.index');
  }

  public function products(int $id)
  {
    $product = Product::find($id);
    return view('users.product', compact('product'));
  }

  public function news(int $id)
  {
    $news = Newses::find($id);
    return view('users.news', compact('news'));
  }

}
