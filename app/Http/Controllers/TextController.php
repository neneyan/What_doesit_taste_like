<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Text;

class TextController extends Controller
{
    // 「記事を読む」ページへの遷移
  public function show($id)
  {
	$articles = Article::find($id);
    $texts = Text::where('articles_id',$id)->get();

    // 指定したViewにデータを渡す
	  return view('blog.text', [
         'articles' => $articles,
         'texts' => $texts,
    ]);
  }
}
