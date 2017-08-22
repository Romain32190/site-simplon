<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Auth;
use App\Article;

class BlogController extends Controller
{
    public function getBlog() {
    	$articles = DB::table('blog')->join('users','users.id','blog.auteur')->select('blog.*','users.userName')->orderBy('created_at', 'desc')->get() ;
    	return view('/blog', ['articles' => $articles]);
    }

    public function nvArticle(Request $request){

    	$article = new article;

    	$article->titre = $request->titre;
    	$article->article = $request->article;
    	$article->auteur = Auth::id();
    	$article->save();

    	return redirect('/blog');
    }
}
