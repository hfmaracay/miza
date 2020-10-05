<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use App\Queries\ContentFilter;
use App\Http\Requests\Contents\{AdminCreateContentRequest, AdminUpdateContentRequest};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
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
  public function index(Request $request, ContentFilter $filters)
  {
    $contents = Content::query()
                    ->filterBy($filters, $request->only(['search', 'from', 'to']))
                    ->orderBy('id', 'DESC')
                    ->paginate();
                    
    $contents->appends($filters->valid());
    
    return view('admin.contents.index', compact('contents'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.contents.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  App\Content  $content
   * @param  App\Http\Requests\Contents\AdminCreateContentRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(AdminCreateContentRequest $request, Content $content)
  {
    $request->createContent($content);

    return redirect()->route('adminContents')->with('message', 'Contenido creado con éxito');
  }

  /**
   * Display the specified resource.
   *
   * @param  App\Content  $content
   * @return \Illuminate\Http\Response
   */
  public function show(Content $content)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Content  $content
   * @return \Illuminate\Http\Response
   */
  public function edit(Content $content)
  {
    return view('admin.contents.edit', ['content' => $content]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Content  $content
   * @param  App\Http\Requests\Contents\AdminUpdateContentRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function update(AdminUpdateContentRequest $request, Content $content)
  {
    $request->updateContent($content);

    return redirect()->route('adminContents')->with('message', 'Contenido actualizado con éxito');
  }

  /**
   * Display a listing trashed of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function trashed()
  {
    $contents = Content::onlyTrashed()->get();

    return view('admin.contents.trashed', compact('contents'));
  }

  /**
   * Delete the specified resource.
   *
   * @param  \App\Content  $content
   * @return \Illuminate\Http\Response
   */
  public function delete(Content $content)
  {
    $content->delete();

    return redirect()->route('adminContents')->with('message', 'Contenido eliminado con éxito');
  }

  /**
   * Restore the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function restore(int $id)
  {
    $content = Content::onlyTrashed()->where('id', $id)->first();

    $content->restore();

    return redirect()->back()->with('message', 'Contenido restaurado con éxito');
  }
}
