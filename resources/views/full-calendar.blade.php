@extends('layouts.main')

@section('title', 'Calendário')

<meta name="csrf-token" content="{{ csrf_token() }}" />

@section('content')

    <div class="container">
        <br/>
        <h1 class="text-center text-primary"><u>Meu Calendário de Eventos</u></h1>
        <br/>

        <div id="calendar"></div>

    </div>

    <script>

        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var calendar = $('#calendar').fullCalendar({
                editable: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                events: '/calendar',
                selectable: true,
                selectHelper: true,
                select: function (start, end, allDay) {
                    var title = prompt('Nome do Evento');

                    if (title) {
                        var start = $.fullCalendar.formatDate(start, 'DD/MM/YY HH:mm:ss');

                        var end = $.fullCalendar.formatDate(end, 'DD/MM/YY HH:mm:ss');

                        $.ajax({
                            url: "/calendario/action",
                            type: "POST",
                            data: {
                                title: title,
                                start: start,
                                end: end,
                                type: 'add'
                            },
                            success: function (data) {
                                calendar.fullCalendar('refetchEvents');
                                alert("Evento Adicionado com Sucesso");
                            }
                        })
                    }
                },
                editable: true,
                eventResize: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, 'DD/MM/YY HH:mm:ss');
                    var end = $.fullCalendar.formatDate(event.end, 'DD/MM/YY HH:mm:ss');
                    var title = event.title;
                    var id = event.id;
                    $.ajax({
                        url: "/calendario/action",
                        type: "POST",
                        data: {
                            title: title,
                            start: start,
                            end: end,
                            id: id,
                            type: 'update'
                        },
                        success: function (response) {
                            calendar.fullCalendar('refetchEvents');
                            alert("Evento Atualizado!");
                        }
                    })
                },
                eventDrop: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, 'DD/MM/YY HH:mm:ss');
                    var end = $.fullCalendar.formatDate(event.end, 'DD/MM/YY HH:mm:ss');
                    var title = event.title;
                    var id = event.id;
                    $.ajax({
                        url: "/calendario/action",
                        type: "POST",
                        data: {
                            title: title,
                            start: start,
                            end: end,
                            id: id,
                            type: 'update'
                        },
                        success: function (response) {
                            calendar.fullCalendar('refetchEvents');
                            alert("Evento Atualizado");
                        }
                    })
                },

                eventClick: function (event) {
                    if (confirm("Certeza que deseja remover esse evento?")) {
                        var id = event.id;
                        $.ajax({
                            url: "/calendario/action",
                            type: "POST",
                            data: {
                                id: id,
                                type: "delete"
                            },
                            success: function (response) {
                                calendar.fullCalendar('refetchEvents');
                                alert("Evento Deletado!");
                            }
                        })
                    }
                }
            });

        });

    </script

@endsection
