@extends('layouts.master')
@section('content')
@section('css')
    <style type="text/css">
        .error{
            color: red;
        }
        .profile_sidebar {
            padding: 2.75rem !important;
            padding-bottom: 1.75rem !important;
            background-color: #f3f0f7;       
        }
        .anchor{
            text-decoration: none !important;
        }
    </style>
@endsection
@include('layouts.partials.customerheader')
 
<div class="container m-0 p-0">
    <div class="row">
        <div class="col-md-3">
            <!-- sidebar -->
                <table class="table table-bordered">
                    <tr>
                        <td class="profile_sidebar"><h3><a class="anchor" href="{{ route('profile') }}" >Profile </a></h3></td>
                    </tr>
                    <tr>
                        <td class="profile_sidebar"><h3><a class="anchor" href="">Order</a></h3></td>
                    </tr>
                    <tr>
                        <td class="profile_sidebar"><h3><a class="anchor" href="">Invoice</a></h3></td>
                    </tr>
                    <tr>
                        <td class="profile_sidebar"><h3><a class="anchor" href="">Reward Point</a> </h3> </td>
                    </tr>
                </table>
            <!-- sidebar end-->
        </div>
        <div class="col-md-6  col-lg-6  col-lg-offset-3 mt-3 mb-3">
            <div class="login">
                <div class="login-form-container">
                    <div class="login-text">
                        <h3>Profile</h3>
                        <p>Personal Information</p>
                    </div>
                    <hr class="featurette-divider">
                    <form enctype="multipart/form-data" action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="user_name">Name</label>
                            <input type="text" placeholder="FirstName" id="user_name" class="form-control" value="{{ $data->name }}" name="name">
                            @error('name')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="user_name">Email</label>
                            <input type="email" placeholder="Email" id="email" class="form-control " value="{{ $data->email }}" disabled>                                
                        </div>
                        <div class="form-group">
                            <label for="phone_no">Phone no</label>
                            <input type="number" placeholder="Phone No" id="phone_no" class="form-control " value="{{ $data->phone_no }}" name="phone_no">
                            @error('phone_no')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="profile_pic">Profile Pic</label>
                            <input type="file"  id="profile_pic" class="form-control" name="profile_pic">
                            @error('profile_pic')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="button-box text-right">
                            <button type="submit" class="btn btn-common log-btn">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            @if($data->profile_pic)
                <br>
                <img src="{{ asset('storage/user_profile').'/'.$data->profile_pic }}" class="img-thumbnail" >
            @endif
        </div>
    </div>
</div>
@endsection