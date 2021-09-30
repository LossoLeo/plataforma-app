@extends('layouts.main')

@section('title', 'Meu Perfil')

@section('content')

    <style>
        body {
            background: rgb(142, 162, 239)
        }



        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 13px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }

        .col{
            text-align: -webkit-center;
            padding-bottom: 15px;
        }
        img{
            max-width: 100%;
            border-radius: 15px;
        }
    </style>


    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img src="{{asset('images/cr7.jpeg')}}"><span
                        class="font-weight-bold">{{Auth::user()->name}}</span><span
                        class="text-black-50">{{Auth::user()->email}}</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Configurações do Meu Perfil</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Nome</label><input type="text" class="form-control"
                                                                                       placeholder="{{Auth::user()->name}}"
                                                                                       value=""></div>
                        <div class="col-md-6"><label class="labels">Sobrenome</label><input type="text"
                                                                                            class="form-control"
                                                                                            value=""
                                                                                            placeholder="Sobrenome">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Telefone para Contato</label><input type="text"
                                                                                                         class="form-control"
                                                                                                         placeholder="Com DDD"
                                                                                                         value=""></div>
                        <div class="col-md-12"><label class="labels">Endereço</label><input type="text"
                                                                                            class="form-control"
                                                                                            placeholder="Endereço"
                                                                                            value=""></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text"
                                                                                         class="form-control"
                                                                                         placeholder="{{Auth::user()->email}}"
                                                                                         value=""></div>
                        <div class="col-md-12"><label class="labels">Escolaridade</label><select id="education"
                                                                                                 class="form-control"
                                                                                                 name="education">
                                <option value="Fundamental Incompleto">Fundamental Incompleto</option>
                                <option value="Fundamental Completo">Fundamental Completo</option>
                                <option value="Médio Incompleto">Médio Incompleto</option>
                                <option value="Médio Completo">Médio Completo</option>
                                <option value="Superior Incompleto">Superior Incompleto</option>
                                <option value="Superior Completo">Superior Completo</option>
                            </select>

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Cidade</label><input type="text"
                                                                                         class="form-control"
                                                                                         placeholder="Cidade"
                                                                                         value=""></div>
                        <div class="col-md-6"><label class="labels">Estado</label><input type="text"
                                                                                         class="form-control"
                                                                                         value=""
                                                                                         placeholder="Estado">
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="button">Salvar Perfil</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience">
                        <span>Adicionar Experiência</span><span class="border px-3 p-1 add-experience"><i
                                class="fa fa-plus"></i>&nbsp;Experiência</span></div>
                    <br>
                    <div class="col-md-12"><label class="labels">Minhas Experiências</label>
                        <br>
                    </div>
                </div>
            </div> <!-- experiencia -->

            <div class="row">
                <div class="col">
                    <h2>Lista de Hobbys</h2>
                    <button class="btn btn-primary">+ Hobbys</button>
                </div>
                <div class="col">
                    <h2>Lista de Times</h2>
                    <button class="btn btn-primary">+ Times</button>
                </div>
            </div>
        </div>
    </div>

@endsection
