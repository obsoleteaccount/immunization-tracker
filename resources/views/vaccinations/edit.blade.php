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

     <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('record-updated'))
                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                    <strong>The record has been deleted</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
    </div>


    <form method="POST" action="{{ route('update', ['id' => $vaccination->id], ['child_id' => $child->id], ['parent_id' => $parent->id])}}">
        {{ csrf_field() }}
        <div id="card-border">
            <div class="card border-dark mb-3">

              <div class="col-md-4">
                    <label>Record Date</label>
                    <input type="date" name="record_date" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$parent->record_date}}>
                </div>

                <div class="card-header">Parent Details</div>
                <div class="card-body">
                    <div class="form-row">

                        <div class="col-md-4">
                            <label>First Name</label>
                            <input type="text" name="firstname" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$parent->firstname}}>
                        </div>
                        <div class="col-md-4">
                            <label>Last Name</label>
                            <input type="text" name="lastname" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$parent->lastname}}>
                        </div>
                        <div class="col-md-4">
                            <label>Surname</label>
                            <input type="text" name="surname" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$parent->surname}}>              
                        </div>

                         <div class="col-md-4">
                            <label>Mother Firstname</label>
                            <input type="text" name="mother_firstname" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$parent->mother_firstname}}>
                        </div>
                        <div class="col-md-4">
                            <label>Mother Surname</label>
                            <input type="text" name="mother_surname" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$parent->mother_surname}}>
                        </div> 
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-md-4">
                            <label>Gender</label>
                            <input type="text" name="gender" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$parent->gender}}>
                        </div>
                        <div class="col-md-4">
                            <label>E-mail</label>
                            <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$parent->email}}>
                        </div>
                        <div class="col-md-4">
                            <label>Phone</label>
                            <input type="tel" name="phone" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$parent->phone}}>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-dark mb-3">
                <div class="card-header">Child Details</div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-4">
                            <label>First Name</label>
                            <input type="text" name="firstname1" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$child->firstname}}>
                        </div>
                        <div class="col-md-4">
                            <label>Last Name</label>
                            <input type="text" name="lastname1" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$child->lastname}}>
                        </div>
                        <div class="col-md-4">
                            <label>Surname</label>
                            <input type="text" name="surname1" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$child->surname}}>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-md-4">
                            <label>Gender</label>
                            <input type="text" name="gender1" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$child->gender}}>
                        </div>
                        <div class="col-md-4">
                            <label>Date of Birth</label>
                            <input type="date" name="dob" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$child->dob}}>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-dark mb-3">
                <div class="card-header">At Birth</div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>BCG</label>
                            <input type="date" name="bcg_at_birth" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$vaccination->bcg_at_birth}}>
                        </div>
                        <div class="col-md-6">
                            <label>OPV</label>
                            <input type="date" name="opv_at_birth" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$vaccination->opv_at_birth}}>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-dark mb-3">
                <div class="card-header">6 Weeks</div>
                <div class="card-body">
                <div class="form-row">
                        <div class="col-md-3">
                            <label>OPV</label>
                            <input type="date" name="opv_at_6_weeks" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$vaccination->opv_at_6_weeks}}>
                        </div>
                        <div class="col-md-3">
                            <label>DPT</label>
                            <input type="date" name="dpt_at_6_weeks" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$vaccination->dpt_at_6_weeks}}>
                        </div>
                        <div class="col-md-3">
                            <label>PCV</label>
                            <input type="date" name="pcv_at_6_weeks" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$vaccination->pcv_at_6_weeks}}>
                        </div>
                        <div class="col-md-3">
                            <label>Rota1</label>
                            <input type="date" name="rota1" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$vaccination->rota1}}>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="card border-dark mb-3">
                <div class="card-header">10 Weeks</div>
                <div class="card-body">
                <div class="form-row">
                        <div class="col-md-3">
                            <label>OPV</label>
                            <input type="date" name="opv_at_10_weeks" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$vaccination->opv_at_10_weeks}}>
                        </div>
                        <div class="col-md-3">
                            <label>DPT</label>
                            <input type="date" name="dpt_at_10_weeks" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$vaccination->dpt_at_10_weeks}}>
                        </div>
                        <div class="col-md-3">
                            <label>PCV</label>
                            <input type="date" name="pcv_at_10_weeks" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$vaccination->pcv_at_6_weeks}}>
                        </div>
                        <div class="col-md-3">
                            <label>Rota2</label>
                            <input type="date" name="rota1" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$vaccination->rota2}}>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-dark mb-3">
                <div class="card-header">14 Weeks</div>
                <div class="card-body">
                <div class="form-row">
                        <div class="col-md-4">
                            <label>OPV</label>
                            <input type="date" name="opv_at_14_weeks" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$vaccination->opv_at_14_weeks}}>
                        </div>
                        <div class="col-md-4">
                            <label>DPT</label>
                            <input type="date" name="dpt_at_14_weeks" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$vaccination->dpt_at_10_weeks}}>
                        </div>
                        <div class="col-md-4">
                            <label>PCV</label>
                            <input type="date" name="pcv_at_14_weeks" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$vaccination->pcv_at_10_weeks}}>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-dark mb-3">
                <div class="card-header">9 Months</div>
                <div class="card-body">
                <div class="form-row">
                        <div class="col-md-6">
                            <label>Measles</label>
                            <input type="date" name="measles_at_9_months" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$vaccination->measles_at_9_months}}>
                        </div>
                        <div class="col-md-6">
                            <label>Yellow Fever</label>
                            <input type="date" name="yellow_fever_at_9_months" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value={{$vaccination->yellow_fever_at_9_months}}>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-div">
            <div class="button-container">
                <a style="margin:20px;" href="{{ url()->previous() }}" class="btn btn-primary">Back</a>  
                <button style="margin:20px;" type="submit" class="btn btn-primary">Update</button>
            </div>
        </div> 
    </form>
        
</div>
</body>
@endsection()