@extends('layouts.master')
@section('content')
@include('layouts.partials.customerheader')

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
        .breadcrumb{
            padding-left:2rem;
            background-color: #ebebeb;
            margin-bottom: 0rem;
        }
        .card-header{
            background-color: #fff;
        }
        .arrow{
            padding-top:0.3rem;
            padding-left:0.2rem;
            padding-right:0.2rem;
            font-size:1.1rem;
        }

        .service-title{
            color:#db0a23;
            float: left;
        }
        .service-title-s{
            float: left;
            margin-top:0.1rem;
            padding-left:0.5rem;
            color:#2eae25;
        }
       
    </style>
@endsection


<p class="breadcrumb"><a href="{{route('home')}}">Home</a><i class="fa fa-angle-right arrow"></i> Service Details</p>
<div style="background-color: #ebebeb;">
<div class="container">
    <div class="row ml-2 mr-2">
        <div class="col-md-6  col-lg-6  col-lg-offset-3 mt-3 mb-3">
            <div class="card ml-3 mr-3">
                <div class="card-header">                  
                    <h4 class="service-title">Service Title</h4>
                    <p class="service-title-s">description </p>
                </div>  
                <div class="card-body"> 
                <img src="images/images (1).jpg" alt="img" height="200" width="500">
                </div>   
                <div class="card-footer">
                <p> hi </p> 
                </div>              
            </div>
        </div>
        <div class="col-md-6  col-lg-6  col-lg-offset-3 mt-3 mb-3">
            <div class="card ml-3 mr-3">
                <div class="card-header">
                    <h4> Service Title</h4> 
                </div>  
                <div class="card-body">
                <p> hi </p> 
                </div>   
                <div class="card-footer">
                <p> hi </p> 
                </div>              
            </div>
        </div>
        
    </div>
</div>
    </div>
@endsection
