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
    <!-- Fav Icon -->
    <link rel="icon" href="{{ url('images/favicon-32x32.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

</head>
<body>
<div class="center">
    <header>
    <!-- <div class="logo">
            <img src="{{asset('images/logo.jpg')}}">
        </div> -->
        <div class="menu">
            <a href="/">Início</a>
            <a href="/planos">Planos</a>
            @auth
                <a href="/profile">Perfil</a>
            @endauth

        </div> <!-- Menu 1 -->
        <div class="menu">
            @auth
                <div class="dropdown">
                    <button class="dropbtn">Área do Cliente</button>
                    <div class="dropdown-content">
                        <a href="/minha-conta">Minha Conta</a>
                        <form id="logout-form" action=" {{ route('logout') }}" method="POST">
                            @csrf
                            <a href="/logout"
                               class="menu"
                               onclick="event.preventDefault();
                this.closest('form').submit();">Sair</a>
                        </form>
                    </div> <!-- dropdown-content -->
                </div> <!-- dropdown -->
            @endauth
            @guest
                <a href="/login">Fazer Login</a>
            @endguest
        </div> <!-- Menu 2 -->
    </header> <!-- Header -->
</div> <!-- Center -->

@yield('content')

<footer>
    <div class="footer">
        <p>Esse é um ambiente de testes feito por &copy;<a href="https://github.com/grakalnark" target="_blank"</a>
            Leonardo
            Losso.</p>
        <a href="#">Quem somos</a>&nbsp &nbsp
        <a href="#">Politica de Privacidade</a>
    </div> <!-- Footer -->
</footer>
</body>
</html>
