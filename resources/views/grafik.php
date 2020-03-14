@extends('master')


@section('header')
<link rel="stylesheet" type="text/css" href="{{ url('assets/js/morris.js') }}">
@stop
@section('content')

<section class="content-header">
    <h1>
        Grafik Buku Tamu

    </h1>
</section>

<section class="content">

    <div class="row">





        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="jml_tamu"></div>
                </div>
            </div>
        </div>




    </div>

</section>

@stop

@section('footer')

<script type="text/javascript" src="{{ url('assets/plugins/highcart/code/highcharts.js') }}"></script>
<script type="text/javascript">
    $(function() {




        Highcharts.chart('jml_tamu', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Perbandingan Berdasarkan Jenis Tamu'
            },
            subtitle: {
                text: 'Per Tahun'
            },
            xAxis: {
                categories: {
                    !!json_encode($jml_tamu['category']) !!
                },
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: {
                !!json_encode($jml_tamu['series']) !!
            }
        });



    })
</script>
@stop
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68
69
70
71
72
73
74
75
76
77
78
79
80
81
82
83
84
85
86
87
88
89
90
91
@extends('master')


@section('header')
<link rel="stylesheet" type="text/css" href="{{ url('assets/plugins/highcart/code/css/highcharts.css') }}">
@stop
@section('content')

<section class="content-header">
    <h1>
        Grafik Buku Tamu

    </h1>
</section>

<section class="content">

    <div class="row">





        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="jml_tamu"></div>
                </div>
            </div>
        </div>




    </div>

</section>

@stop

@section('footer')

<script type="text/javascript" src="{{ url('assets/plugins/highcart/code/highcharts.js') }}"></script>
<script type="text/javascript">
    $(function() {




        Highcharts.chart('jml_tamu', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Perbandingan Berdasarkan Jenis Tamu'
            },
            subtitle: {
                text: 'Per Tahun'
            },
            xAxis: {
                categories: {
                    !!json_encode($jml_tamu['category']) !!
                },
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: {
                !!json_encode($jml_tamu['series']) !!
            }
        });



    })
</script>
@stop