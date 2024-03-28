<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\Facades\Storage;

class ArticleController extends Controller
{

    // public function __construct()
    // {
    //     $this->Middleware ('auth')->except('index', 'show');
    // }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy('created_at','desc')->get();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required|unique:articles|min:5',
            'subtitle' => 'required|min:5',
            'body' => 'required|string|min:10',
            'image' => 'image|required',
            'category' => 'required',
        ]);

        $article = auth()->user()->articles()->create([

            'title' => $request->input("title"),
            'subtitle' => $request->input("subtitle"),
            'body' => $request->input("body"),
            'image' => $request->file('image')->store('image'),
            'category_name' => $request->category,

        ]);
        $article = Article::create($request->all());
        $article->category()->attach($request->categories);

        if ($request->hasFile('image')) {
            $path = "public/" . $article->id . "/";
            $name = uniqid() . "." . $request->file('image')->extension();
            $request->file('image')->storeAs($path, $name);
            $article->image = $path . $name;
            $article->save();
        }
        return redirect(route('article.index'))->with(['success' => 'Post inserito con successo!']);
    }


    /**
     * Display the specified resource.
     */

    public function show(Article $article)
    {
        // Verifica se l'utente è autenticato
        if (Auth::check()) {
            // Recupera l'ID dell'utente autenticato
            $userId = Auth::id();

            // Recupera gli articoli dell'utente loggato in ordine di data decrescente
            $articles = Article::where('user_id', $userId)->latest()->get();

            return view('article.show', compact('article'));
        } else {
            // Se l'utente non è autenticato
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Article $article)
    // {
    //  //
    // }

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
