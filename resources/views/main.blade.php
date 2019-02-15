@extends('layouts.layout')
@section('title', 'Index')

@section('inputcss')
    
@endsection

@section('main')
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <canvas id="sumchartjs" style="height:500px"></canvas>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('inputjavascript')
    <script>
        /** STACKED BAR CHART **/
        var sumchartjs = document.getElementById('sumchartjs');
        new Chart(sumchartjs, {
            type: 'bar',
            data: {
            labels: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม ', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
            datasets: [{
                data: [100, 240, 200, 250, 350, 500],
                backgroundColor: '#314d83',
                borderWidth: 1,
                fill: true
            },{
                data: [100, 240, 200, 250, 350, 500],
                backgroundColor: '#007bff',
                borderWidth: 1,
                fill: true
            },{
                data: [200, 300, 280, 330, 450, 650],
                backgroundColor: '#cad0e8',
                borderWidth: 1,
                fill: true
            }]
            },
            options: {
            maintainAspectRatio: false,
            legend: {
                display: false,
                labels: {
                    display: false
                }
            },
            scales: {
                yAxes: [{
                stacked: true,
                ticks: {
                    beginAtZero:true,
                    fontSize: 11
                }
                }],
                xAxes: [{
                barPercentage: 0.5,
                stacked: true,
                ticks: {
                    fontSize: 11
                }
                }]
            }
            }
        });
    </script>
@endsection