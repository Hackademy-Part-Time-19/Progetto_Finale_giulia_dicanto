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
        $articles = Article::all();
        return view('article.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create', ['categories'=>Category::all()]);
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
            'category_id' => 'required',
        ]);

        $article = auth()->user()->articles()->create([

            'title' => $request->input("name"),
            'subtitle' => $request->input("description"),
            'body' => $request->input("price"),
            'image' => $request->file ('image'),
            'category_id'=> $request->category,
            "user_id" =>  auth()->user()->id,    

        ]);

        $article->categories()->attach($request->categories);

        if($request->hasFile('image')){
            $path="public/".$article->id."/";
            $name= uniqid().".". $article->file('image')->extension();
            $article->file('image')->storeAs($path,$name);
            $article->image= $path.$name;
            $article->save();
        }
        return redirect(route('homepage'))->with(['success'=>'Post inserito con successo!']);
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

            return $articles;
        } else {
            // Se l'utente non è autenticato, puoi gestire questa situazione come preferisci,
            // ad esempio reindirizzando l'utente alla pagina di login
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
