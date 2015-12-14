<!doctype html>
<html>
<head>
    <div align="center">
        <br>
        <img
                src='https://a248.e.akamai.net/f/1015/2073/5m/blogs-images.forbes.com/jonentine/files/2014/05/bee_pollen11.jpg'
                style='width:200px'
                alt="Kvasir's Wisdom Logo"
                class='img-rounded'
                >
        <br>
        <br>
    </div>

    <title>
        {{-- Yield the title if it exists, otherwise default to 'Kvasir's Wisdom' --}}
        @yield('title',"Kvasir's Wisdom")
    </title>
    <h2 align='center' class="bg-primary">@yield('title',"Kvasir's Wisdom")</h2>
    <meta charset='utf-8'>
    <link href="/css/kvasirswisdom.css" type='text/css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')
</head>

<body>

<header>
    @if(Auth::check())
        <ul class="nav nav-tabs">
            <li role="presentation"><a href='/'>Home</a></li>
            <li role="presentation"><a href='/recipes/show'>All Recipes</a></li>
            <li role="presentation"><a href='/batches/show'>All Batches</a></li>
            <li role="presentation"><a href="/recipes/myrecipes">My Recipes</a></li>
            <li role="presentation"><a href="/batches/mybatches">My Batches</a></li>
            <li role="presentation"><a href='/logout'>Logout</a></li>
            <br>
            <br>
        </ul>
    @else
        <ul class="nav nav-tabs">
            <li role="presentation"><a href="/">Home</a></li>
            <li role="presentation"><a href="/recipes/show">Recipes</a></li>
            <li role="presentation"><a href="/batches/show">Batches</a></li>
            <li role="presentation"><a href="/login">Login/Register</a></li>
            <br>
            <br>
        </ul>
    @endif


</header>

<section>
    {{-- Main page content will be yielded here --}}
    <div align="center">
    @yield('content')
    </div>
</section>

<footer>
    <div align="center">
        <br>
        <br>
        &copy; {{ 'Benjamin Norman ' . date('Y') }}

    </div>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

{{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
@yield('body')

</body>
</html>