<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Review;

class ReviewController extends Controller
{
  
  // 「商品詳細」ページへの遷移
  public function show($id)
  {
	  $products = Product::find($id);
    $reviews = Review::where('products_id',$id)->get();

    // 指定したViewにデータを渡す
	return view('review', [
      'products' => $products,
      'reviews' => $reviews,
    ]);
  }

  // どのデータをどのテーブルに保存するか
  public function store(Request $request) 
  {
    // インスタンス作成
    $reviews = new Review();

    // コメント内容
    // ( input )
    $reviews->products_id = $request->input('products_id');
    $reviews->swt_btr_star = $request->input('swt_btr_star');
    $reviews->drink_star = $request->input('drink_star');
    $reviews->comment = $request->input('comment');
    $reviews->save();
    
    return redirect()->back();
    //('/comments')->with('message','投稿が完了しました。');
  }


  // レビューの削除
  // public function destroy($id)
  // {
    //$reviews=Review::find($id);
    //$reviews->delete();

    //return redirect()->back();
      
    // route ('articles.show')->with('削除しました');
  // }

}
