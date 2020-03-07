<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <form action="{{route('postCreate')}}" method="post">
            @csrf
            @method('POST')
            <label for="title">Aggiungi nome nuovo post:</label>
            <input  type="text" name="title" value="" placeholder="Inserisci nome post">
            <button type="submit" >Aggiungi</button>

        </form>
        <div>
            <ul>
                @foreach ($posts as $post)
                    <li> 
                        Titolo post:
                    <strong>{{$post->title}}</strong> <a href="{{route('postDelete', $post->id)}}">elimina post</a> 
                            <ul>
                                Commenti: <br>
                                @if ($post->comments() -> count() == 0)
                                    <span>Ancora nessun commento</span> <br>
                                    <form action="{{route('commentCreate', $post->id)}}" method="post">
                                        @csrf
                                        @method('POST')
                                        <input  type="text" name="body" value="" placeholder="Inserisci un commento">
                                        <button type="submit" >Aggiungi</button>
                                    </form>
                                @else
                                    @foreach ($post->comments as $comment)
                                    <li>
                                        <strong>
                                            {{$comment->body}} 
                                        </strong>
                                        <br> <a href="{{route('commentDelete', $comment->id)}}">elimina commento</a>
                                        
                                        
                                    </li> 
                                    
                                    @endforeach
                                    <form action="{{route('commentCreate', $post->id)}}" method="post">
                                        @csrf
                                        @method('POST')
                                        <input  type="text" name="body" value="" placeholder="Inserisci un commento">
                                        <button type="submit" >Aggiungi</button>
                                    </form>
                                @endif
                            </ul>
                    </li> <br><br>
                @endforeach
            </ul>
        </div>
    </body>
</html>
