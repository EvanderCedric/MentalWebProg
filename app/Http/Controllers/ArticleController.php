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

       
}
