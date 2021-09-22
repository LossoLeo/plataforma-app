<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">

    <title>@yield('title')</title>
    <link href="{{asset('styles.css')}}" rel="stylesheet">

    <!-- Fonte Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
          crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
          integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>
<body>
<div class="center">
    <header>
        <!-- <div class="logo">
            <img src="{{asset('images/logo.jpg')}}">
        </div> -->
        <div class="menu">
            <a href="/">Início</a>
            <a href="#">Conta</a>
            <a href="/planos">Planos</a>
            <a href="#">Monte sua empresa</a>
        </div> <!-- Menu 1 -->
        <div class="menu">
            <a href="#">Quem somos</a>
            <a href="#">Politica de Privacidade</a>
        </div> <!-- Menu 2 -->
    </header> <!-- Header -->
</div> <!-- Center -->

@yield('content')

<footer>
    <p>Esse é um ambiente de testes feito por &copy;<a href="https://github.com/grakalnark" target="_blank"</a>Leonardo
        Losso.</p>
</footer>
</body>
</html>