<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="stylesheet" href="../resources/css/work.css">


    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->

</head>

<body>
    <nav>
        <div class="container lime pullUp">
            <a href="../public">HOME</a>
            <a href="../public/work">PORTFOLIO</a>
            <a href="../public/about">ABOUT</a>
            <a href="../public/contact">CONTACT</a>
        </div>
    </nav>
    <div class="backgr">
        <div class="stars"></div>
        <div class="twinkling"></div>
    </div>
    <ul class="projects">
        @foreach($werken as $werk)
        <a href="//{{$werk->url}}">
            <li>
                <h2>{{$werk->title}}</h2>
                <img class="image_project" src="{{ asset('storage/images/'.$werk->file)}}" alt="">



            </li>
        </a>
        @endforeach
    </ul>

    <footer>
        &copy 2021 Daphne Mol - Contact me at me@daphne.network
    </footer>
</body>

</html>