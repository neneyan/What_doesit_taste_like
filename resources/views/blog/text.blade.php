<!DOCTYPE html>
<html>

<link rel="stylesheet" href="{{  asset('css/style.css') }}" />

</head>
<body>

@include("parts.header")

<main>
    <div class="d_articles_list">
      <p>タイトル：{{ $articles->title }}</p>
    </div>

    @foreach($texts as $text)

        <div class="comments_list">
	        <p class="list">{{ $texts->artcle_text }}</p>
        </div>
    
    @endforeach

</main>

@include("parts.footer")

</body>
</html>