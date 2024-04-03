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

    public function __construct()
    {
        // $this->Middleware('auth')->except('index', 'show');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {// Verifica se l'utente è autenticato
        if (!Auth::check()) {
            // Se l'utente non è autenticato, reindirizzalo alla pagina di login
            return redirect()->route('login');
        }

        // Recupera tutte le categorie
        $categories = Category::all();

        // Recupera l'ID dell'utente autenticato
        $userId = Auth::id();

        // Recupera gli articoli dell'utente loggato in ordine di data decrescente
        $article = Article::where('user_id', $userId)->latest()->get();

        return view('article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required |unique:articles|min:5',
            'subtitle' => 'required |min:5',
            'body' => 'required |min:10',
            'image' => 'image | required',
            'category' => 'required',
        ]);

        $article = Article::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'body' => $request->body,
                'image' => $request->file('image')->store('public/images'),
                'category_id' => $request->category,
                'user_id' => Auth::user()->id,

            ]);


        return redirect(route('homepage'))->with('message','Post inserito con successo');

    }


    /**
     * Display the specified resource.
     */

    public function show(Article $article)
    {
        // // Verifica se l'utente è autenticato
        if (Auth::check()) {
            //     // Recupera l'ID dell'utente autenticato
            $userId = Auth::id();

            //     // Recupera gli articoli dell'utente loggato in ordine di data decrescente
            $articles = Article::where('user_id', $userId)->latest()->get();

            return $articles;
        } else {
            //     // Se l'utente non è autenticato
            return redirect()->route('login');
        }

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
