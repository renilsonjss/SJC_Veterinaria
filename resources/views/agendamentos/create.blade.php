@extends('layouts.main')

@section('title', 'Agendar vacinação')

@section('content')

<div id="agendamento-create-container" class="col-md-6 offset-md-3">
    <h1>Agendar vacinação</h1>
    <form action="/agendamentos" method="POST">
        @csrf
        <div class="form-group">
            <label for="diaVacinacao">Dia:</label>
            <input type="date" class="form-control" id="data_agendamento" name="data_agendamento" placeholder="Data da vacinação">
        </div>
        <div class="form-group">
            <label for="horarioVacinacao">Horário:</label>
            <input type="time" class="form-control" id="horario_agendamento" name="horario_agendamento" placeholder="Horário da vacinação">
        </div>
        <div class="form-group">
            <label for="vacinaVacinacao">Vacina:</label>
            <select name="vacina_agendamento" id="vacina_agendamento" class="form-control">
                <option value="V10">V10</option>
                <option value="V8">V8</option>
                <option value="Gripe Canina">Gripe Canina</option>
                <option value="Raiva">Raiva</option>
                <option value="Leishmaniose">Leishmaniose</option>
                <option value="Quadrupla felina">Quadrupla felina</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Agendar">
    </form>
</div>

@endsection