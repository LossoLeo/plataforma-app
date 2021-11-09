<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Calendar;

class CalendarController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Calendar::whereDate('start', '>=', $request->start)/* Seleciona o inicio do evento */
            ->whereDate('end', '<=', $request->end)/* Seleciona o fim do evento */
            ->get(['id', 'title', 'start', 'end']); /* Pega todos os dados relacionados ao evento */
            return response()->json($data); /* Retorna todos os dados dentro da variável data */
        }
        return view('full-calendar');
    }

    public function action(Request $request) /* Definição de todas as ações do sistema */
    {
        if ($request->ajax()) {
            if ($request->type =='add'){ /* If para CRIAR um evento */
                $event = Calendar::create([ /* Cria um novo evento com os parametros abaixo e joga na variável event */
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end
                ]);
                return response()->json($event); /* Retorna os dados da variável event */
            }

            if ($request->type == 'update'){ /* If para ATUALIZAR um evento */
                $event = Calendar::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end
                ]);
                return response()->json($event);
            }

            if ($request->type == 'delete'){
                $event = Calendar::find($request->id)->delete();
                return response()->json($event);
            }
        }
    }
}
