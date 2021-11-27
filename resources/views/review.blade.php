<!DOCTYPE html>
<html>

<link rel="stylesheet" href="{{  asset('css/style.css') }}"/>

</head>
<body>

@include("parts.header")

<main>
  <div class="d_products_list">
    <p class="product_name">{{ $products->product_name }}</p>
    <p class="overview">{{ $products->overview }}</p>
  </div>
  <div class="price_list">
    <ul>
      <li>Short<br>{{ $products->price_s }}</li>
      <li>Tall<br>{{ $products->price_t }}</li>
      <li>Grande<br>{{ $products->price_g }}</li>
      <li>Venti<br>{{ $products->price_v }}</li>
    </ul>
  </div>
   

  <!-- レビュー投稿フォーム -->
  <div class="hidden_box">
    <label for="label_1" class="review_button">Review.</label>
    <input type="checkbox" id="label_1"/>
    <div class="hidden_show">
      <form method="post" action="{{ route('review.store') }}">
       @csrf
      
        <div class="input_comment">
          <input type="hidden" name="products_id" value="{{ $products->id }}" >

          <div class="rate_form_1">
            <p>　甘い　</p>
            <input id="star5_1" type="radio" name="swt_btr_star" value="5">
            <label for="star5_1">★</label>
            <input id="star4_1" type="radio" name="swt_btr_star" value="4">
            <label for="star4_1">★</label>
            <input id="star3_1" type="radio" name="swt_btr_star" value="3">
            <label for="star3_1">★</label>
            <input id="star2_1" type="radio" name="swt_btr_star" value="2">
            <label for="star2_1">★</label>
            <input id="star1_1" type="radio" name="swt_btr_star" value="1">
            <label for="star1_1">★</label>
            <p>　苦い　</p>
          </div>

          <div class="rate_form_2">
            <p>ごくごく</p>
            <input id="star5_2" type="radio" name="drink_star" value="5">
            <label for="star5_2">★</label>
            <input id="star4_2" type="radio" name="drink_star" value="4">
            <label for="star4_2">★</label>
            <input id="star3_2" type="radio" name="drink_star" value="3">
            <label for="star3_2">★</label>
            <input id="star2_2" type="radio" name="drink_star" value="2">
            <label for="star2_2">★</label>
            <input id="star1_2" type="radio" name="drink_star" value="1">
            <label for="star1_2">★</label>
            <p>ゆっくり</p>
          </div>
          <p>&nbsp;</p>
        
          <textarea class="comment_form" name="comment" cols="50" rows="10">{{ old('comment') }}</textarea>        
          <button type="submit" class="btn_2">送信する</button>
        </div>
      </form>
    </div>
  </div>

   <!-- レビュー表示 -->
   <p class="user_voice">User voice.</p>

   @foreach($reviews as $review)

    <div class="review_list">
      <div class="review_star">
      
      @if($review['swt_btr_star'] === 1)
        <p>苦くて</p>
        @elseif($review['swt_btr_star'] === 2)
          <p>少し苦くて</p>
          @elseif($review['swt_btr_star'] === 3)
            <p>ちょうどよくて</p>
            @elseif($review['swt_btr_star'] === 4)
              <p>少し甘くて</p>
              @elseif($review['swt_btr_star'] === 5)
                <p>甘くて</p>
      @endif

      @if($review['drink_star'] === 1)
        <p>だらだら飲みたいドリンク</p>
        @elseif($review['drink_star'] === 2)
          <p>ゆっくり飲みたいドリンク</p>
          @elseif($review['drink_star'] === 3)
            <p>自分のペースで飲めるドリンク</p>
            @elseif($review['drink_star'] === 4)
              <p>サラッと飲めるドリンク</p>
              @elseif($review['drink_star'] === 5)
                <p>ゴクゴク飲めちゃうドリンク</p>
      @endif
      </div>

      <p class="review_comment_list">{{ $review->comment }}</p>


      <!-- <form method="post" action="{{ route('review.destroy' , $review->id) }}" id="form_{{ $review->id }}" class=""> 
        @csrf
        @method('delete')
        <input type="submit" value="削除" class="btn_3" onclick='return confirm("削除しますか？");'>
      </form> -->
    </div>
    
   @endforeach

</main>

@include("parts.footer")

</body>
</html>