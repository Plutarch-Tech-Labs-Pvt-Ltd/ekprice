<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Ekprice-Admin</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

     <!-- jQuery CDN - Slim version (=without AJAX) -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href= "https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">


    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

</head>

<body>

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
                        <li class="active"><a href="{{ route('admin.labelcategories') }}">Label</a></li>
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
                    <table class="table table-fluid table-hover table-responsive">
                        <!--Table head-->  
                        <h5 style="text-align:flex-start;">Label of Category</h5>                     
                                <button class="mb-3 display-5"><a href="{{ route('admin.labelcategories.createcategory') }}">Add Label of Category</a></button>                             
                            
                        <thead class="mdb-color darken-3 mt-3">                          
                            <tr class="text-white">
                                <th>Label Id </th>
                                <th>Label title</th> 
                                <th>Category  title</th>
                                <th>Active status</th>
                                <th>Status Action</th>     
                                <th>Actions</th>                                                    
                            </tr>
                        </thead>
                        <!--Table head-->
                        <!--Table body-->
                        <tbody>
                        @foreach($data as $label)
                            <tr>
                                <td>{{$label->label_id}}</td>
                                <td>{{$label->label_title}}</td>
                                <td>{{$label->category_title}}</td>
                                <td>{{$label->l_active_status}}</td>   
                                <td><div class="btn-group" role="group" aria-label="">                                    
                                <form action="" method="post">
                                    {{csrf_field()}}                    
                                    <input name="_method" type="hidden" value="POST">
                                    <button class="btn btn-primary" id = 'active' type="submit">Active</button>
                                </form>
                                        &nbsp;                                   
                                        <form action="" method="post">
                                    {{csrf_field()}}                    
                                    <input name="_method" type="hidden" value="POST">
                                    <button class="btn btn-danger" id = 'inactive' type="submit">Inactive</button>
                                </form>
                                </div></td>            
                                <td><div class="btn-group" role="group" aria-label="">
                                    <a href="">
                                        <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    </a>&nbsp;                 
                                    <form action="" method="post">
                                    {{csrf_field()}}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                                    </form>
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
</body>

</html>