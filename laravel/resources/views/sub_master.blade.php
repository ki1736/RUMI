<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'default title')</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    @yield('link')
    <script type="text/javascript" src="{{ URL::asset('js/jquery-2.2.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
<div class="header">

    <!--   tab top start-->
    <div class="service_container_tab row">
        <div class="service_logo col-md-4">
            <a href="/">
                <img src="{{ URL::asset('images/company_logo.png')}}" alt="main logo"/>
            </a>
        </div>
        <div class="service_nav_group col-md-8">
            <div class="row tab_top">
                <div class="social pull-right">
                    <div class="email_call call">
                        <p>Toll Free <a href="#">1.800.123.4567</a></p>
                    </div>

                    <div class="tab_top_left">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                    </div>

                </div>

            </div>
            <!-- nav bar start -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse service_nav" id="bs-example-navbar-collapse-2">
                        <ul class="nav navbar-nav">
                            @foreach($navigations as $nav)
                                <li><a href="{{url($nav->slug)}}">{{$nav->name}}</a></li>
                            @endforeach
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <!-- nav bar end -->

        </div>
        <!--   tab top end -->
    </div>


    <!-- main title start-->
    <div class="main_title">
        <div class="row">
            @foreach($navigations_title as $t)
            <h2 class="pull-left col-md-6 col-xs-12">{{$t->title}}</h2>
            <button type="button" class="btn btn-warning our btn-sm pull-right">GET IN TOUCH</button>
        </div>
    </div>
    <div class="sub_title">
        <div class="row">

            <h6><a href="#">Construction Theme</a><i class="fa fa-angle-right"></i><span>{{$t->title}}</span></h6>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    @yield('content')
</div>
<div class="footer">
    <footer>
        <div class="row footer1">
            <div class="foot_nav">
                <div class="foot_social">
                    <span>Follow us </span>
                    @foreach($contents_social[0]->images_all as $c)
                        <i class="{{$c->url}}"></i>
                    @endforeach
                    {{--<i class="fa fa-linkedin-square"></i>--}}
                    {{--<i class="fa fa-pinterest"></i>--}}
                    {{--<i class="fa fa-google-plus"></i>--}}
                    {{--<i class="fa fa-instagram"></i>--}}
                </div>

            </div>
            <div class="col-sm-6 col-md-3"><h5>ABOUT COMPANY</h5>
                <p>Our clients range from FTSE companies, to large organisations and some small local businesses who are
                    striving to expand.</p>
                <p>To see a detailed list of our works and the progress please see our project page.</p>
            </div>
            <div class="col-sm-6 col-md-3"><h5>ABOUT COMPANY</h5>
                <ul class="row">
                    @foreach($navigations as $nav)
                        <li class="col-md-6 col-xs-6"><a href="{{$nav->slug}}">{{$nav->name}}</a></li>
                    @endforeach
                    {{--<a href="/"><li class="col-md-6 col-xs-6">Home</li></a>--}}
                    {{--<a href="#"><li class="col-md-6 col-xs-6">Who We Are</li></a>--}}
                    {{--<a href="#"><li class="col-md-6 col-xs-6">Lastest News</li></a>--}}
                    {{--<a href="/service"><li class="col-md-6 col-xs-6">Our Services</li></a>--}}
                    {{--<a href="/project"><li class="col-md-6 col-xs-6">Project</li></a>--}}
                    {{--<a href="#"><li class="col-md-6 col-xs-6">Shop</li></a>--}}
                    {{--<a href="#"><li class="col-md-6 col-xs-6">Coreers</li></a>--}}
                    {{--<a href="/contact"><li class="col-md-6 col-xs-6">Contact Us</li></a>--}}
                </ul>
            </div>
            <div class="col-sm-6 col-md-3"><h5>CONSTRUCTION OFFICE</h5>
                <ul class="row">
                    @foreach($contents_info as $c)
                        <li><i class="{{$c->images->url}}"></i>{{$c->description}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 col-sm-6"><h5>BUSINESS HOURS</h5>
                <p>Our support available to help you 24 hours a day, seven days a week.</p>
                <p class="pull-left">Monday-Friday:<span class="pull-right">9am to 5pm</span></p>
                <p class="pull-left">Saturday:<span class="pull-right">10am to 2pm</span></p>
                <p class="pull-left">Sunday:<span class="pull-right">Closed</span></p>
            </div>
        </div>
        <div class="row footer2">
            <div class="copyright">
                <p class="col-md-6 col-sm-">Copyright © 2015 Construction Theme - Theme by <span>WPCharming</span></p>
                <ul class="col-md-6">
                    <li class="pull-right">Privacy Policy</li>
                    <li class="pull-right">Disclaimer</li>
                    <li class="pull-right">Contact Us</li>
                    <li class="pull-right">Projects</li>
                    <li class="pull-right">Our Services</li>

                </ul>
            </div>

        </div>
    </footer>
</div>
</body>
</html>
