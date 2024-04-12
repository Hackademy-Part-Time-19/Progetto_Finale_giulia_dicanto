<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WriterController extends Controller
{
    public function dashboard()
    {
        $articles = Auth::user()->articles()->latest()->get();

        $unrevisionedArticles = $articles->where('is_accepted', '===', NULL);
        $acceptedArticles = $articles->where('is_accepted', true);
        $rejectedArticles = $articles->where('is_accepted', '===', 0);

        return view('writer.dashboard', compact('unrevisionedArticles', 'acceptedArticles', 'rejectedArticles'));
    }
}
