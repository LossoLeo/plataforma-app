@extends('layouts.main')

@section('title', 'Planos')

@section('content')

    <style>
        .title h1 {
            font-size: 35px;
            text-align: center;
            margin-top: 2%;
        }
        .plans-container {
            margin-top: 35px;
            justify-content: space-around;
            display: flex;
            margin-right: 17%;
            margin-left: 17%;
            max-width: 100%;
            box-sizing: border-box;
            box-shadow: 0 4px 16px -4px rgba(0, 0, 0, 0.4);
            border-radius: 10px;
        }
        .monthly-container{
            padding-top: 20px;
            padding-bottom: 20px;
            align-content: center;
        }
        .yearly-container{
            padding-top: 20px;
            padding-bottom: 20px;
            align-content: center;
        }
        .monthly-head {
            padding-top: 2%;
            padding-bottom: 2%;
            text-align: center;
            margin-bottom: 25px;
            font-size: 30px;
            background-color: silver;
            font-weight: bolder;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .yearly-head {
            padding-top: 2%;
            padding-bottom: 2%;
            text-align: center;
            margin-bottom: 25px;
            font-size: 30px;
            font-weight: bolder;
            background-color: gold;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        ul {
            list-style-type: none;
            margin-left: 10px;
            max-width: 100%;
        }
        i{
            padding-right: 15px;
        }
        ul li {
            margin-bottom: 12px;
            margin-left: -10px;
            display: flex;
            align-items: center;
        }
        span {
            font-size: 15px;
            color: rgba(236, 0, 0, 0.5);
            font-weight: 600;

        }
        .btn-monthly{
            border-radius: 5px;
            font-size: 18px;
            width: 100%;
            display: grid;
            bottom: 5px;
        }
        .btn-yearly{
            border-radius: 5px;
            font-size: 25px;
            width: 100%;
            display: grid;
            bottom: 5px;
        }
        .btn-primary{
            width: 100%;
            display: inline-block;
            text-align: center;
            transition: 0.4s;
        }
        .btn-primary:hover{
            background-color: lightgreen;
            color: black;
        }
        .companies-container{
            margin-top: 35px;
            margin-bottom: 35px;
            text-align: center;
            display: inline-list-item;
            max-width: 100%;
            border-radius: 10px;
        }
        .wppicon img{
            width: 150px;
        }
    </style>

    <section class="main">
        <div class="title">
            <h1>Conheça nossos planos</h1>
        </div> <!-- Title -->
        <div class="plans-container">
            <div class="monthly-container">
                <h1 class="monthly-head">Basic Mensal<br></h1>
                <ul class="monthly">
                    <li><i class="fa-solid fa-clock"></i>Suporte 24 horas</li>
                    <li><i class="fa-solid fa-paper-plane"></i>500 envios por mês</li>
                    <li><i class="fa-solid fa-envelope"></i>Email dedicado para assinantes mensais</li>
                    <li><i class="fa-solid fa-headset"></i>Até 15 chamados de suporte via ticket</li>
                    <li><i class="fa-solid fa-ticket-simple"></i>Resposta do ticket em até 24 horas</li>
                </ul> <!-- monthly -->
                <div class="btn-monthly">
                    <button type="button" class="btn-monthly btn-primary"
                            data-toggle="modal"
                            data-target="#myModal">$ 9,90</button>
                </div> <!-- btn-monthly -->
            </div> <!-- monthly-container -->
            <div class="yearly-container">
                <h1 class="yearly-head"><i class="fa-solid fa-graduation-cap"></i>Premium Anual</h1>
                <ul class="yearly">
                    <li><i class="fa-solid fa-clock"></i>Suporte 24 horas</li>
                    <li><i class="fa-solid fa-paper-plane"></i>Envios ilimitados</li>
                    <li><i class="fa-solid fa-id-badge"></i>Perfil personalizável</li>
                    <li><i class="fa-solid fa-envelope"></i>Email dedicado individual</li>
                    <li><i class="fa-solid fa-headset"></i>Chamados ilimitados de suporte via ticket</li>
                    <li><i class="fa-solid fa-ticket-simple"></i>Tickets respondidos em até 30 minutos</li>
                    <li><i class="fa-solid fa-fingerprint"></i>Monte sua identidade</li>
                    <li><i class="fa-solid fa-fire-flame-curved"></i>Preferência nas buscas</li>
                </ul> <!-- yearly-->
                <div class="btn-yearly">
                    <button type="button" class="btn-yearly btn-primary">$ 39,90</button>
                </div> <!-- btn-yearly -->
            </div> <!-- yearly-container -->
        </div> <!-- plans-container -->
        <div class="companies-container">
            <h4>Quer comprar para a sua empresa?</h4><br>
            <h4>Entre em contato conosco e veja nossas condições especiais!</h4>
        </div> <!-- companies-container-->
        <div class="wppicon">
           <!-- <img src="{{asset('images/logo.jpg')}}"> -->
        </div> <!-- wppicon -->
    </section> <!-- Main section -->

@endsection
