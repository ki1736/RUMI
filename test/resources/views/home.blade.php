<?php
 ?>

 @extends('master')
 @section('title')
     CONSTRUCTION
 @endsection
 @section('header')
 <!--   tab top start--> 
 <div class="container_tab">
	 <div class="raw tab_top">
		 	<div class="social pull-left">
		 		<div class="tab_top_left">
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-envelope"></i></a>
				</div>
				<div class="tab_top_left">
					<p class="add-text">Add your text or menu here.</p>
				</div>
			</div> 
			<div class="tab_top_right pull-right">
				<div class="email_call email">
					<p>Email Us <a href="#">info@business.com</a></p>
				</div>
				<div class="email_call call">
					<p>Toll Free <a href="#">1.800.123.4567</a></p>
				</div>
			</div>
		 </div> 
	 </div>
<!--   tab top end --> 

<!-- logo start--> 
<div class="tab_logo">
	<div class="raw logo text-center">
		<a href="/">
			<img src="{{ URL::asset('images/company_logo.png')}}" alt="main logo"/>
		</a>
	</div>
</div>
<!-- logo end--> 
<!-- nav bar start -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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

  		<div class="contents">
	  		<div class="row">
			  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <img src="{{ URL::asset('images/service1.jpg')}}" alt="dream house img1">
			      <div class="caption">
			        <h4>Best House Renovation</h4>
			        <p>Constructor explains how you can enjoy high end flooring trends like textured wood and realistic stones with new laminate flooring.</p>
			        <a href="#"">READ MORE</a> 
			       </div>
			    </div>
			  </div>
			  	  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <img src="{{ URL::asset('images/service2.jpg')}}" alt="dream house img2">
			      <div class="caption">
			        <h4>The Effective Teamwork</h4>
			        <p>As the general contractor, we first create the highest level of trust and integrity with our clients. We value our role in the success of your project.</p>
			        <a href="#"">READ MORE</a> 
			      </div>
			    </div>
			  </div>
			  	  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <img src="{{ URL::asset('images/service3.jpg')}}" alt="dream house img3">
			      <div class="caption">
			        <h4>The Green Building</h4>
			        <p>Green construction refers to a structure and using process that is environmentally responsible and resource-efficient throughout a building's life cycle.</p>
			        <a href="#"">READ MORE</a> 
			      </div>
			    </div>
			  </div>
			</div>
  		</div>

  	</div>

  	</div>
  	<div class="contents_back">
  	</div>

  </section>

  <section class="us">
  	<div class="us_contents">
  		<div class="row padding_15">
  			<h3>U.S. Certified Contractors</h3>
  			<hr class="yellow_line"></hr>
  		</div>
  		<div class="row text-center">
  			<div class="col-md-4 col-sm-4">
  				<i class="fa fa-university"></i>
  				<a href="#"><h4>Government Building</h4></a>
  				<p>We understand you need a building that works for
				you and your organization, and it must function well.</p>
  			</div>
  			<div class="col-md-4 col-sm-4">
				<i class="fa fa-hospital-o"></i>   				
				<a href="#"><h4>Health Care Construction</h4></a>
				<p>We are very familiar with the challenges of creating high-quality, cost-effective health care environments.</p>
			</div>

  			<div class="col-md-4 col-sm-4">
				<i class="fa fa-beer"></i>
				<a href="#"><h4>Water Treatment</h4></a>
				<p>The most powerful things we do is help improve
				water quality for millions of people each year.</p>
  			</div>
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
	  		<div class="row">
			  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <img src="{{ URL::asset('images/whatwedo1.jpg')}}" alt="what we do img1">
			      <div class="caption">
			        <h4>Metal Roofing</h4>
			        <p>Homeowners can have confidence in their choice of a metal roofing contractor knowing they have met certain requirements in their services.</p>
			        <a href="#"">SERVICE DETAIL</a> 
			       </div>
			    </div>
			  </div>
			  	  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <img src="{{ URL::asset('images/whatwedo2.jpg')}}" alt="what we do img2">
			      <div class="caption">
			        <h4>General Contracting</h4>
			        <p>As the general contractor, we first create the highest level of trust and integrity with our clients. We value our role in the success of your project.</p>
			        <a href="#"">SERVICE DETAIL</a> 
			      </div>
			    </div>
			  </div>
			  	  <div class="col-md-4 col-sm-4">
			    <div class="thumbnail">
			      <img src="{{ URL::asset('images/whatwedo3.jpg')}}" alt="what we do img3">
			      <div class="caption">
			        <h4>Construction Consultant</h4>
			        <p>Construction consultants provide expert proactive and forensic support for construction projects and construction claims.</p>
			        <a href="#"">SERVICE DETAIL</a> 
			      </div>
			    </div>
			  </div>
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
  		<div class="row">
		  <div class="col-md-4 col-sm-4">
		    <div class="thumbnail">
		      <img src="{{ URL::asset('images/news1.jpg')}}" alt="news img1">
		      <div class="caption">
		        <a href="#"><h4>Finding New Buildings in the Dust</h4></a>
		        <p class="under_line"><i class="fa fa-file-text-o"></i>FEBRUARY 12,2015 &nbsp;&nbsp;
		        <i class="fa fa-comments"></i>NO COMMEMTS</p>
		        <p>With the continued and growing emphasis on sustainability in construction we could be on the verge of a radical shift in how ...</p>
		         <button type="button" class="btn btn-warning read_more">READ MORE</button>
		       </div>
		    </div>
		  </div>
		  	  <div class="col-md-4 col-sm-4">
		    <div class="thumbnail">
		      <img src="{{ URL::asset('images/news2.jpg')}}" alt="news img1">
		      <div class="caption">
		        <a href="#"><h4>How To Build A Construction Plan</h4></a>
		        <p class="under_line"><i class="fa fa-file-text-o"></i>FEBRUARY 12,2015 &nbsp;&nbsp;
		        <i class="fa fa-comments"></i>7 COMMEMTS</p>
		        <p>Learn how to market your contractor business professionally. In depth knowledge of attracting clients with online marketing strategies and deep thinking ...</p>
		         <button type="button" class="btn btn-warning read_more">READ MORE</button>
		      </div>
		    </div>
		  </div>
		  	  <div class="col-md-4 col-sm-4">
		    <div class="thumbnail">
		      <img src="{{ URL::asset('images/news3.jpg')}}" alt="news img1">
		      <div class="caption">
		        <a href="#"><h4>Construction Honored with AGC Builders</h4></a>
		        <p class="under_line"><i class="fa fa-file-text-o"></i>FEBRUARY 12,2015 &nbsp;&nbsp;
		        <i class="fa fa-comments"></i>NO COMMEMTS</p>
		        <p>Last night, Construction was honored to accept a Best Builders Award from the Associated General Contractors of Vermont for the construction ...</p>
		         <button type="button" class="btn btn-warning read_more">READ MORE</button>
		      </div>
		    </div>
		  </div>
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
					<hr class="yellow_line"></hr>
				</div>
				<div class="sublogo">
					<div class="row">
						<img class="col-md-4 col-xs-4" src="{{ URL::asset('images/sublogo_1.png')}}" alt="sublogo img1" >
						<img class="col-md-4 col-xs-4" src="{{ URL::asset('images/sublogo_2.png')}}" alt="sublogo img2">
						<img class="col-md-4 col-xs-4" src="{{ URL::asset('images/sublogo_3.png')}}" alt="sublogo img3">
					</div>
					<div class="row">
						<img class="col-md-4 col-xs-4" src="{{ URL::asset('images/sublogo_4.png')}}" alt="sublogo img4">
						<img class="col-md-4 col-xs-4" src="{{ URL::asset('images/sublogo_5.png')}}" alt="sublogo img5">
						<img class="col-md-4 col-xs-4" src="{{ URL::asset('images/sublogo_6.png')}}" alt="sublogo img6">
					</div>
				</div>

			</div>
		    <div class="col-md-6">
		    	<div class="test">
				<div class="row">
			    	<h3 class="pull-left">Testimonials</h3>
					<hr class="yellow_line"></hr>
					</div>
					<div class="row">
						<p>Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with ‘real’ content. This is required when, for example, the final text is not yet available.</p>
					</div>
					<div class="test_img">
						<img class="img-circle"" src="{{ URL::asset('images/testimonials.jpg')}}" alt="testimonials picture">
						<span>Howard K. Stern</span>
					</div>
				</div>
		    </div>

		</div>
	</div>
</section>
 @endsection



