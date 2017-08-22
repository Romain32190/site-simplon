<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getBlog() {
    	$articles = DB::table('blog')->orderBy('created_at', 'desc')->get() ;
    	return view('/blog', ['articles' => $articles]);
    }
}
