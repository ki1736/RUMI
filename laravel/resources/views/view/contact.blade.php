<?php
 ?>

 @extends('contact_master')
  @section('title')
     CONSTRUCTION
 @endsection
 @section('link')
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"> 
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/google_map.js') }}"> </script>
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
				@foreach($contents_info as $c)
					@if($c->title === 'address')
						<p>
							{{$c->description}}
						</p>
					@endif
				@endforeach
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>CONTACT INFO</h4>
				<p>
					@foreach($contents_info as $c)
						@if($c->title === 'phone' || $c->title ==='email')
						<span>{{$c->description}}</span> <br/>
						@endif
					@endforeach
				<span class="llc">@construction_llc</span><br>
				</p>

			</div>
			<div class="col-md-12" id="googleMap"></div>
		</div>

	</div>

  	
  </section>


 @endsection



