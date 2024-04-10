<?php

namespace App\Http\Controllers;

use App\Mail\CareerRequestMail;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
class PublicController extends Controller
{
    public function __construct()
    {
        // $this->$middleware ('auth')-> except ('homepage');
    }

    public function homepage()
    {
        // Recupera gli ultimi 4 articoli in ordine di data decrescente
        $article = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(4)->get();

        return view('welcome', ['articles' => $article]);
    }
    public function careers()
    {
        return view('careers');
    }

    public function careersSubmit(Request $request)
    {
        $request->validate(
            [
                'role' => 'required',
                'email' => 'required | email',
                'message' => 'required',
            ]
        );

        $user = Auth::user();
        $role = $request->role;
        $email = $request->email;
        $message = $request->message;

        Mail::to('admin@theaulabpost.it')->send(new CareerRequestMail(compact('role', 'email', 'message')));

        switch ($role) {
            case 'admin':
                $user->is_admin = NULL;
                break;

            case 'revisor':
                $user->is_revisor = NULL;
                break;

            case 'writer':
                $user->is_writer = NULL;
                break;
        }

        $user->requested_role= true;

        $user->update();

        return redirect(route('homepage'))->with('message','Grazie per averci inoltrato la tua candidatura!');
    }

}
