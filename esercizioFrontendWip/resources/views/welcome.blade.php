<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">    
        <body>
    
            <i id="menu" class="fas fa-bars">
            </i>
            <ul class="invisibile" id="card-trigger">
                <li ><a href="javascript:void(0)" data-sku="7">post 7</a></li>
                <li ><a href="javascript:void(0)" data-sku="2">post 2</a></li>
                <li ><a href="javascript:void(0)" data-sku="3">post 3</a></li>
            </ul>
    
        <a href="javascript:void(0)" id="remover">remove cards</a>
    
        <div id="cards-holder"></div>
        
        <script src="{{ asset('js/app.js') }}"></script>
    </body>

    
</html>
