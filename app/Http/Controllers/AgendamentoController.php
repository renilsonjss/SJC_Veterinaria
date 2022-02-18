<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agendamento;

class AgendamentoController extends Controller
{
    public function create() {
        return view('agendamentos.create');
    }

    public function relatorios() {
        return view('relatorios');
    }

    public function index() {

        $agendamentos = Agendamento::all();
    
        return view('welcome', ['agendamentos' => $agendamentos]);
    }

    public function store(Request $request) {

        $agendamento = new Agendamento;

        $agendamento->data_agendamento = $request->data_agendamento;
        $agendamento->horario_agendamento = $request->horario_agendamento;
        $agendamento->vacina_agendamento = $request->vacina_agendamento;

        $agendamento->save();

        return redirect('/')->with('msg', 'Vacinação agendada com sucesso!');

    }

    public function show($id) {
        $agendamento = Agendamento::findOrFail($id);

        return view('agendamentos.show', ['agendamento' => $agendamento]);
    }
}