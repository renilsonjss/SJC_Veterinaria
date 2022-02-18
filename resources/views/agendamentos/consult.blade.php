@extends('layouts.main')

@section('title', 'Consultar agendamentos')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Consultar agendamentos</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>

<div id="agendamentos-container" class="col-md-12">
    <h2>Agendamentos</h2>
    <p class="subtitle">Veja aqui os seus agendamentos para os próximos dias</p>
    <div id="cards-container" class="row">
        @foreach ($agendamentos as $agendamento)
            <div class="card col-md-3">
                <img src="/img/calendario.jpg" alt="{{$agendamento->data_agendamento}}">
                <div class="card-body">
                    <p class="card-title">Seu agendamento</p>
                    <h5 class="card-date">{{$agendamento->data_agendamento}}</h5>
                    <p class="card-time">{{$agendamento->horario_agendamento}}</p>
                    <a href="#" class="btn btn-primary">Ver mais detalhes</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection