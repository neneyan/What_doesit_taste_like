<!DOCTYPE html>
<html>

<link rel="stylesheet" href="{{  asset('css/style.css') }}" />

</head>
<body>

@include("parts.header")

<main>
    <h2>Let's go STARBUCKS !</h2>
    <p class="subtitles">読むとスタバに行きたくなる、そんな記事に出会えますように</p>
    <p>&nbsp;</p>

  @foreach ($articles as $article)

    <div class="articles_list">
        <h3 class="list">{{ $article->title }}</h3>
        <a href="{{ route('text.show' , $article->id) }}">
          <button type="submit" class="btn_6">記事を読む</button>
        </a> 
    </div>
  
  @endforeach

</main>

@include("parts.footer")

</body>
</html>