<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <title>Laravel BoolPress</title>
</head>
<body>
    <!-- <div class="container">
        @foreach($allposts as $post)
            <div class="post-card">
                <div class="post-pfp">
                    <img src="{{$post->picture}}" alt="">
                </div>
                <div class="post-desc">
                    <h1>{{ $post['title']}}</h1>
                    <h3>{{ $post['description']}}</h3>
                    <span>{{ $post['date']}}</span>
                    <span>{{ $post['date']}}</span>
                    <span>{{ $post['vote']}}</span>
                </div>
            </div>
        @endforeach
    </div> -->
    @dump($allposts);
</body>
</html>