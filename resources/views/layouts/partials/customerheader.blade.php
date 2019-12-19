<header>
        <nav class="navbar navbar-expand-lg navbar-light header_padding" uk-navbar>
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="images/ek-price-logo.png" alt="Ekprice.com" title="Ekprice.com" />
                </a>
                <form class="form-inline">
                    <input class="form-control mr-sm-1" type="search" placeholder="Find services" aria-label="Search">
                    <button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>
                </form>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto uk-navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Message</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-facebook"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-twitter"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-instagram"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-youtube-play"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hi {{ Auth::user()->name }} &nbsp;<i class="fa fa-angle-down"></i></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li>
                                        <a href="{{route('profile')}}">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#">Orders</a>
                                    </li>
                                    <li>
                                        <a href="#">Rewards Points</a>
                                    </li>
                                    <li>
                                        <a href="#">Learn New courses</a>
                                    </li>
                                    <li>
                                        <a href="#">Payments &amp; Wallet</a>
                                    </li>
                                    <li>
                                        <a class="admin" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-success mr-2 ml-2" href="#" style="font-size:11px;">Join as service provider</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-secondary" href="#" style="font-size:11px;">Currency &nbsp;<i class="fa fa-angle-down"></i></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li>
                                        <a href="#">INR</a>
                                    </li>
                                    <li>
                                        <a href="#">USD</a>
                                    </li>
                                    <li>
                                        <a href="#">EUR</a>
                                    </li>
                                    <li>
                                        <a href="#">YEN</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!--<span class="navbar-text info_nav">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-youtube-play"></a>
                    </span>-->
                </div>
            </div>
        </nav>
        <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; top: 200">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" uk-navbar>
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto uk-navbar-nav nav_padding">
                            @if(count(Helper::getData()) > 0)
                            @foreach(Helper::getData() as $value)
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ $value->cat_title }}</a>
                                <div class="uk-navbar-dropdown" uk-drop="boundary: !nav; boundary-align: true; pos: bottom-justify;">
                                    <div class="uk-navbar-dropdown-grid uk-child-width-1-4" uk-grid>
                                        @if(count($value->getLable) > 0)
                                        @foreach($value->getLable as $key => $lable)
                                        <?php
                                            if($lable->label_title == 'third'){
                                                $asas = $lable->getSubCategory;
                                            
                                            }
                                        ?>
                                        <!-- <div> -->
                                            <?php
                                            $r = 0;
                                            // $tt = count($lable->getSubCategory->toArray());

                                            for($i = 0; $i < count($lable->getSubCategory->toArray()); $i+=5)
                                            {
                                                // <?php
                                                // echo count($lable->getSubCategory->toArray());
                                                    echo Helper::getSubCategory($lable,$i);

                                                
                                                $r +=2;  
                                             } ?>
                                        <!-- </div> -->
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>