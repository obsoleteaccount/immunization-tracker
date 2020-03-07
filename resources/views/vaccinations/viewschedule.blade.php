@extends('layouts.app')

@section('content')
    <body>
        <div class="container">
            <br>
        
            <header>
                <div class="banner">
                    <br>
                    <h1 Class="whitetitle">MamaFair</h1>
                </div>
            </header>
            <br>
            <div id="card-border">
                <div class="card mb-3">
                    <div class="card-header">At Birth</div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label>BCG</label>
                                <p class="card-text">{{ $vaccination->bcg_at_birth}}</p>
                            </div>
                            <div class="col-md-6">
                                <label>Oral Polio Vaccine</label>
                                <p class="card-text">{{ $vaccination->opv_at_birth}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">6 Weeks</div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-4">
                                <label>Oral Polio Vaccine</label>
                                <p class="card-text">{{ $vaccination->opv_at_6_weeks}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>DPT</label>
                                <p class="card-text">{{ $vaccination->dpt_at_6_weeks}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Pneumococcal Vaccine</label>
                                <p class="card-text">{{ $vaccination->pcv_at_6_weeks}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">10 Weeks</div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-4">
                                <label>Oral Polio Vaccine</label>
                                <p class="card-text">{{ $vaccination->opv_at_10_weeks}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>DPT</label>
                                <p class="card-text">{{ $vaccination->dpt_at_10_weeks}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Pneumococcal Vaccine</label>
                                <p class="card-text">{{ $vaccination->pcv_at_10_weeks}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">14 Weeks</div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-4">
                                <label>Oral Polio Vaccine</label>
                                <p class="card-text">{{ $vaccination->opv_at_14_weeks}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>DPT</label>
                                <p class="card-text">{{ $vaccination->dpt_at_14_weeks}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Pneumococcal Vaccine</label>
                                <p class="card-text">{{ $vaccination->pcv_at_14_weeks}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">9 Months</div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label>Measles</label>
                                <p class="card-text">{{ $vaccination->measles_at_9_months}}</p>
                            </div>
                            <div class="col-md-6">
                                <label>Yellow Fever</label>
                                <p class="card-text">{{ $vaccination->yellow_fever_at_9_months}}</p>
                            </div>
                        </div>
                    </div>               
                </div> 
            </div>
        
            <div class="about-div">
                <div class="button-container">
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>  
                </div>
            </div> 
           
        </div>  
    </body>
@endsection()