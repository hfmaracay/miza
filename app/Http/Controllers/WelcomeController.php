<?php

namespace App\Http\Controllers;

use App\Models\{Content, News};
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $content1 = Content::find(1);
    $content2 = Content::find(2);

    $news = News::orderBy('id', 'DESC')->paginate(3);

    return view('welcome', compact('content1', 'content2', 'news'));
  }
}
