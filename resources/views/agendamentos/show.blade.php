@extends('layouts.main')

@section('title', 'Detalhes do agendamento')

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/agendamento.jpg" class="img-fluid" alt="Agendamento para vacinação">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>Agendamento</h1>
                <p class="agendamento-data"><ion-icon name="calendar-outline"></ion-icon>{{$agendamento->data_agendamento}}</p>
                <p class="agendamento-horario"><ion-icon name="time-outline"></ion-icon>{{$agendamento->horario_agendamento}}</p>
                <p class="agendamento-vacina"><ion-icon name="star-outline"></ion-icon>{{$agendamento->vacina_agendamento}}</p>
            </div>
        </div>
    </div>

@endsection