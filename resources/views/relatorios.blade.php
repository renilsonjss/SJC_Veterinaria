@extends('layouts.main')

@section('title', 'SJC Veterinária')

@section('content')

<div class="grafico">
    <h4>Quantidade de consultas por mês</h4>
    <canvas id="myChart"></canvas>
</div>
<div class="grafico">
    <h4>Valor total de pagamentos por mês</h4>
    <canvas id="myChart2"></canvas>
</div>
<div class="grafico">
    <h4>Quantidade de animais por tipos atendidos</h4>
    <canvas id="myChart3"></canvas>
</div>

<!-- CHART JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>

<script>
let labels = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];
let data = [200, 220, 180, 200, 190, 240, 230, 210, 180, 185, 190, 200];
let colors = ['#49A9EA', '#36CAAB', '#34495E', '#B370CF'];

let myChart = document.getElementById("myChart").getContext('2d');

let chart = new Chart(myChart, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [ {
            data: data,
            label: 'Quantidade de consultas por mês',
            backgroundColor: colors
        }]
    },
    options: {
        title: {
            text: "Quantidade de consultas por mês",
            display: true
        },
        legend: {
          display: false
        }
    }
});

let labels2 = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];
let data2 = [10, 12, 15, 12, 11, 14, 16, 13, 14, 16, 14, 15];
let colors2 = ['#49A9EA', '#36CAAB', '#34495E', '#B370CF', '#AC5353', '#CFD4D8'];

let myChart2 = document.getElementById("myChart2").getContext('2d');

let chart2 = new Chart(myChart2, {
    type: 'line',
    data: {
        labels: labels2,
        datasets: [ {
            data: data2,
            label: 'Valor total de pagamentos por mês',
            backgroundColor: colors2
        }]
    },
    options: {
        title: {
            text: "Quantidade de animais por tipos atendidos",
            display: true
        },
        scales: {
            y: {
                ticks: {
                    callback: function(value) {
                        let finalValue = value.toFixed(2)
                        return 'R$ ' + finalValue.replace('.', ',') + ' mil'
                    }
                }
            }
        }
    }
});

let labels3 = ['Gato', 'Cachorro', 'Coelho', 'Tartaruga', 'Hamster'];
let data3 = [60, 70, 30, 20, 15];
let colors3 = ['#49A9EA', '#36CAAB', '#34495E', '#B370CF', '#AC5353', '#CFD4D8'];

let myChart3 = document.getElementById("myChart3").getContext('2d');

let chart3 = new Chart(myChart3, {
    type: 'pie',
    data: {
        labels: labels3,
        datasets: [ {
            data: data3,
            label: 'Quantidade de animais por tipos atendidos',
            backgroundColor: colors3
        }]
    },
    options: {
        title: {
            text: "Quantidade de animais por tipos atendidos",
            display: true
        }
    }
});
</script>

</div>

@endsection