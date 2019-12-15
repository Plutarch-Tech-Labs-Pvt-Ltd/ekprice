@extends('layouts.auth')
@section('content')
@include('layouts.partials.header')
<!-- Login page -->
 <div class="login_screen">
     <div class="container">
         <div class="row justify-content-center align-items-center">
             <div class="col-xl-5 col-lg-6 col-md-6 col-sm-10">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="card-title mb-4">
                             LOGIN TO YOUR ACCOUNT
                         </h4>

                         <a href="#" class="btn btn-facebook btn-block mb-2"> <i class="fa fa-facebook-f"></i> &nbsp;  Sign in with Facebook</a>
                         <a href="#" class="btn btn-google btn-block mb-4"> <i class="fa fa-google"></i> &nbsp;  Sign in with Google</a>

                       <!--   <form>
                             <div class="form-group">
                                 <label>Email</label>
                                 <input name="" class="form-control" placeholder="ex. name@gmail.com" type="email">
                             </div> 
                             <div class="form-group">
                                 <a class="float-right" href="#">Forgot password</a>
                                 <label>Password</label>
                                 <input class="form-control" placeholder="******" type="password">
                             </div> 
                             <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked="">
                                    <div class="custom-control-label"> Keep me signed in </div> 
                                </label>
                             </div> 
                             <div class="form-group">
                                 <button type="submit" class="btn btn-primary btn-block"> Sign in  </button>
                             </div>
                         </form> -->

                         <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class=" col-form-label text-md-right">Email</label>                           
                                <input id="email" type="email" placeholder="ex. name@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                            
                        </div>

                        <div class="form-group">
                            @if (Route::has('password.request'))
                                    <a class="float-right" href="{{ route('password.request') }}">
                                    Forgot password
                                    </a>
                            @endif
                            <label for="password" class="col-form-label text-md-right">Password</label>                           
                                <input id="password" type="password" placeholder="******" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                    
                                <label class="custom-control custom-checkbox" for="remember">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember"  checked="{{ old('remember') ? 'checked' : '' }}">
                                    <div class="custom-control-label"> Keep me signed in </div>
                                    </label>
                            
                        </div>

                        <div class="form-group">
                            
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>

                              
                        
                        </div>
                    </form>
                         <hr>
                         <p class="text-center">Create an account? <a href="{{ route('register') }}" class="uk-button-text">Sign up</a></p>
                     </div> <!-- card-body.// -->
                 </div> <!-- card .// -->
             </div>
         </div>
     </div>
 </div>
@endsection
