@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Dashboard') }}</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
            <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Selamat Datang</h3>
                    </div>
                    <div class="card-body">
                        <p>Halo! Selamat datang di halaman dashboard Sistem Informasi Pelanggaran Lalu Lintas, tempat di mana Anda dapat mengakses informasi terkini dan terperinci mengenai pelanggaran lalu lintas. Di sini, Anda memiliki akses penuh untuk menjelajahi data pelanggaran, statistik, serta laporan yang relevan, memberikan Anda wawasan mendalam untuk mendukung pengambilan keputusan yang cerdas dalam upaya menjaga keamanan lalu lintas dan penegakan aturan jalan.</p>
                    </div>
                </div>
           
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection

@push('script-alt')
<script>
    $(function() {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        // var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

        var areaChartData = {
            labels: {!! json_encode($kategori) !!},
            datasets: [{
                    label: 'Jumlah Data',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: {!! json_encode($kategori_final_data) !!}
                },
            ]
        }
        var areaChartData2 = {
            labels: {!! json_encode($harga) !!},
            datasets: [{
                    label: 'Jumlah Data',
                    backgroundColor: 'rgba(119,221,119,0.9)',
                    borderColor: 'rgba(119,221,119,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: {!! json_encode($harga_final_data) !!}
                },
            ]
        }
        var areaChartData3 = {
            labels: {!! json_encode($jarak) !!},
            datasets: [{
                    label: 'Jumlah Data',
                    backgroundColor: 'rgba(253,253,150,0.9)',
                    borderColor: 'rgba(253,253,150,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: {!! json_encode($jarak_final_data) !!}
                },
            ]
        }

        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartCanvas2 = $('#barChart2').get(0).getContext('2d')
        var barChartCanvas3 = $('#barChart3').get(0).getContext('2d')

        var barChartData = $.extend(true, {}, areaChartData)
        var barChartData2 = $.extend(true, {}, areaChartData2)
        var barChartData3 = $.extend(true, {}, areaChartData3)
        // var temp0 = areaChartData.datasets[0]
        // var temp1 = areaChartData.datasets[1]
        // barChartData.datasets[0] = temp1
        // barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })
        new Chart(barChartCanvas2, {
            type: 'bar',
            data: barChartData2,
            options: barChartOptions
        })
        new Chart(barChartCanvas3, {
            type: 'bar',
            data: barChartData3,
            options: barChartOptions
        })

        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
        labels: [
            'Sesuai',
            'Tidak Sesuai',
        ],
        datasets: [
            {
                data: [{!! round($info_data_arr['accuracy'] * 100, 2) !!}, {!! 100 - round($info_data_arr['accuracy'] * 100, 2) !!}],
                backgroundColor : ['#00a65a', '#f56954'],
            }
        ]}
        var donutOptions  = {
            maintainAspectRatio : false,
            responsive : true,
        }
        // Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })
    })
</script>
@endpush