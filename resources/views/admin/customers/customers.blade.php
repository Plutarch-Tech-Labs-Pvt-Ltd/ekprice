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
            <li class="active">
                <a href="{{ route('admin.customers') }}">Customers</a>
            </li>
            <li>
                <a href="{{ route('admin.sellers') }}">Sellers</a>
            </li>
            <!-- <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li> -->
            <li>
                <a href="{{ route('admin.orders') }}">Orders</a>
            </li>
            <li>
                <a href="{{ route('admin.categories') }}">Categories</a>
                <ul>
                    <li><a href="{{ route('admin.labelcategories') }}">Label</a></li>
                    <li><a href="{{ route('admin.subcategories') }}">Sub Categories</a></li>                      
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
        
        <div class="container mt-5">
        <div class="card mb-4">
            <div class="card-body">
                <!--Table-->
                <table class="table table-fluid table-hover table-responsive" id="myTable">
                <button class="mb-3 display-5">Add customer</button>
                    <!--Table head-->
                    <thead class="mdb-color darken-3">
                        <tr class="text-white">
                            <th>Customer Id </th>
                            <th>Name</th>
                            <th>Email Id</th>
                            <th>Phone Number</th>
                            <th># of orders placed </th>
                            <th>Is also a seller?</th>
                            <th>Recent order placed</th>
                            <th>Recently Searched keyword </th>
                            <th>Last visited</th>
                            <th>Registration date</th>
                            <th>Operations</th>                                                           
                        </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>
                        @foreach($data as $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->phone_no }}</td>
                                <td>001</td>
                                <td>001</td>
                                <td>001</td>
                                <td>001</td>
                                <td>001</td>
                                <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                                <td><button><i class="fas fa-sign-in-alt"></i> Login </button></td>
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
@endsection
@section('js')
<script>
$(document).ready( function () {
    $('#myTable').DataTable
        ( {
        dom: 'Bfrtip',
        buttons: [
            { "extend": 'excel', "text":'Download',"className": 'btn btn-default btn-xs float-right' }
        ]
    });

$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});
} );
</script>
@endsection
</body>
</html>