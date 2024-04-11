<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
  public function dashboard()
  {
    // $adminRequests = User::where('is_admin', NULL)->get();
    // $revisorRequests = User::where('is_revisor', NULL)->get();
    // $writerRequests = User::where('is_writer', NULL)->get();
    $roleRequests = User::where('requested_role', true)->get();
    $tags = Tag::all();
    $metaInfos = Article::all();

    return view('admin.dashboard', compact('roleRequests', 'tags', 'metaInfos'));
  }

  public function setAdmin(User $user)
  {
    $user->is_admin = true;
    $user->save();

    return redirect(route('admin.dashboard'))->with('message', 'Hai concesso il ruolo di amministratore all\'utente scelto');
  }


  public function setRevisor(User $user)
  {
    $user->is_revisor = true;
    $user->save();

    return redirect(route('admin.dashboard'))->with('message', 'Hai concesso il ruolo di revisore all\'utente scelto');
  }

  public function setWriter(User $user)
  {
    $user->is_writer = true;
    $user->save();

    return redirect(route('admin.dashboard'))->with('message', 'Hai concesso il ruolo di revisore all\'utente scelto');
  }

  public function editTag(Request $request, Tag $tag)
  {

    $request->validate([

      'name' => 'required|unique:tags',

    ]);

    $tag->update([
      'name' => strtolower($request->name),
    ]);

    return redirect(route('admin.dashboard'))->with('message', 'Hai aggiornato correttamente il tag');
  }

  public function deliteTag (Tag $tag){
    foreach ($tag->articles as $article) {
      $article->tags()->detach($tag);
    }

    $tag->delete();

    return redirect(route('admin.dashboard'))->with('message', 'Hai eliminato correttamente il tag');

  }

}
