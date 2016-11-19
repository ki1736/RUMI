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
</div>

<!-- main title start--> 
<div class="main_title">
	<div class="row">
			<h2 class="pull-left  col-md-6 col-xs-12">PROJECTS</h2>
			<button type="button" class="btn btn-warning our btn-sm pull-right">GET IN TOUCH</button>
	</div>
</div>
<div class="sub_title">
	<div class="row">
			<h6><a href="#">Construction Theme</a><i class="fa fa-angle-right"></i><span>Projects</span></h6>
	</div>
</div>

<!-- main title end--> 

 @endsection
 @section('content')

  <section class="projects">
  	<div class="row">
  		<ul>
  			<a href="#"><li>All Projects</li></a>
  			<a href="#"><li>Interior Design</li></a>
  			<a href="#"><li>Education</li></a>
  			<a href="#"><li>Green Building</li></a>
  			<a href="#"><li>Healthcare</li></a>
  			<a href="#"><li>Office</li></a>
  		</ul>
  	</div>
  	<div class="what_we_contents">
  	  		<div class="we_contents">
	  		<div class="row">
			  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <div class="img">
			      	<p>FRENCH QUARTER INN</p>
					<button type="button" class="btn btn-warning btn-sm">Read More</button>							      
			      </div>
			    </div>
			  </div>
			  	  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <div class="img">
			      	<p>FRENCH QUARTER INN</p>
		 			<button type="button" class="btn btn-warning btn-sm">Read More</button>	
			      </div>
			    </div>
			  </div>
			  	  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <div class="img">
			      	<p>FRENCH QUARTER INN</p>
		 			<button type="button" class="btn btn-warning btn-sm">Read More</button>	
			      </div>
			    </div>
			  </div>
			</div>

			<div class="row">
			  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <div class="img">
			      	<p>FRENCH QUARTER INN</p>
		 			<button type="button" class="btn btn-warning btn-sm">Read More</button>	
			      </div>
			    </div>
			  </div>
			  	  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <div class="img">
			      	<p>FRENCH QUARTER INN</p>
		 			<button type="button" class="btn btn-warning btn-sm">Read More</button>	
			      </div>
			    </div>
			  </div>
			  	  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <div class="img">
			      	<p>FRENCH QUARTER INN</p>
		 			<button type="button" class="btn btn-warning btn-sm">Read More</button>	
			      </div>
			    </div>
			  </div>
			</div>

			<div class="row">
			  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			    	<div class="img">
				    	<p>FRENCH QUARTER INN</p>
			 			<button type="button" class="btn btn-warning btn-sm">Read More</button>	
			    	</div>

			    </div>			      
			  </div>
			  	  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <div class="img">    	
			      	<p>FRENCH QUARTER INN</p>
		 			<button type="button" class="btn btn-warning btn-sm">Read More</button>	</div>
			    </div>
			  </div>
			  	  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
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


 @endsection



