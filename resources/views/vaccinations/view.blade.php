@extends('layouts.app')

@section('content')
    <body>
        <div class="container">
            <br>
        
            <header>
                <div class="banner">
                    <br>
                    <h1 Class="whitetitle">Vaxeen</h1>
                </div>
            </header>
            <br>
            <div id="card-border">
                <div class="card mb-3">
                 <div class="col-md-4">
                            <label>Record Date</label>
                            <p class="card-text">{{ $parent->record_date}}</p>
                     </div>
                    <div class="card-header">Parent Details</div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-4">
                                <label>First Name</label>
                                <p class="card-text">{{ $parent->firstname}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Last Name</label>
                                <p class="card-text">{{ $parent->lastname}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Surname</label>
                                <p class="card-text">{{ $parent->surname}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Mother Firstname</label>
                                <p class="card-text">{{ $parent->mother_firstname}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Mother Surname</label>
                                <p class="card-text">{{ $parent->mother_surname}}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-md-4">
                                <label>Phone</label>
                                <p class="card-text">{{ $parent->phone}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Email</label>
                                <p class="card-text">{{ $parent->email}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Gender</label>
                                <p class="card-text">{{ $parent->gender}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">Child Details</div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-4">
                                <label>First Name</label>
                                <p class="card-text">{{ $child->firstname}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Last Name</label>
                                <p class="card-text">{{ $child->lastname}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Surname</label>
                                <p class="card-text">{{ $child->surname}}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-md-4">
                                <label>Gender</label>
                                <p class="card-text">{{ $child->gender}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Date of Birth</label>
                                <p class="card-text">{{ $child->dob}}</p>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <a href="{{route('email')}}" class="btn btn-primary">Send Email</a>
                    <a href="{{route('sms')}}" class="btn btn-primary">Send SMS</a>
                </div>
            </div> 
           
        </div>  
    </body>
@endsection()