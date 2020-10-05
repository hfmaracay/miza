<?php

namespace App\Http\Controllers\Web;

use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $content1 = Content::find(3);
    $content2 = Content::find(4);
    $content3 = Content::find(5);
    $content4 = Content::find(6);

    return view('web.institution', compact('content1', 'content2', 'content3', 'content4'));
  }
}
