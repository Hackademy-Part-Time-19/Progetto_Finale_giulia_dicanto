<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
   public function dashboard()
   {
      $unrevisionedArticles = Article::whereNull('is_accepted')->get();
      $acceptedArticles = Article::where('is_accepted', true)->get();
      $rejectedArticles = Article::where('is_accepted', false)->get();
      $categories = Category::all();
      $tags = Tag::all();
      $articles = Article::all();

      return view('revisor.dashboard', compact('unrevisionedArticles', 'acceptedArticles', 'rejectedArticles', 'categories', 'tags', 'articles'));

   }

   public function acceptArticle(Article $article)
   {
      $article->update(['is_accepted' => true]);

        return redirect()->route('revisor.dashboard')->with('message','Hai accettato il post scelto');

   }

public function rejectArticle(Article $article)
{
   $article->update(['is_accepted' => false]);

   return redirect()->route('revisor.dashboard')->with('message','Hai respinto il post scelto');
}

public function undoArticle(Article $article)
{
   $article->update(['is_accepted' => null]);

   return redirect()->route('revisor.dashboard')->withMessage('Hai riportato il post scelto in revisione');

}
}
