<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'default title')</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
     @yield('link')
    <script type="text/javascript" src="{{ URL::asset('js/jquery-2.2.0.min.js') }}"> </script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}">    </script>
</head>
<body>
    <div class="header">@yield('header')</div>
    <div class="container">
        @yield('content')
    </div>
    <div class="footer">
            <footer>
                <div class="row footer1">
                    <div class="foot_nav">
                    <div class="foot_social">
                    <span>Follow us </span>
                        @foreach($contents_social as $c)
                    <i class="{{$c->url}}"></i>
                        @endforeach
                    {{--<i class="fa fa-linkedin-square"></i>--}}
                    {{--<i class="fa fa-pinterest"></i>--}}
                    {{--<i class="fa fa-google-plus"></i>--}}
                    {{--<i class="fa fa-instagram"></i>--}}
                    </div>

                </div>
                    <div class="col-sm-6 col-md-3"><h5>ABOUT COMPANY</h5>
                        <p>Our clients range from FTSE companies, to large organisations and some small local businesses who are striving to expand.</p>
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
                            <li><i class="{{$c->url}}"></i>{{$c->description}}</li>
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
