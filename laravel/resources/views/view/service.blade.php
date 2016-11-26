<?php
 ?>

 @extends('sub_master')
 @section('title')
     CONSTRUCTION
 @endsection

 @section('content')

  <section class="What_we_do">
  	<div class="what_we_contents">
  	  		<div class="we_contents">
				@foreach($contents_service as $c)
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<div class="thumbnail">
								<img src="{{ url(\Config::get('app.uploads.thumb').$c->images->url)}}" alt="{{$c->alt}}">
								<div class="caption">
									<h4>{{$c->title}}</h4>
									<p>{{$c->description}}</p>
									<a href="#">VIEW SERVICE DETAIL</a>
								</div>
							</div>
						</div>@endforeach
	  		{{--<div class="row">--}}
			  {{--<div class="col-md-4 col-sm-4">--}}
			    {{--<div class="thumbnail">--}}
			      {{--<img src="{{ URL::asset('images/whatwedo1.jpg')}}" alt="what we do img1">--}}
			      {{--<div class="caption">--}}
			        {{--<h4>Metal Roofing</h4>--}}
			        {{--<p>Homeowners can have confidence in their choice of a metal roofing contractor knowing they have met certain requirements in their services.</p>--}}
			        {{--<a href="#"">VIEW SERVICE DETAIL</a> --}}
			       {{--</div>--}}
			    {{--</div>--}}
			  {{--</div>--}}
			  	  {{--<div class="col-md-4 col-sm-4">--}}
			    {{--<div class="thumbnail">--}}
			      {{--<img src="{{ URL::asset('images/whatwedo2.jpg')}}" alt="what we do img2">--}}
			      {{--<div class="caption">--}}
			        {{--<h4>General Contracting</h4>--}}
			        {{--<p>As the general contractor, we first create the highest level of trust and integrity with our clients. We value our role in the success of your project.</p>--}}
			        {{--<a href="#"">VIEW SERVICE DETAIL</a> --}}
			      {{--</div>--}}
			    {{--</div>--}}
			  {{--</div>--}}
			  	  {{--<div class="col-md-4 col-sm-4">--}}
			    {{--<div class="thumbnail">--}}
			      {{--<img src="{{ URL::asset('images/whatwedo3.jpg')}}" alt="what we do img3">--}}
			      {{--<div class="caption">--}}
			        {{--<h4>Construction Consultant</h4>--}}
			        {{--<p>Construction consultants provide expert proactive and forensic support for construction projects and construction claims.</p>--}}
			        {{--<a href="#"">VIEW SERVICE DETAIL</a> --}}
			      {{--</div>--}}
			    {{--</div>--}}
			  {{--</div>--}}
			</div>

			@foreach($contents_main as $c)
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="thumbnail">
							<img src="{{ url(\Config::get('app.uploads.thumb').$c->images->url)}}" alt="{{$c->alt}}">
							<div class="caption">
								<h4>{{$c->title}}</h4>
								<p>{{$c->description}}</p>
								<a href="#">VIEW SERVICE DETAIL</a>
							</div>
						</div>
					</div>
					@endforeach
			{{--<div class="row">--}}
			  {{--<div class="col-md-4 col-sm-4">--}}
			    {{--<div class="thumbnail">--}}
			      {{--<img src="{{ URL::asset('images/service1.jpg')}}" alt="what we do img1">--}}
			      {{--<div class="caption">--}}
			        {{--<h4>House Renovation</h4>--}}
			        {{--<p>With over thirty years of experience in residential renovation design and over 16,000 renovation plans delivered to this day.</p>--}}
			        {{--<a href="#"">VIEW SERVICE DETAIL</a> --}}
			       {{--</div>--}}
			    {{--</div>--}}
			  {{--</div>--}}
			  	  {{--<div class="col-md-4 col-sm-4">--}}
			    {{--<div class="thumbnail">--}}
			      {{--<img src="{{ URL::asset('images/service3.jpg')}}" alt="what we do img2">--}}
			      {{--<div class="caption">--}}
			        {{--<h4>Green Building</h4>--}}
			        {{--<p>Green construction refers to a structure and using process that is environmentally responsible and resource-efficient throughout a building's life-cycle.</p>--}}
			        {{--<a href="#"">VIEW SERVICE DETAIL</a> --}}
			      {{--</div>--}}
			    {{--</div>--}}
			  {{--</div>--}}
			  	  {{--<div class="col-md-4 col-sm-4">--}}
			    {{--<div class="thumbnail">--}}
			      {{--<img src="{{ URL::asset('images/service2.jpg')}}" alt="what we do img3">--}}
			      {{--<div class="caption">--}}
			        {{--<h4>Laminate Flooring</h4>--}}
			        {{--<p>The flooring professionals at Construction offering laminate flooring and timber flooring with award winning flooring installation services.</p>--}}
			        {{--<a href="#"">VIEW SERVICE DETAIL</a> --}}
			      {{--</div>--}}
			    {{--</div>--}}
			  {{--</div>--}}
			{{--</div>--}}
  		</div>
  	</div>
  </section>


 @endsection



