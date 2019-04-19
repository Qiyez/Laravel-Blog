<html>
<head>
    <title>{{ $post->title }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>{{ $post->title }}</h1>
    <h5>{{ $post->published_at }}</h5>
    <hr>
    {!! nl2br(e($post->content)) !!}
    <hr>
    <button class="btn btn-primary" onclick="history.go(-1)">
        « Back
    </button>
</div>
</body>
</html>