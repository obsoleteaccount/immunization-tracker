@extends('layouts.app')

@section('content')
<body>
	<div class="container">
        <header>
            <div class="banner">
                <br>
                <h1 Class="whitetitle">Vaxeen</h1>
            </div>
        </header><br>
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
						This module provides functionality such as the ability easily create, update and delete records.</p>
						<a href="/vaccinations" class="btn btn-primary">Vaccinations</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card mb-3">
				<img src="{{URL::asset('/images/analytics1.jpg')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"><strong>Analytics</strong></h5>
						<p style="font-size:1.1em;" class="card-text">Are you interested with up to date statistics and information about the state of maternal healthcare in Kenya?
						You can now easily access this information on this platform by clicking on the link below.</p>
						<a href="/analytics" class="btn btn-primary">Analytics</a>
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
						<a href="/vaccinations" class="btn btn-primary">Vaccinations</a>
					</div>
				</div>
			</div>
		</div>
		<br><br>
        <div class="about-div">
			<div class="facts">
                <div style="position:relative; background-color: #F8F8F8; height: 150px; width: 100%;">	
                	<div style="max-width:600px;">
                        <p style="font-size:1.38em ;">"<strong>45</strong> out of <strong>1000</strong> children in Kenya die before reaching 5 years due to preventable diseases like measles."</p>
                        <p style="font-size:1.2em;">-UNICEF</p>
                	</div> 
                </div>
        	</div>
        </div>
	</div>
</body>      
@endsection
    

