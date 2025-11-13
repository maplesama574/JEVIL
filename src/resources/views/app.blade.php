<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Top Page</title>
<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/common.css')}}">
@yield('css')
</head>

<body>
<header class="header-wrapper">
    <a class="header-nav" href="{{ route('index') }}">Top Page</a>
    <div class="header-wrapper__nav">
        <a class="header-nav" href="{{route('about')}}">About</a>
        <a class="header-nav" href="{{route('log')}}">Diary</a>
        <a class="header-nav" href="{{route('hidden')}}">Lock Diary</a>
    </div>
</header>

<main class="content">
@yield('content')
</main>
</body>
</html>