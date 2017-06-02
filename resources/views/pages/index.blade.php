@extends('app')
@section('body')
	@include('partials.nav')
	@include('layouts.slide')
	<div class="container">
		<form class="navbar-form navbar finder pull-left">
			<div class="form-group">
				<input type="text" class="form-control finderIn" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
		<div class="container">
			@include('adverts.leftsidebar')
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				@include('partials.flash')
				@yield('content')
			</div>
			@include('adverts.rightsidebar')	
		</div>
		
		
@endsection()