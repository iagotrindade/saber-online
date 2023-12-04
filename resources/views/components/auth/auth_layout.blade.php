<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
        <title>Saber Online - {{$pageTitle}}</title>
    </head>

    <body class="login-body">
        <main>
            <div class="login-area default-flex">
                <div class="left-login-area default-flex-column">
                    <h1 class="left-login-title">Saber Online</h1>

                    <img class="login-image" src="{{url('/assets/images/layout-images/login-image.png')}}" alt="Login Image">

                    <h2 class="login-subtitle">O Lugar Certo Para as Pessoas Certas</h2>

                    <p class="login-text">Junte-se a nós e embarque nessa jornada rumo aos seus sonhos</p>
                </div>

                <div class="right-login-area default-flex-column">
                    <h1 class="right-login-title">{{$title}}</h1>

                    {{$slot}}
                </div>
            </div>
        </main>

        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </body>
</html>
