@extends('layouts.app')

@section('content')
<body>
<div class="container">
    <br><header>
        <div class="banner">
            <br>
            <h1 Class="whitetitle">MamaFair</h1>
        </div>
    </header><br>
    @if( Session::has("success") )
        <div class="alert alert-success alert-block" role="alert">
        <button class="close" data-dismiss="alert"></button>
        {{ Session::get("success") }}
        </div>
    @endif
    
    <form action="{{ action('ChildController@store')}}" method="post" >
        {{ csrf_field() }}

        <div class="card border-dark mb-3">
            <div class="card-header">Child Details</div>
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-4">
                        <label>First Name*</label>
                        <input type="hidden" name="parent_id" value="{{ $parent_id }}">
                        <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                            @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="col-md-4">
                        <label>Last Name*</label>
                        <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="col-md-4">
                        <label>Surname*</label>
                        <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" id="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                            @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-md-3">
                        <label>Gender</label>
                        <select class="form-control" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Date of Birth*</label>
                        <input type="date" name="dob" class="form-control" id="dob" value="{{ old('dob') }}" required autocomplete="dob" autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-div">
            <div class="button-container">
                <a style="margin:20px;" href="{{ url()->previous() }}" class="btn btn-primary">Back</a>  
                <button style="margin:20px;" type="submit" class="btn btn-primary">Next Step</button>
            </div>
        </div> 
    </form>
</div>
</body>
@endsection()