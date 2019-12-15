@extends('layouts.admin')
@section('content')
    <div class="wrapper">

        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="{{URL::asset('images/Logo_ekprice.png')}}" class="logo">
            </div>
            <ul class="list-unstyled components">
           
            <li>
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('admin.customers') }}">Customers</a>
                </li>
                <li>
                    <a href="{{ route('admin.sellers') }}">Sellers</a>
                </li>
                <li>
                    <a href="{{ route('admin.orders') }}">Orders</a>
                </li>
                <li>
                    <a href="{{ route('admin.categories') }}">Categories</a>
                    <ul>
                        <li><a href="{{ route('admin.labelcategories') }}">Label</a></li>
                        <li class="active"><a href="{{ route('admin.subcategories') }}">Sub Categories</a></li>                        
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.messages') }}">Messages</a>
                </li>
                <li>
                    <a href="{{ route('admin.couponcodes') }}">Coupon Codes</a>
                </li>
                <li>
                    <a href="{{ route('admin.searchkeywords') }}">Search key words</a>
                </li>
                <li>
                    <a href="{{ route('admin.settings') }}">Settings</a>
                </li>
                <li>
                    <a href="{{ route('admin.roles') }}">Roles</a>
                </li>
                <li>
                    <a href="{{ route('admin.contentmanagement') }}">Content Management</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="content" class="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-nav">
                <div class="container-fluid">
                    <div class="row">
                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fa fa-bars"></i>                        
                        </button>                        
                    </div> 
                    <div>
                    <a class="float-right admin" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        <a class="float-right admin" href="#">{{ Auth::user()->name }}</a>
                        
                    </div>                   
                </div>
            </nav>
            @if(Session::has('success'))
                <p class="alert alert-success }}">{{ Session::get('success') }}</p>
            @endif
            @if(Session::has('error'))
                <p class="alert alert-danger }}">{{ Session::get('error') }}</p>
            @endif

            <div class="container mt-5">
            <div class="card mb-4">
                <div class="card-body">
                    <!--Table-->
                    <table class="table table-fluid table-hover table-responsive">
                        <!--Table head-->  
                        <h5 style="text-align:flex-start;">Sub Categories</h5>                     
                                <button class="mb-3 display-5"><a href="{{action('Admin\SubCategoriesController@create')}}">Add Sub category</a></button>                             
                            
                        <thead class="mdb-color darken-3 mt-3">                          
                            <tr class="text-white">
                                <th>Sub-Category Id </th>
                                <th>Category  title</th>
                                <th>Label  title</th>
                                <th>Sub-Category title</th> 
                                <th>Active status</th>     
                                <th>Actions</th>                                                    
                            </tr>
                        </thead>
                        <!--Table head-->
                        <!--Table body-->
                        <tbody>
                            
                            @foreach($data as $values)
                            <tr>
                                <td>{{ $values->subcat_id }}</td>
                                <td>{{ $values->category }}</td>                                         
                                <td>{{ $values->lable }}</td>                                         
                                <td>{{ $values->subcat_title }}</td>                                         
                                <td> 
                                    @if($values->is_active == 1)
                                        <span class="badge badge-pill badge-success">Active</span>
                                    @else
                                        <span class="badge badge-pill badge-danger">Not Active</span>
                                    @endif
                                </td>                                         
                                <td><div class="btn-group" role="group" aria-label="">
                                    <a href="{{ route('admin.subcategories.edit',['id' => $values->subcat_id]) }}" class="btn btn-primary"><i class="fas fa-edit"></i>
                                    </a>&nbsp;                 
                                <a href="{{ route('admin.subcategories.destroy',['id' => $values->subcat_id]) }}" class="btn btn-danger">  <i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>  
                            @endforeach                    
                           
                        </tbody>
                        <!--Table body-->
                    </table>
                    <!--Table-->
                </div>
               
  
            </div>
            </div>   

        </div>  
    </div>
    <script>
        $(document).ready( function () {
    
    
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
} );
</script>
@endsection


