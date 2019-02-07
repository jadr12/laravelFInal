<?php

namespace App\Http\Controllers;

use App\Article;
use Storage;
use Image;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticle;
use App\Http\Requests\UpdateArticle;
use App\Services\Intervention;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article= Article::articlesTrier();
        return view('article',compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticle $request, Intervention $intervention )
    {
        
        $newarticle= new Article;
        $newarticle->image = $intervention->imgresize('image', 200, 200, $request->image);
        $newarticle->name=$request->name;
        $newarticle->description=$request->description;
        $newarticle->site=$request->site;
        $newarticle->save();

        

        //rechargement de l'index
        //creer variable article vide
        //mettre dedans (=) mes articles que je récupère == Article::all();
        $article=Article::all();
        
        return view('article',compact('article'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article=Article::where('id',$id)->first();
        //$this->authorize('view',$article);
        return view ('article-show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article= Article::where('id', $id)->first();
        return view('article-edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticle $request, Article $article)
    {
       // $article = Article::find($id);
        //$user = new User;
         $article->name=$request->name;
         $article->description=$request->description;
         $article->image=$request->image-> store('', 'image');
        $article->site=$request->site;
         $article->save();
         $article=Article::all();
        return view('article',compact('article'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->back();
    }
}
