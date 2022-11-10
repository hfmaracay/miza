<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Queries\NewsFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\News\{AdminCreateNewsRequest, AdminUpdateNewsRequest};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
	public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request, NewsFilter $filters)
  {
    $news = News::query()
                ->filterBy($filters, $request->only(['search', 'from', 'to']))
                ->orderBy('id', 'DESC')
                ->paginate();
                
    $news->appends($filters->valid());

    return view('admin.news.index', compact('news'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.news.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  App\New  $new
   * @param  App\Http\Requests\News\AdminCreateNewsRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(AdminCreateNewsRequest $request, News $news)
  {
    $request->createNews($news);

    return redirect()->route('adminNews')->with('message', 'Noticia creada con éxito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\News  $news
   * @return \Illuminate\Http\Response
   */
  public function show(News $news)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\News  $news
   * @return \Illuminate\Http\Response
   */
  public function edit(News $news)
  {
    return view('admin.news.edit', ['news' => $news]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\News  $news
   * @param  App\Http\Requests\News\AdminUpdateNewsRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function update(AdminUpdateNewsRequest $request, News $news)
  {
    $request->updateNews($news);

    return redirect()->route('adminNews')->with('message', 'Noticia actualizada con éxito');
  }

  /**
   * Display a listing trashed of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function trashed()
  {
    $news = News::onlyTrashed()->get();

    return view('admin.news.trashed', compact('news'));
  }

  /**
   * Delete the specified resource.
   *
   * @param  \App\News  $news
   * @return \Illuminate\Http\Response
   */
  public function delete(News $news)
  {
    $news->delete();

    return redirect()->route('adminNews')->with('message', 'Noticia eliminada con éxito');
  }

  /**
   * Restore the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function restore(int $id)
  {
    $news = News::onlyTrashed()->where('id', $id)->first();

    $news->restore();

    return redirect()->back()->with('message', 'Noticia restaurada con éxito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(int $id)
  {
    $news = News::onlyTrashed()->where('id', $id)->first();

    $newsImage = $news->image;
    Storage::disk('public')->delete('news/'.$newsImage);

    $news->forceDelete();

    return redirect()->back()->with('message', 'Noticia elimanada con éxito');
  }
}
