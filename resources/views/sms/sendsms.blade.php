@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Send Reminder') }}</div>

                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            @if($message = Session::get('success'))
                                <div class="alert alert-dark alert-block">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <form method="POST" action="{{ url('sendsms/send') }}">
                        @csrf                                     

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" pattern="^(+254)?(7[0-9]{8})$" placeholder="+2547" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input id="datefield" type="date" name="date" class="form-control" name="message" required autocomplete="date" autofocus>
                            </div>
                        </div>                
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>  
                                <button style="margin:20px;" type="submit" class="btn btn-primary">
                                    {{ __('Send SMS') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
datefield.min = new Date().toISOString().split("T")[0];
</script>
@endsection
