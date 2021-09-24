@extends('layouts.main')

@section('title', 'Início')

@section('content')
    <style>
        *, *:before, *:after {
            box-sizing: border-box;
        }

        body {
            --def: #96B7C4;
            --inv: #fff;
        }

        .welcome {
            background-image: linear-gradient(to right top, #373737, #4a4954, #5c5d73, #6b7294, #7988b7, #789ace, #73ace4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
        }

        .welcome h5 {
            font-size: 26px;
            text-align: center;
            padding-top: 3%;
            padding-bottom: 3%;
            color: #000000;
            font-weight: lighter;
            font-family: Montserrat;
            letter-spacing: 0.5px;
            line-height: 2;
        }

        .banner {
            height: 100vh;
            background-image: url({{url('images/eyetrack.jpg')}});
            background-size: cover;
            background-position: top;
        }

        .banner h1 {
            font-size: 26px;
            color: #44a8b7;
            text-align: left;
            padding-top: 11%;
            padding-left: 1%;
            padding-bottom: 2%;
            letter-spacing: 0.5px;
            line-height: 2;
        }

        .btn {
            position: relative;
            padding: 1.4rem 4.2rem;
            padding-right: 3.1rem;
            font-size: 1.4rem;
            color: var(--inv);
            letter-spacing: 4px;
            text-transform: uppercase;
            transition: all 500ms cubic-bezier(0.77, 0, 0.175, 1);
            cursor: pointer;
            user-select: none;
        }

        .btn:before, .btn:after {
            content: '';
            position: absolute;
            transition: inherit;
            z-index: -1;
        }

        .btn:hover {
            color: var(--def);
            transition-delay: .5s;
        }

        .btn:hover:before {
            transition-delay: 0s;
        }

        .btn:hover:after {
            background: var(--inv);
            transition-delay: .35s;
        }

        .from-center:before {
            top: 0;
            left: 50%;
            height: 100%;
            width: 0;
            border: 1px solid var(--inv);
            border-left: 0;
            border-right: 0;
        }

        .from-center:after {
            bottom: 0;
            left: 0;
            height: 0;
            width: 100%;
            background: var(--inv);
        }

        .from-center:hover:before {
            left: 0;
            width: 100%;
        }

        .from-center:hover:after {
            top: 0;
            height: 100%;
        }

        .container {
            margin-left: 20px;
        }

        .clients {
            padding-top: 5%;
            background-color: white;
            align-content: center;
            text-align: center;
            padding-bottom: 2%;
        }

        .outer-grid {
            padding-top: 2%;
            display: flex;
            flex-wrap: wrap;
        }

        .inner-grid {
            flex: 25%;
            max-width: 100%;
            padding-left: 5%;
            padding-right: 5%;
        }

        .inner-grid img {
            margin-top: 2%;
            border-radius: 50%;
            width: 100%;
            float: left;
            -webkit-transition: margin 0.5s ease-out;
            -moz-transition: margin 0.5s ease-out;
            -o-transition: margin 0.5s ease-out;
        }

        img.hoverImages:hover {
            cursor: pointer;
            margin-top: 5px;
        }

        @media screen and (max-width: 800px) {
            .inner-grid {
                flex: 50%;
                max-width: 50%;
            }
        }

        @media screen and (max-width: 600px) {
            .inner-grid {
                flex: 100%;
                max-width: 100%;
            }
        }


    </style>
    @guest
        <div class="welcome">
            <h5>Olá! É a sua primeira vez aqui?<br>
                Clique na opção abaixo e faça parte da nossa plataforma<br>
                <a href="/register">
                    <div class="btn from-center">Criar conta</div>
                </a>
            </h5>

            <div class="banner">
                <div class="container">
                    <h1>Esteja sempre no radar das melhores empresas</h1>
                    <div class="btn">
                        <a href="/planos">
                            <div class="btn from-center">Conheça nossos planos</div>
                        </a>
                    </div>
                </div> <!-- container -->
            </div> <!-- banner -->
            @endguest
            @auth
                <div class="welcome">
                    <h5>Bem vindo {{$name ?? ''}}<br>
                        Acompanhe aqui a sua conta<br>
                        <a href="/dashboard">
                            <div class="btn from-center">Conta</div>
                        </a>
                    </h5>
                    @endauth
                    <div class="clients">
                        <h1>Conheça as empresas que estão procurando por você!</h1>
                        <div class="outer-grid">
                            <div class="inner-grid">
                                <img class="hoverImages" src="{{asset('images/logo.jpg')}}">
                            </div>
                            <div class="inner-grid">
                                <img class="hoverImages" src="{{asset('images/5643919.jpg')}}">
                            </div>
                            <div class="inner-grid">
                                <img class="hoverImages" src="{{asset('images/4918050.jpg')}}">
                            </div>
                        </div> <!-- outer-grid -->
                    </div> <!-- clients -->
                </div> <!-- welcome -->

@endsection
