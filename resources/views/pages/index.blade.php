@extends('app')
@section('body')
	@include('partials.nav')
	@include('layouts.slide')
	@if(isset($tags))
		@include('partials.finder')
	@endif
		<div class="container page_wrapper">
			@include('adverts.leftsidebar')
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

				@include('partials.flash')
				@yield('content')
			</div>
			@include('adverts.rightsidebar')	
		</div>
		
		
@endsection()