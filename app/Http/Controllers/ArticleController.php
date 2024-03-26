<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
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
            'category'=> $request->category,
            "user_id" =>  auth()->user()->id,    

        ]);

        $article->categories()->attach($article->categories);

        if($request->hasFile('image')){
            $path="public/".$article->id."/";
            $name= uniqid().".". $article->file('image')->extension();
            $article->file('image')->storeAs($path,$name);
            $article->image= $path.$name;
            $article->save();
        }
        return redirect(route('homepage'))->with(['success'=>'Post inserito con successo!']);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view("article.edit", ["article" => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $article->update([

            "name" => $request["name"],
            "description" => $request["description"],
            "price" => $request["price"],
            "category_id" => $request["category_id"],


        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
