<!DOCTYPE html>
<html>

<link rel="stylesheet" href="{{  asset('css/style.css') }}" />

</head>
<body>

@include("parts.header")

<main>
    <h2>Welcome.</h2>
	<p class="subtitles">ようこそ</p>
	<p>&nbsp;</p>
	<h2>What you can do on this website. :)</h2>
	<p class="subtitles">このサイトではこんなことができます</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>

    <div class="list"> 
        <div class="list_item">
            <img src="S__14213126.jpg" class="image">
            <div class="text">
                <p>&nbsp;</p><br>
                ドリンクの味に特化したレビューができます。<br>
                コメント以外にも、星評価で感覚的にレビューすることが可能です。<br>
                「コーヒーが苦手だけど飲めた」「甘いもの好きな人は飲んで欲しい！」<br>
                など他では得られない情報をお届けします。<br>
            </div>
        </div>
        <br>
        <div class="list_item">
            <img src="S__14213124.jpg" class="image">
            <div class="text">
                <p>&nbsp;</p><br>
                どんなドリンクがあるか検索ができます。<br>
                ドリンク名とカテゴリーの2種類の調べ方で、飲みたいものを見つけます。<br>
                <a href="/search">
                  <button type="submit" class="btn_4">Go !</button>
                </a>
                </button>
            </div>
        </div>   
        <br> 
        <div class="list_item">
            <img src="S__14213122.jpg" class="image">
            <div class="text">
            <p>&nbsp;</p><br>
                期間限定ドリンクなどのおすすめ記事が読めます。<br>
                おすすめカスタマイズなども随時紹介していきます。<br>
                <a href="/blog">
                  <button type="submit" class="btn_5">Go !</button>
                </a>
            </div>
        </div>
    </div>
</main>

@include("parts.footer")

</body>
</html>