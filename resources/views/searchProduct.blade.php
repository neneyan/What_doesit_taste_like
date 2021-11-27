<!DOCTYPE html>
<html>

<link rel="stylesheet" href="{{  asset('css/style.css') }}" />

</head>
<body>

@include("parts.header")

<main>
  <div class="search_form">
    
    <h2>Search.</h2>
    <p class="subtitles">さっそく検索してみましょう</p>
    <p>&nbsp;</p>
      
    <!--検索フォーム-->
      <div class="search_form_in">
        <form method="GET" action="{{ route('searchproduct')}}">
          <div class="search_product_name">
            <label class="search_title">商品名</label>
            <!--入力-->
            <div class="search_text">
              <input type="text" class="form-control" name="searchWord" value="{{ $searchWord }}">
            </div>
            <div class="search_button">
              <button type="submit" class="btn_1">検索</button>
            </div>
          </div>     

          <!--プルダウンカテゴリ選択-->
          <div class="search_category">
            <label class="search_title">商品カテゴリ</label>
            <div class="search_pull ver01">
              <select name="categoryId" class="form-control" value="{{ $categoryId }}">
                <option value="">未選択</option>

                @foreach($categories as $id => $category_name)
                  
                  <option value="{{ $id }}">
                    {{ $category_name }}
                  </option>  

                @endforeach
              </select>
            </div>
          </div>
        </form>
      </div>


    <!--検索結果テーブル 検索された時のみ表示する-->
    @if (!empty($products))
    
    <p class="search_total">全{{ $products->count() }}件</p>
      
    <table class="table_hover">
        <tr class="product_list">
          <th style="width:400px">商品名</th>
          <th style="width:200px">商品カテゴリ</th>
          <th style="width:200px">価格（Tall）</th>
          <th style="width:200px"></th>
        </tr>
        
        @foreach($products as $product)
          <tr class="product_list_in">
            <div class="">
              <td>{{ $product->product_name }}</td>
              <td>{{ $product->category->category_name }}</td>
              <td>{{ $product->price_t }}</td>
              <td><a href="{{ route('review.show' , $product->id) }}" class="">商品詳細</a></td>
            </div>
          </tr>
        @endforeach   
      
    </table>
    

    <!--テーブルここまで-->
    <!--ページネーション-->
    <div class="d-flex justify-content-center">
      <!-- appendsでカテゴリを選択したまま遷移 -->
      {{ $products->appends(request()->input())->links() }}
    </div>
    <!--ページネーションここまで-->
    @endif
  </div>

</main>

@include("parts.footer")

</body>
</html>