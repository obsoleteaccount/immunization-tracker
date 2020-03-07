@extends('layouts.app')

@section('content')
<body>
<div class="container">
   
	<header>
        <div class="banner">
            <br>
            <h1 Class="whitetitle">Vaxeen</h1>
        </div>
    </header>
	<br>
	<div class="row justify-content-center">
		<div class="col-md-8">
			@if (session('message'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong> You are now logged in.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			@endif
		</div>
	</div>
   
	<div class="about-div">
		<div class="about">
			<hr>
			<p style="font-size:1.875em; ">Vaxeen</p>
			<hr>
			<p style=" max-width:720px; font-size:1.38em;">Web app serving as an online immunization registry.</p>
		</div>
	</div><br>
	<div class="row">
		<div class="col-sm-4">
			<div class="card mb-3">
			<img src="{{URL::asset('/images/form.jpg')}}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><strong>Online Immunization Form</strong></h5>
					<p style="font-size:1.1em;" class="card-text">The online immunization form makes it easier to manage maternal healthcare records. 
					This module provides functionality such as the ability to easily create, update and delete records.</p>
					<a id="create" href="/vaccinations" class="btn btn-primary">Vaccinations</a>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card mb-3">
			<img src="{{URL::asset('/images/analytics1.jpg')}}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><strong>Analytics</strong></h5>
					<p style="font-size:1.1em;" class="card-text">As a doctor, you have access to predictive analytics based on the health records that
					are captured through the online immunization form such as how many vaccinations have been given. </p>
					<a id="create" href="/analytics" class="btn btn-primary">Analytics</a>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card mb-3">
			<img src="{{URL::asset('/images/reminder.jpg')}}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><strong>Reminders</strong></h5>
					<p style="font-size:1.1em;" class="card-text">In addition to the online immunization form, our platform enable you as a healthcare worker to send reminders
					to patients through E-mail and SMS to remind them of the next hospital visit.</p>
					<a id="create" href="/vaccinations" class="btn btn-primary">Vaccinations</a>
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<div class="card text-white mb-5" id="create">
		<div class="card-header">
			View Child Immunization Schedule
		</div>
		<div class="card-body">
			<h5 class="card-title">Are you a parent?</h5>
			@if (session('error'))
			<div class="alert alert-danger">{{ session('error') }}</div>
			@endif
			<p class="card-text">You can view the immunization schedule of your child by entering the ID of your child below</p>
			<form method="POST" action="{{ action('VaccinationsController@view')}}">
				 @csrf
				<div class="form-group row">
					<label for="id" class="col-md-2 col-form-label text-md-right">{{ __('ID Number') }}</label>

					<div class="col-md-4">
						<input id="id" type="number" class="form-control @error('id') is-invalid @enderror" name="id"  value="{{ old('phone') }}" placeholder="Child Id">

						@error('id')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>
				<div class="form-group row mb-0">
					<div class="col-md-6 offset-md-2">
						<button type="submit" class="btn btn-dark">Request Schedule</button>						
					</div>
				</div>
			</form>
			
		</div>
	</div>
	<div class="about-div">
		<div class="facts">			
			<div style="position:relative; background-color: #F8F8F8; height: 150px; width: 100%;">	
				<div style="max-width:600px;">
					<p style="font-size:1.38em ;">"The maternal mortality and infant mortality rate in Kenya have been found to be
						<strong>362</strong> per <strong>100, 000 live births </strong> and <strong> 22 </strong> per <strong> 1,000 live births </strong> respectively."</p>
					<p style="font-size:1.2em;">Gitobu. Gichangi & Mwanda, (2018)</p>
				</div> 
			</div>
		</div>
	</div>
</div>
</body>
        
@endsection
    
