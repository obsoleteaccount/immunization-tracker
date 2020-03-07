@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        <header>
            <div class="banner">
                <br>
                <h1 Class="whitetitle">Analytics</h1>
            </div>
        </header><br>
        <div class="chart">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            At Birth
                        </div>
                        <div class="card-body">
                            {!! $chart->container() !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-header">
                            At Birth
                        </div>
                        <div class="card-body">
                            {!! $chart0->container() !!}
                        </div>
                    </div>
                </div>
                <div class=col-md-4>
                    <div class="card mb-4">
                        <div class="card-header">
                            6 Weeks
                        </div>
                        <div class="card-body">
                            {!! $chart1->container() !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class=col-md-4>
                    <div class="card mb-4">
                        <div class="card-header">
                            6 Weeks
                        </div>
                        <div class="card-body">
                            {!! $chart4->container() !!}
                        </div>
                    </div>
                </div>
                <div class=col-md-4>
                    <div class="card mb-4">
                        <div class="card-header">
                            10 Weeks
                        </div>
                        <div class="card-body">
                            {!! $chart2->container() !!}
                        </div>
                    </div>
                </div>
                <div class=col-md-4>
                    <div class="card mb-4">
                        <div class="card-header">
                            10 Weeks
                        </div>
                        <div class="card-body">
                            {!! $chart5->container() !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class=col-md-4>
                    <div class="card mb-4">
                        <div class="card-header">
                            14 Weeks
                        </div>
                        <div class="card-body">
                            {!! $chart3->container() !!}
                        </div>
                    </div>
                </div>
                <div class=col-md-4>
                    <div class="card mb-4">
                        <div class="card-header">
                            14 Weeks
                        </div>
                        <div class="card-body">
                            {!! $chart6->container() !!}
                        </div>
                    </div>
                </div>
                <div class=col-md-4>
                    <div class="card mb-4">
                        <div class="card-header">
                            9 Months
                        </div>
                        <div class="card-body">
                            {!! $chart7->container() !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            All Vaccines
                        </div>
                        <div class="card-body">
                            {!! $chart9->container() !!}
                        </div>
                    </div>
                </div>
              
            </div>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
     {!! $chart->script() !!}
     {!! $chart0->script() !!}
     {!! $chart1->script() !!}
     {!! $chart2->script() !!}
     {!! $chart3->script() !!}
     {!! $chart4->script() !!}
     {!! $chart5->script() !!}
     {!! $chart6->script() !!}
     {!! $chart7->script() !!}
     {!! $chart8->script() !!}
     {!! $chart9->script() !!}

</body>
@endsection()