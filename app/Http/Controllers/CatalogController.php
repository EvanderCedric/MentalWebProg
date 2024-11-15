<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function showCatalog(Request $request)
    {
        $search = $request->input('search');
    
        // If there is a search term, filter the articles based on title
        if ($search) {
            $article = Article::where('title', 'like', '%' . $search . '%')->get();
        } else {
            // Otherwise, show all articles
            $article = Article::all();
        }
    
        // Pass the articles to the view
        return view('catalog', compact('article', 'search'));
    }

    public function home(Request $request)
    {
        $search = $request->get('search', '');
        return view('home', compact('search'));
    }

    public function catalog(Request $request)
    {
        $search = $request->get('search', '');
        return view('catalog', compact('search'));
    }

    public function aboutus(Request $request)
    {
        $search = $request->get('search', '');
        return view('aboutus', compact('search'));
    }

    public function contactus(Request $request)
    {
        $search = $request->get('search', '');
        return view('contactus', compact('search'));
    }

    

}
