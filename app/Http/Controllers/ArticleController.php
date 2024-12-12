<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * @return void
     */
    public function index()
    {
        // Fetch the latest 3 articles from the database
        $article = Article::latest()->take(3)->get();
    
        // Pass only $article to the view
        return view('home', compact('article'));
    }
    
    

     public function artindex($id)
     {

         $article = Article::findOrFail($id);
         $content = json_decode(file_get_contents(resource_path('views/articles/content/article_content.json')), true);
         $contentKey = 'artcontent' . $id;  
     
         if (isset($content[$contentKey])) {
             $article->content = $content[$contentKey];
         }
     
         if (!empty($article->content)) {
             return view('articles.showart_filled', compact('article'));
         } else {
             return view('articles.showart_default', compact('article'));
         }
     }

    // Search Control
    public function showCatalog(Request $request)
    {
        $search = $request->input('search');

        $articles = Article::query()
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', '%' . $search . '%');
            })
            ->latest()
            ->get();
        return view('catalog', compact('articles', 'search'));
    }
}
