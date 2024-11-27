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
         $article = Article::latest()->get();
         return view('catalog', compact('article'));
     }

     public function artindex($id)
     {
         // Fetch article by ID
         $article = Article::findOrFail($id);
     
         // Load the article content from the JSON file
         $content = json_decode(file_get_contents(resource_path('views/articles/content/article_content.json')), true);
     
         // Check if the article has a 'content' field and if it matches any of the JSON keys
         $contentKey = 'artcontent' . $id;  // Assuming you match the article ID with content keys
     
         if (isset($content[$contentKey])) {
             // Assign the article content from the JSON
             $article->content = $content[$contentKey];
         }
     
         // Determine if the article has custom content
         if (!empty($article->content)) {
             // Use the 'showart_filled' view for articles with content
             return view('articles.showart_filled', compact('article'));
         } else {
             // Fallback to 'showart_default' for articles without content
             return view('articles.showart_default', compact('article'));
         }
     }
     

     public function checkDB(){
        $article = new Article;
        
        dump($article);
    }

    public function insert(){
        $article = new Article;

        
        $article->save();
              
        dump($article);
    }

    public function update()
    {
        $article = Article::find(1);
        if ($article) {

    
            $article->save(); 
        }
        
        dump($article);
    }
    

    public function delete(){
        $article = Article::find(1);
        $article->delete();
              
        dump($article);
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
   
       public function survey(Request $request)
       {
           $search = $request->get('search', '');
           return view('survey', compact('search'));
       }
   
       public function contactus(Request $request)
       {
           $search = $request->get('search', '');
           return view('contactus', compact('search'));
       }
       
}
