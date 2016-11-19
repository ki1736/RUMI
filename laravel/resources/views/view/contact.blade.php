<?php
 ?>

 @extends('master')
  @section('title')
     CONSTRUCTION
 @endsection
 @section('link')
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"> 
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/google_map.js') }}"> </script>
 @endsection
 @section('header')
 <!--   tab top start--> 
 <div class="contact_tab "> 
 <div class="service_container_tab row">
 	<div class="service_logo col-md-3 col-sm-3">
 		<a href="/">
			<img src="{{ URL::asset('images/logo_white.png')}}" alt="main logo"/>
		</a>
 	</div>
 	<div class="service_nav_group col-md-9 col-sm-9">
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
    <div class="collapse navbar-collapse service_nav contact_nav" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
		  @foreach($navigations as $nav)
			  <li><a href="{{$nav->slug}}">{{$nav->name}}</a></li>
		  @endforeach

	  </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- nav bar end --> 

</div>
<!--   tab top end --> 
<div class="contact_main_title">
	<h1>GET IN TOUCH WITH US</h1>
	<h5>Contact The Contsruction Company</h5>
</div>
</div>


</div>
<div class="sub_title">
	<div class="row">
			<h6><a href="#">Construction Theme</a><i class="fa fa-angle-right"></i><span>Contact Us</span></h6>
	</div>
</div>


 @endsection
 @section('content')

  <section class="contact">
  	<div class="row padding_15">
  			<h3>Contact Us</h3>
  			<hr class="yellow_line pull-left"></hr>
  	</div>
	<div class="contact_form row">
		<div class="col-md-6 con_form">
			<p>Call or submit our online form to request an estimate or for general questions about U.S. Certified Contractors and our services. We look forward to serving you!
			</p>
			<div id="contact" class="container">
				<div class="row">  		
			        <div class="col-md-6 form-group">
			          <input class="form-control" id="firstname" name="firstname" placeholder="First Name *" type="text" required>
			        </div>
			        <div class="col-md-6 form-group">
			          <input class="form-control" id="lastname" name="lastname" placeholder="Last Name *" type="text" required>
			        </div>
			      </div>
			      <div class="row">  		
			        <div class="col-md-6 form-group">
			          <input class="form-control" id="email" name="email" placeholder="Your Email *" type="email" required>
			        </div>
			        <div class="col-md-6 form-group">
			          <input class="form-control" id="phone" name="phone" placeholder="Your Phone Number *" type="phone" required>
			        </div>
			      </div>
			      <div class="row">  		
			        <div class="form-group">
			          <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text" required>
			        </div>
			       
			      </div>

			      <textarea class="form-control" id="comments" name="comments" placeholder="Message" rows="15"></textarea>
			      <br>
			      <div class="row">
			        <div class="form-group">
			          <button class="btn btn-warning pull-left" type="submit">SEND MESSAGE</button>
			        </div>
				  </div>
			  </div>
			   </div>
			
			
		<div class="col-md-6 con_map">
			<div class="col-md-6 col-sm-6">
				<h4>MAILING ADDRESS</h4>
				@foreach($contents_info1 as $c)
				<p>{{$c->description}}</p>
					@endforeach
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>CONTACT INFO</h4>

				<p>@foreach($contents_info2 as $c)<span>{{$c->description}}</span>
					<br>@endforeach
				<span class="llc">@construction_llc</span><br>
				</p>

			</div>
			<div class="col-md-12" id="googleMap"></div>
		</div>

	</div>

  	
  </section>


 @endsection



