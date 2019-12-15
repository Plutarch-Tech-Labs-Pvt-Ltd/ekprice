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

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
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
                <li class="active">
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
            <div class="container">
                
            </div>
        </div>  
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});
</script>
</body>

</html>