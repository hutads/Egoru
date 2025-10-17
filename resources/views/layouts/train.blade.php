<!doctype html>
<html lang="en">
<head>
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="spinner-grow" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="{{route('main.index')}}">Main</a>
                        <a class="nav-link" href="{{route('posts.index')}}">Posts</a>
                        <a class="nav-link" href="{{route('about.index')}}">About</a>
                        <a class="nav-link" href="{{route('contacts.index')}}">Contacts</a>
                        <a class="nav-link" href="{{route('training.index')}}">Training</a>
                        <a class="nav-link" href="{{route('games.index')}}">Games</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    @yield('tren')
</div>
</body>
</html>
