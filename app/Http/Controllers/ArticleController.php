<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles=Article::paginate(3);
        return view('components.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('components.articles.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        // dd($request->categories);
        if($request->hasFile('image') && $request->file('image')->isValid() ){
            $ext=$request->file('image')->extension();
            $fileName=uniqid(). "." . $ext;
            try {
                $path=$request->file('image')->storeAs('images',$fileName,'public');
                $url=Storage::url($path);
                $newArticle= new Article();
                $newArticle->title=$request->title;
                $newArticle->content=$request->content;
                $newArticle->user_id=Auth::user()->id;
                $newArticle->image=$url;
                $newArticle->save();
                $newArticle->categories()->attach($request->categories);
            } catch (\Throwable $th) {
                dd($th->getMessage());
            }

        }

        // metodo compatto solo se hai valori in model identici ai dati provenienti dal form($request)
        // Article::create($request->all());

        return redirect()->back()->with('success','Articolo pubblicato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //  $article=Article::findorFail($article->id);
        return view('components.articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $categories=Category::all();
        return view('components.articles.edit',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        // if (Auth::user()->id != $article->user_id) {
        //    return redirect()->route('homepage')->with('warning','Non sei il proprietario di questo articolo impossibile proseguire');
        // dd($article->categories());
        $url=null;
         if($request->hasFile('image') && $request->file('image')->isValid() ){
            $ext=$request->file('image')->extension();
            $fileName=uniqid(). "." . $ext;
             $path=$request->file('image')->storeAs('images',$fileName,'public');
                $url=Storage::url($path);
            }
            $article->update([
                'title'=>$request->title,
                'content'=>$request->content,
                'image'=>$url ? $url : $article->image
            ]);
            $article->categories()->detach();
            $article->categories()->attach($request->categories);


        return redirect()->route('dashboard')->with('success','Articolo modificato con successo');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //  if (Auth::user()->id != $article->user_id) {
        //    return redirect()->route('homepage')->with('warning','Non sei il proprietario di questo articolo impossibile proseguire');
        // }
        $article->categories()->detach();
        $article->delete();
        return redirect()->back()->with('success','Articolo eliminato con successo');
    }
    public function dashboard(){
        // $userArticles=Article::where('user_id',Auth::user()->id);
        // $userArticles=Auth::user()->articles;
        // $test=Auth::user()->articles;
        // dd($test);
        return view('users.dashboard',['articles'=>Auth::user()->articles]);
    }
}
