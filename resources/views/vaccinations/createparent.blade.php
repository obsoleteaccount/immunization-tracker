@extends('layouts.app')

@section('content')
<body>
<div class="container">
    <br><header>
        <div class="banner">
            <br>
            <h1 Class="whitetitle">Vaxeen</h1>
        </div>
    </header><br>
    <form action="{{ action('ParentController@store')}}" method="post" >
        {{ csrf_field() }}

        <div class="card border-dark mb-3">

            <div class="col-md-4">
                        <label for="record_date">Record Date*</label>
                        <input type="date" value="{{old('title')}}" name="record_date" class="form-control @error('record_date') is-invalid @enderror" id="record_date" value="{{ old('record_date') }}" required autocomplete="record_date" autofocus>
                            @error('record_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

            <div class="card-header">Parent Details</div>
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-4">
                        <label for="firstname">Father First Name*</label>
                        <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                            @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="col-md-4">
                        <label>Father Last Name*</label>
                        <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="col-md-4">
                        <label>Father Surname*</label>
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
                    <div class="col-md-4">
                        <label for="mother_firstname">Mother First Name*</label>
                        <input type="text" name="mother_firstname" class="form-control @error('mother_firstname') is-invalid @enderror" id="mother_firstname" value="{{ old('mother_firstname') }}" required autocomplete="mother_firstname" autofocus>
                            @error('mother_firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="col-md-4">
                        <label>Mother Surname*</label>
                        <input type="text" name="mother_surname" class="form-control @error('mother_surname') is-invalid @enderror" id="mother_surname" value="{{ old('mother_surname') }}" required autocomplete="mother_surname" autofocus>
                            @error('mother_surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <label>Phone Number*</label>
                        <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" pattern="^(?:254|\+254|0)?(7[0-9]{8})$" value="{{ old('phone') }}" placeholder="0700123456" required autocomplete="phone" autofocus>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="col-md-4">
                        <label>Email*</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-md-2">
                        <label>Gender</label>
                        <select class="form-control" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
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