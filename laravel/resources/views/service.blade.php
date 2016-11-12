<?php
 ?>

 @extends('master')
 @section('title')
     CONSTRUCTION
 @endsection
 @section('header')
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
        <li><a href="/">Home</a></li>
        <li><a href="#">Features</a></li>
        <li><a href="#">Who We Are</a></li>
        <li><a href="/service">Services</a></li>
        <li><a href="/projects">Our Work</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="#">News</a></li>
        <li><a href="/contact">Contact Us</a></li>
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
			<h2 class="pull-left col-md-6 col-xs-12">OUR SERVICES</h2>
			<button type="button" class="btn btn-warning our btn-sm pull-right">GET IN TOUCH</button>
	</div>
</div>
<div class="sub_title">
	<div class="row">
			<h6><a href="#">Construction Theme</a><i class="fa fa-angle-right"></i><span>Our Services</span></h6>
	</div>
</div>

<!-- main title end--> 

 @endsection
 @section('content')

  <section class="What_we_do">
  	<div class="what_we_contents">
  	  		<div class="we_contents">
	  		<div class="row">
			  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <img src="{{ URL::asset('images/whatwedo1.jpg')}}" alt="what we do img1">
			      <div class="caption">
			        <h4>Metal Roofing</h4>
			        <p>Homeowners can have confidence in their choice of a metal roofing contractor knowing they have met certain requirements in their services.</p>
			        <a href="#"">VIEW SERVICE DETAIL</a> 
			       </div>
			    </div>
			  </div>
			  	  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <img src="{{ URL::asset('images/whatwedo2.jpg')}}" alt="what we do img2">
			      <div class="caption">
			        <h4>General Contracting</h4>
			        <p>As the general contractor, we first create the highest level of trust and integrity with our clients. We value our role in the success of your project.</p>
			        <a href="#"">VIEW SERVICE DETAIL</a> 
			      </div>
			    </div>
			  </div>
			  	  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <img src="{{ URL::asset('images/whatwedo3.jpg')}}" alt="what we do img3">
			      <div class="caption">
			        <h4>Construction Consultant</h4>
			        <p>Construction consultants provide expert proactive and forensic support for construction projects and construction claims.</p>
			        <a href="#"">VIEW SERVICE DETAIL</a> 
			      </div>
			    </div>
			  </div>
			</div>

			<div class="row">
			  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <img src="{{ URL::asset('images/service1.jpg')}}" alt="what we do img1">
			      <div class="caption">
			        <h4>House Renovation</h4>
			        <p>With over thirty years of experience in residential renovation design and over 16,000 renovation plans delivered to this day.</p>
			        <a href="#"">VIEW SERVICE DETAIL</a> 
			       </div>
			    </div>
			  </div>
			  	  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <img src="{{ URL::asset('images/service3.jpg')}}" alt="what we do img2">
			      <div class="caption">
			        <h4>Green Building</h4>
			        <p>Green construction refers to a structure and using process that is environmentally responsible and resource-efficient throughout a building's life-cycle.</p>
			        <a href="#"">VIEW SERVICE DETAIL</a> 
			      </div>
			    </div>
			  </div>
			  	  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <img src="{{ URL::asset('images/service2.jpg')}}" alt="what we do img3">
			      <div class="caption">
			        <h4>Laminate Flooring</h4>
			        <p>The flooring professionals at Construction offering laminate flooring and timber flooring with award winning flooring installation services.</p>
			        <a href="#"">VIEW SERVICE DETAIL</a> 
			      </div>
			    </div>
			  </div>
			</div>
  		</div>
  	</div>
  </section>


 @endsection



