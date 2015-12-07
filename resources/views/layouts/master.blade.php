<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Kvasir's Wisdom' --}}
        @yield('title',"Kvasir's Wisdom")
    </title>

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
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="#">Home</a></li>
        <li role="presentation"><a href="#">Recipes</a></li>
        <li role="presentation"><a href="#">Batches</a></li>
    </ul>
    <div align="center">
        <h2 align='center' class="bg-primary">@yield('title',"Kvasir's Wisdom")</h2>
        <img
            src='https://a248.e.akamai.net/f/1015/2073/5m/blogs-images.forbes.com/jonentine/files/2014/05/bee_pollen11.jpg'
            style='width:400px'
            alt="Kvasir's Wisdom Logo"
            class='img-rounded'
        >
    </div>
</header>

<section>
    {{-- Main page content will be yielded here --}}
    @yield('content')
</section>

<footer>
    &copy; {{ 'Benjamin Norman ' . date('Y') }}
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

{{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
@yield('body')

</body>
</html>