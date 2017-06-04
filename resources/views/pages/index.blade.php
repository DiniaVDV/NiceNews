@extends('app')
@section('body')
	@include('partials.nav')
	@include('layouts.slide')
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<form class="navbar-form navbar finder pull-left">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-default" class="form-control" >Submit</button>
					</div>

				</form>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<input type="text" id="datepicker1" size="30" class="form-control">
				</div>
			</div>
		</div>
	</div>
		<div class="container page_wrapper">
			@include('adverts.leftsidebar')
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

				@include('partials.flash')
				@yield('content')
			</div>
			@include('adverts.rightsidebar')	
		</div>
		
		
@endsection()