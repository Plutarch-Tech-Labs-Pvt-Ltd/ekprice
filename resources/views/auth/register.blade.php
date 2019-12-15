@extends('layouts.auth')
@section('content')
@include('layouts.partials.registerheader')

@section('content')

<div class="login_screen">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                    <!-- ============================ COMPONENT REGISTER ================================= -->
                    <div class="card">
                        <article class="card-body">
                            <div class="mb-4">
                                <h4 class="card-title">SIGN UP</h4>
                                <small class="d-block">Create new account here</small>
                            </div>
                            <form method="POST" action="{{ route('register') }}" novalidate="">
                            @csrf
                            
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="name">Name</label>                                    
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                                    
                                </div>
                                <div class="form-group col">
                                    <label for="phone_no">Phone number</label>                            
                                    <input id="phone_no" type="tel"  pattern="[0-9]{10}" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{ old('phone_no') }}" required autocomplete="phone_no" autofocus>
                                    @error('phone_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                            
                                </div>
                            </div>
                            <div class="form-group">                                
                                <label for="email" >Email</label>                               
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                               
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="password">Create password</label>                           
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>                                    
                            </div>                          

                            <div class="form-group">                           
                                <button type="submit" class="btn btn-danger btn-block">
                                Register
                                </button>                            
                            </div>

                        </form>
                            <hr>
                            <p class="text-center">Have an account? <a href="{{ route('login') }}" class="uk-button-text">Log In</a></p>
                        </article> <!-- card-body end .// -->
                    </div> <!-- card.// -->
                    <!-- ============================ COMPONENT REGISTER END .// ================================= -->
                </div>
            </div>
        </div>
    </div>

@endsection
