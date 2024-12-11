<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Fetch the latest 3 articles from the database
        $article = Article::latest()->take(3)->get();
    
        // Pass only $article to the view
        return view('home', compact('article'));
    }


    // public function setLanguage($lang)
    // {
    //     if (in_array($lang, ['en', 'id'])) { 
    //         session(['locale' => $lang]); 
    //         App::setLocale($lang); 
    //     }
    // }
    
    public function langen()
    {
        App::setLocale('en'); // Ensure the locale is set
    }
    
    public function langid()
    {
        App::setLocale('id'); // Ensure the locale is set
    }
    
}
