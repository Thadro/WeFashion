<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeFashion</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
</head>
<body>
    <header>
        <div class="header-ctnr">
            <a href="{{ route('welcome') }}" class="accueil">
                <img src="{{asset('img/logo/logo.svg')}}" alt="">
            </a>
            @include('nav')
        </div>
    </header>

    @section('content')
		@show

    @include('footer')
</body>
</html>