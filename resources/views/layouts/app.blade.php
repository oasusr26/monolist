<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="monolist, モノリスト, 楽天, rakuten">
        <meta name="discription" content="MONOLIST SITE">
        <meta name="author" content="oasusr26">
        <meta name="copyright" content="&copy 2017 MONOLIST.">
        <meta name="robots" content="noindex, nofollow">
        <title>Monolist</title>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Kite+One" rel="stylesheet">
        
    </head>
    <body>
        @include('commons.navbar')

        @yield('cover')

        <div class="container">
            @include('commons.error_messages')
            @yield('content')
        </div>

        @include('commons.footer')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
