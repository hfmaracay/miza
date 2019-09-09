<?php

namespace App\Http\Controllers\Web;

use App\News;
use App\Queries\NewsFilter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index(Request $request, NewsFilter $filters)
  {
    $news = News::query()
                ->filterBy($filters, $request->only(['search', 'from', 'to']))
                ->orderBy('id', 'DESC')
                ->paginate();
                
    $news->appends($filters->valid());

    return view('web.news', compact('news'));
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\News  $news
   * @return \Illuminate\Http\Response
   */
  public function show(News $news)
  {
    return view('web.news_show', compact('news'));
  }
}
