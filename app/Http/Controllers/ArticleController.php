<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;


use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\Facades\Storage;

class ArticleController extends Controller
{

    public function __construct()
    {
        // $this->Middleware('auth')->except('index', 'show');
    }


    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $articles = Article::where('is_accepted', true)
            ->latest()
            ->take(4)
            ->get();

        return view('article.index', compact('articles'));
    }

    public function articleSearch(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->latest()->get();

        return view('article.search-index', compact('articles', 'query'));
    }

    public function byCategory(Category $category)
    {
        $articles = $category->articles()
                             ->where('is_accepted', true)
                             ->latest()
                             ->get();
    
        return view('article.by-category', compact('category', 'articles'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {// Verifica se l'utente è autenticato
        if (!Auth::check()) {

            return redirect()->route('login');
        }

        // Recupera tutte le categorie
        $categories = Category::all();
        $tags = Tag::all();

        // Recupera l'ID dell'utente autenticato
        $userId = Auth::id();

        // Recupera gli articoli dell'utente loggato in ordine di data decrescente
        $article = Article::where('user_id', $userId)->latest()->get();

        return view('article.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $request->validate([
            'title' => 'required|unique:articles|min:5',
            'subtitle' => 'required|min:5',
            'body' => 'required|min:10',
            'image' => 'image|required',
            'category' => 'required',
            'tags' => 'required',
        ]);
    
        $article = Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'image' => $request->file('image')->store('public/images'),
            'category_id' => $request->category,
            'user_id' => Auth::user()->id,
        ]);
    
        $tags = explode(',', $request->tags);
    
        foreach ($tags as $i => $tag) {
            $tags[$i] = trim($tag);
        }
    
        foreach ($tags as $tag) {
            $newTag = Tag::updateOrCreate(
                ['name' => $tag],
                ['name' => strtolower($tag)],
            );
    
            $article->tags()->attach($newTag);
        }
    
        return redirect(route('homepage'))->with('message', 'Post inserito con successo');
    }
    





    /**
     * Display the specified resource.
     */

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //  //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
