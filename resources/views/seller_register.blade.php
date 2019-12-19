@extends('layouts.auth')
@section('content')
@include('layouts.partials.loginheader') 
<style type="text/css">
.card .card-header .card-title
{    
    margin-top: 15px !important;
    color: grey !important;
    font-size: 16px !important;
}   
.col-md-6
{
    padding-left: 0px !important;
} 
.col-form-label
{
    font-weight: 700;
}
.col-form-label span
{
    font-weight: 700;
    color: red;
}
.card-header
{
    background-color: white !important;
}
.card-body
{
    background-color: rgba(0,0,0,.03) !important;
}
.login_screen {
    background-image: none !important;
    background-color: white !important;
}
.card
{
    box-shadow: 0 1px 6px rgba(57,73,76,.35) !important;
}
</style>
<!-- Login page -->
 <div class="login_screen">
     <div class="container">
         <div class="row justify-content-center align-items-center">
             <div class="col-xl-10 col-lg-6 col-md-6 col-sm-10">
                 <div class="card">
                     @if($seller_st==1)
                     @if($seller_dt->seller_type==1)     
                     <div class="card-header">
                         <h3>List as Company</h3>
                         <h4 class="card-title mb-4">
                             Ready to list your services and make money? That’s a good sign, Welcome to Ekprice.com
                         </h4>
                         
                     </div>   
                     @endif
                     @else
                     <div class="card-header">
                         <h3>Apply to as Service Provider</h3>
                         <h4 class="card-title mb-4">
                             Ready to list your services and make money? That’s a good sign, Welcome to Ekprice.com
                         </h4>
                         
                     </div>
                     @endif
                     <div class="card-body">
                     @if($seller_st==1)
                        <form method="POST" enctype="multipart/form-data" action="{{route('second_step')}}">
                        @csrf
                        <div class="form-group">
                            <div class="col-md-8"> 
                                <p style="font-size: 12px;padding: 0px;margin: 0px;">( Note : All fields are required * )</p>
                            </div>
                        </div>   
                        @if($seller_dt->seller_type==1)     
                        <div class="form-group">
                            <div class="col-md-8">    
                                <label for="email" class=" col-form-label text-md-right"> Company Name <span>*</span></label>                           
                                    <input type="text" placeholder="Company Name" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required autofocus>
                                    
                            </div>
                        </div>    

                        <div class="form-group">
                            <div class="col-md-8">    
                                <label for="password" class="col-form-label text-md-right">Number of years in business <span>*</span></label>                           
                                <input type="number" class="form-control @error('password') is-invalid @enderror" name="business_year" required placeholder="Number of years in business">
                            </div>        
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">    
                                <label for="email" class=" col-form-label text-md-right">Top 5 technologies your company works on <span>*</span></label> 
                                <select class="mySelect for" multiple="multiple" name="technique" style="width: 100%" required>

                                </select>
                            </div>
                        </div>   
                        <div class="form-group">
                            <div class="col-md-8">    
                                <label for="password" class="col-form-label text-md-right">GSTIN <span>*</span></label>                           
                                <input type="text" class="form-control @error('gst') is-invalid @enderror" name="gst" required placeholder="GST">
                            </div>        
                        </div>     
                        <div class="form-group">
                            <div class="col-md-8">    
                                <label for="email" class=" col-form-label text-md-right">A brief about your company and services (min 100 characters) <span>*</span></label>
                                <textarea name="about_comany" class="form-control" minlength="100" required rows="4" style="resize: none"></textarea>                           
                                
                            </div>
                        </div>    
                        <div class="form-group">
                            <div class="col-md-8">    
                                <h4 style="color:grey;margin-bottom:0px;">Languages</h4>
                                <hr style="margin: 10px 0 0px 0;">
                            </div>
                        </div>    
                        <div class="form-group row" style="padding: 0px 15px;">
                            <div class="col-md-8"> 
                                <div class="col-md-6" style="float: left;">       
                                    <label for="email" class=" col-form-label text-md-right">Language 1<span>*</span></label> <select class="form-control" name="language_1" required>
                                        <option value="">Select Language</option>
                                        @foreach($language as $value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>    
                                <div class="col-md-6" style="float: left;">    
                                    <label for="email" class=" col-form-label text-md-right">Expertise level<span>*</span></label> <select class="form-control" name="expertise_level_1" id="language_1" required>
                                        <option value="">Select Expertise level</option>
                                        <option value="Fluent">Fluent</option>
                                        <option value="Native">Native</option>
                                        <option value="Basic">Basic</option>
                                    </select>
                                </div>
                            </div>
                        </div>        
                        <div class="form-group row" style="padding: 0px 15px;">
                           <div class="col-md-8">  
                            <div class="col-md-6" style="float: left;">    
                                <label for="email" class=" col-form-label text-md-right">Language 2<span>*</span></label> <select class="form-control" name="language_2" required>
                                    <option value="">Select Language</option>
                                    @foreach($language as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6" style="float: left;">    
                                <label for="email" class=" col-form-label text-md-right">Expertise level<span>*</span></label> <select class="form-control" name="expertise_level_2" required>
                                    <option value="">Select Expertise level</option>
                                    <option value="Fluent">Fluent</option>
                                    <option value="Native">Native</option>
                                    <option value="Basic">Basic</option>
                                </select>
                            </div>
                           </div> 
                        </div>        
                        <div class="form-group row" style="padding: 0px 15px;">
                            <div class="col-md-8"> 
                                <div class="col-md-6" style="float: left;">    
                                    <label for="email" class=" col-form-label text-md-right">Language 3<span>*</span></label> <select class="form-control" name="language_3" id="language_3" required>
                                        <option value="">Select Language</option>
                                        @foreach($language as $value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6" style="float: left;">    
                                    <label for="email" class=" col-form-label text-md-right">Expertise level<span>*</span></label> <select class="form-control" name="expertise_level_3" required>
                                        <option value="">Select Expertise level</option>
                                        <option value="Fluent">Fluent</option>
                                        <option value="Native">Native</option>
                                        <option value="Basic">Basic</option>
                                    </select>
                                </div>
                            </div>
                        </div>        
                        @endif
                        <div class="form-group">
                            <div class="col-md-8">    
                            <button type="submit" class="btn btn-success">Save & Continue</button>&nbsp;&nbsp;
                            <button type="reset" class="btn btn-danger">Cancel</button>
                             </div>       
                        </div>
                    </form>
                     @else
                        <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="col-md-8"> 
                                <p style="font-size: 12px;padding: 0px;margin: 0px;">( Note : All fields are required * )</p>
                            </div>
                        </div>        
                        <div class="form-group">
                            <div class="col-md-8">    
                                <label for="email" class=" col-form-label text-md-right">Display Name <span>*</span></label>                           
                                    <input type="text" placeholder="Display Name" class="form-control @error('display_name') is-invalid @enderror" name="display_name" value="{{ old('display_name') }}" required autocomplete="display_name" autofocus>
                                    
                            </div>
                        </div>    

                        <div class="form-group">
                            <div class="col-md-8">    
                                <label for="password" class="col-form-label text-md-right">Profile Image <span>*</span></label>                           
                                <input type="file" class="form-control @error('password') is-invalid @enderror" name="profile" required autocomplete="current-password">
                            </div>        
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">    
                                <label for="email" class=" col-form-label text-md-right">Education <span>*</span></label> <select class="form-control" name="education" required>
                                    <option value="">Select Education</option>
                                    <option value="Masters">Masters</option>
                                    <option value="Degree">Degree</option>
                                </select>
                            </div>
                        </div>        
                        <div class="form-group">
                            <div class="col-md-8">    
                                <label for="email" class=" col-form-label text-md-right">Average response time <span>*</span></label>                           
                                    <input type="text" placeholder="Average response time" class="form-control @error('display_name') is-invalid @enderror" name="response_time" value="{{ old('response_time') }}" required autocomplete="response_time">
                                    
                            </div>
                        </div>    
                        <div class="form-group">
                            <div class="col-md-8">    
                                <h4 style="color:grey;margin-bottom:0px;">Location</h4>
                                <hr style="margin: 10px 0 0px 0;">
                            </div>
                        </div>    
                        <div class="form-group">
                            <div class="col-md-8">    
                                <label for="email" class=" col-form-label text-md-right">Country <span>*</span></label> <select class="form-control" name="country" id="country" required>
                                    <option value="">Select Country</option>
                                    @foreach($country as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>        
                        <div class="form-group">
                            <div class="col-md-8">    
                                <label for="email" class=" col-form-label text-md-right">State <span>*</span></label> <select class="form-control" name="state" id="state" required>
                                    <option value="">Select State</option>
                                    @foreach($state as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                 </select>
                            </div>
                        </div>        
                        <div class="form-group">
                            <div class="col-md-8">    
                                <label for="email" class=" col-form-label text-md-right">City <span>*</span></label> <select class="form-control" name="city" id="city" required>
                                    <option value="">Select City</option>
                                    @foreach($city as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>        
                        <div class="form-group">
                            <div class="col-md-8">
                            <label class="col-form-label" for="seller_type1">
                                <input type="radio" name="seller_type" id="seller_type1" value="1" >&nbsp;&nbsp;List as Company</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <label class="col-form-label" id="seller_type2">
                                <input type="radio" name="seller_type" id="seller_type2" value="2" checked>&nbsp;&nbsp;List as Individual</label>
                            </div>
                        </div> 
                        
                        <div class="form-group">
                            <div class="col-md-8">    
                            <button type="submit" class="btn btn-success">Save & Continue</button>&nbsp;&nbsp;
                            <button type="reset" class="btn btn-danger">Cancel</button>
                             </div>       
                        </div>
                    </form>
                    @endif
                     </div> <!-- card-body.// -->
                 </div> <!-- card .// -->
             </div>
         </div>
     </div>
 </div>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css">
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
<script>
$(document).ready(function(){
    $("#country").change(function(){
        var con_id = $(this).val();
        // alert(con_id);
        $.ajax({
          url: "{{route('getstate')}}",
          type: "GET",
          data: 'cid='+con_id,
          cache: false,
          success: function(html){
            $("#state").html(html);
          }
        }); 
    });    
});
var data = ["php", "Java", "laravel", "python", "codeignator", "android"]; // Programatically-generated options array with > 5 options
var placeholder = "select";
$(".mySelect").select2({
    data: data,
    placeholder: placeholder,
    allowClear: false,
    minimumResultsForSearch: 5
});
</script>    

@endsection
