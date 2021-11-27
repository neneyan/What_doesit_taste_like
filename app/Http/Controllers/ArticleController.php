<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class ArticleController extends Controller
{
  // 初期表示（記事投稿の画面）
  public function index()
  {
    // リソースのリスト表示
    $articles = Article::all();
    return view("blog.article", ['articles' => $articles]);
  }
  
}
