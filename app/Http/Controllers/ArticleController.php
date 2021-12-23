<?php

namespace App\Http\Controllers;

use App\Models\Article; 
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view('article.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required',
            'title' => 'required',
            'text' => 'required'
        ]

    );
        $img = $request->file('img');
        $nama_file = time() . "_" . $img->getClientOriginalName();
        $img->move('dist/img', $nama_file); //proses upload foto kelaravel

        Article::create([
            'img' => $nama_file,
            'title' => $request->title,
            'text' => $request->text
        ]);
        return redirect('/article')->with('status', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'img' => 'required',
            'title' => 'required',
            'text' => 'required'
        ],

    );

    $img = $request->file('img');
    $nama_file = time() . "_" . $img->getClientOriginalName();
    $img->move('dist/img', $nama_file); //proses upload foto kelaravel
    
        Article::where('id', $article->id)->update([
            'img' => $request->img,
            'title' => $request->title,
            'text' => $request->text
        ]);
        return redirect('/article')->with('status', 'Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Article::destroy('id', $article->id);
        return redirect('/article')->with('status', 'berhasil dihapus');
    }
}
