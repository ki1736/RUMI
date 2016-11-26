<?php
 ?>

 @extends('master')
 @section('title')
     CONSTRUCTION
 @endsection

 @section('scripts')
 @endsection
 @section('header')
 {{--<!--   tab top start--> --}}
 {{--<div class="container_tab">--}}
	 {{--<div class="raw tab_top">--}}
		 	{{--<div class="social pull-left">--}}
		 		{{--<div class="tab_top_left">--}}
					{{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
					{{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
					{{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
					{{--<a href="#"><i class="fa fa-pinterest"></i></a>--}}
					{{--<a href="#"><i class="fa fa-google-plus"></i></a>--}}
					{{--<a href="#"><i class="fa fa-instagram"></i></a>--}}
					{{--<a href="#"><i class="fa fa-envelope"></i></a>--}}

				{{--</div>--}}
				{{--<div class="tab_top_left">--}}
					{{--<p class="add-text">Add your text or menu here.</p>--}}
				{{--</div>--}}
			{{--</div> --}}
			{{--<div class="tab_top_right pull-right">--}}
				{{--<div class="email_call email">--}}
					{{--<p>Email Us <a href="#">info@business.com</a></p>--}}
				{{--</div>--}}
				{{--<div class="email_call call">--}}
					{{--<p>Toll Free <a href="#">1.800.123.4567</a></p>--}}
				{{--</div>--}}
			{{--</div>--}}
		 {{--</div> --}}
	 {{--</div>--}}
{{--<!--   tab top end --> --}}

{{--<!-- logo start--> --}}
{{--<div class="tab_logo">--}}
	{{--<div class="raw logo text-center">--}}
		{{--<a href="/">--}}
			{{--<img src="{{ URL::asset('images/company_logo.png')}}" alt="main logo"/>--}}
		{{--</a>--}}
	{{--</div>--}}
{{--</div>--}}
{{--<!-- logo end--> --}}
{{--<!-- nav bar start -->--}}
{{--<nav class="navbar navbar-default">--}}
  {{--<div class="container-fluid">--}}
    {{--<!-- Brand and toggle get grouped for better mobile display -->--}}
    {{--<div class="navbar-header">--}}
      {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">--}}
        {{--<span class="sr-only">Toggle navigation</span>--}}
        {{--<span class="icon-bar"></span>--}}
        {{--<span class="icon-bar"></span>--}}
        {{--<span class="icon-bar"></span>--}}
      {{--</button>--}}
    {{--</div>--}}

    {{--<!-- Collect the nav links, forms, and other content for toggling -->--}}
    {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
      {{--<ul class="nav navbar-nav">--}}
		  {{--@foreach($navigations as $nav)--}}
	    {{--<li><a href="{{url($nav->slug)}}">{{$nav->name}}</a></li>--}}
		  {{--@endforeach--}}

	  {{--</ul>--}}
    {{--</div><!-- /.navbar-collapse -->--}}
  {{--</div><!-- /.container-fluid -->--}}
{{--</nav>--}}
{{--<!-- nav bar end -->--}}
 @endsection
 @section('content')
  <section class="main_section">
  <div class="main_image">
  	<div class="dream_contents">
  		<div class="dream_house row">
  			<h2>YOUR DREAM HOUSE</h2>
  			<p>If you dream of designing a new home that takes full advantage<br> of the unique geography and views of land that you love</p>
  			<button type="button" class="btn btn-warning our">OUR SERVIES</button>
  		    <button type="button" class="btn btn-warning get">GET A QUOTE</button>
  		</div>	

			</div>
  		</div>




  	<div class="contents_back">
        <div class="container">
        <div class="contents_top">
            @foreach($contents_main as $c)
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="thumbnail">
                            <img src="{{ url(\Config::get('app.uploads.thumb').$c->images->url)}}" alt="{{$c->alt}}">
                            <div class="caption">
                                <h4>{{$c->title}}</h4>
                                <p>{{$c->description}}</p>
                                <a href="#">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
  </section>

  <div class="clearfix"></div>

  <section class="us">
  	<div class="us_contents">
  		<div class="row padding_15">
  			<h3>U.S. Certified Contractors</h3>
  			<hr class="yellow_line"/>
  		</div>
        @foreach($contents_contractor as $c)
  		<div class="row text-center">
  			<div class="col-md-4 col-sm-4">
  				<i class="{{$c->images->url}}"></i>
  				<a href="#"><h4>{{$c->title}}</h4></a>
  				<p>{{$c->description}}</p>
  			</div>@endforeach
  		</div>

  	</div>  	
  </section>
  <section class="work_with">
  	<div class="work_img">
  		<div class="work_contents row padding_15">
  			<div class="work_contents_in">
  			<h5>WORKING WITH US</h5>
  		  	<h2>CONTRACTORS & CONSTRUCTION</h2>
  		  	<h2>MANAGERS SINCE 1989</h2>
  		  	<button type="button" class="btn btn-warning get">GET A QUOTE</button>
  		  	</div>
  		</div>
  	</div>
  </section>
  <section class="What_we_do">
  	<div class="what_we_contents">
  	  	<div class="row padding_15">
  			<h3 class="pull-left">What We Do 
  			<a href="#"> <i class="fa fa fa-angle-right pull-right"></i></a>
  			<a href="#"><i class="fa fa fa-angle-left pull-right"></i></a>
  			</h3>
  			<hr class="yellow_line"></hr>
  		</div>

  	  		<div class="we_contents">
                @foreach($contents_service as $c)
	  		<div class="row">
			  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <img src="{{ url(\Config::get('app.uploads.thumb').$c->images->url)}}" alt="{{$c->alt}}">
			      <div class="caption">
			        <h4>{{$c->title}}</h4>
			        <p>{{$c->description}}</p>
			        <a href="#">SERVICE DETAIL</a>
			       </div>
			    </div>
			  </div>@endforeach
			</div>
  		</div>
  	</div>
  </section>
<section class="featured">
	<div class="featured_works">
	  	<div class="row padding_15">
			<h3 class="pull-left">Featured Works
			<a href="#"> <i class="fa fa fa-angle-right pull-right"></i></a>
			<a href="#"><i class="fa fa fa-angle-left pull-right"></i></a>
			</h3>
			<hr class="grey_line"></hr>
		</div>

	  		<div class="we_contents">
  		<div class="row">
		  <div class="col-md-4 col-sm-4 ">
		    <div class="thumbnail thumbnail1">
		    	<div class="img">
			      	<p>FRENCH QUARTER INN</p>
		 			<button type="button" class="btn btn-warning btn-sm">Read More</button>
			      </div>
		    </div>
		  </div>
		  	  <div class="col-md-4 col-sm-4">
		    <div class="thumbnail thumbnail2">
			      <div class="img">
			      	<p>FRENCH QUARTER INN</p>
		 			<button type="button" class="btn btn-warning btn-sm">Read More</button>	
			      </div>
		    </div>
		  </div>
		  	  <div class="col-md-4 col-sm-4">
		    <div class="thumbnail thumbnail3">
			      <div class="img">
			      	<p>FRENCH QUARTER INN</p>
		 			<button type="button" class="btn btn-warning btn-sm">Read More</button>	
			      </div>
		    </div>
		  </div>
		</div>
		</div>
	</div>
</section>
<section class="news">
	<div class="recent_news">
	  	<div class="row padding_15">
			<h3 class="pull-left">Recent News 
			<a href="#"> <i class="fa fa fa-angle-right pull-right"></i></a>
			<a href="#"><i class="fa fa fa-angle-left pull-right"></i></a>
			</h3>
			<hr class="grey_line"></hr>
		</div>

	  	<div class="we_contents">
            @foreach($contents_news as $c)
  		<div class="row">
		  <div class="col-md-4 col-sm-4">
		    <div class="thumbnail">
		      <img src="{{ url(\Config::get('app.uploads.thumb').$c->images->url)}}" alt="{{$c->alt}}">
		      <div class="caption">
		        <a href="#"><h4>{{$c->title}}</h4></a>
		        <p class="under_line"><i class="fa fa-file-text-o"></i>FEBRUARY 12,2015 &nbsp;&nbsp;
		        <i class="fa fa-comments"></i>NO COMMEMTS</p>
		        <p>{{$c->description}}</p>
		         <button type="button" class="btn btn-warning read_more">READ MORE</button>
		       </div>
		    </div>
		  </div>
            @endforeach
		</div>
		</div>
	</div>
</section>
<section class="last_section">
	<div class="our_test">
		<div class="row our">
			<div class="col-md-6">
				<div class="row">
					<h3 class="pull-left">Our Clients</h3>
					<hr class="yellow_line"/>
				</div>
				<div class="sublogo">

					<div class="row">
                        @foreach($contents_no_text[0]->images_all as $c)
                            <img class="col-md-4 col-xs-4" src="{{ url(\Config::get('app.uploads.thumb').$c->url)}}" alt="{{$c->alt}}" >
                        @endforeach
					</div>

				</div>

			</div>
		    <div class="col-md-6">
		    	<div class="test">

				<div class="row">
			    	<h3 class="pull-left">Testimonials</h3>
					<hr class="yellow_line"/>
					</div>
                    @foreach($contents_testimonia as $c)
					<div class="row">
						<p>{{$c->description}}</p>
					</div>
					<div class="test_img">
						<img class="img-circle" src="{{ url(\Config::get('app.uploads.thumb').$c->images->url)}}" alt="{{$c->alt}}">
						<span>{{$c->title}}</span>
                        @endforeach
					</div>
				</div>
		    </div>

		</div>
	</div>
</section>
 @endsection

@section('script')
<script>

</script>
@endsection


