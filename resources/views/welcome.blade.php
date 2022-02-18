@extends('layouts.main')

@section('title', 'SJC Veterinária')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>SJC Veterinária</h1>
</div>

<div id="agendamentos-container" class="col-md-12">
    <h2>Agendamentos</h2>
    <p class="subtitle">Veja aqui os agendamentos para vacinação</p>
    <div id="cards-container" class="row">
        @foreach ($agendamentos as $agendamento)
            <div class="card col-md-3">
                <img src="/img/calendario.jpg" alt="Agendamento para vacinação">
                <div class="card-body">
                    <p class="card-title">Seu agendamento</p>
                    <h5 class="card-date">{{ date('d/m/Y', strtotime($agendamento->data_agendamento)) }}</h5>
                    <p class="card-time">{{$agendamento->horario_agendamento}}</p>
                    <a href="/agendamentos/{{$agendamento->id}}" class="btn btn-primary">Ver detalhes</a>
                </div>
            </div>
        @endforeach
        @if(count($agendamentos) == 0)
            <p>Não foram feitos agendamentos</p>
        @endif
    </div>
</div>

@endsection