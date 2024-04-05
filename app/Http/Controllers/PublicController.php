<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function __construct()

    {
        // $this->$middleware ('auth')-> except ('homepage');
    }

    public function homepage()
    {
        // Recupera gli ultimi 4 articoli in ordine di data decrescente
        $article = Article::orderBy('created_at', 'desc')->take(4)->get();

        return view('welcome', ['articles' => $article]);
    }
    public function careers()
    {
        return view('careers');
    }

    public function careerSubmit (Request $request)
    {
        $request->validate(
            [
                'role'=> 'required',
                'email' => 'required | email',
                'message' => 'required',
            ]);
            dd($request->all());
    }

}
