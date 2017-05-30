
<div class="col-xs-2 col-md-2 col-lg-2 hidden-xs">
	@foreach($adverts as $advert)
		@if($advert->rightsidebar == 'true')
		<div class="panel panel-default advert">
			<div class="panel-heading">
					<h4 class="title">{{$advert->title}}</h4>
			</div>
			<div class="panel-body">
				<p>{{$advert->content}}</p>
				<p id="priceOnList"><strong>{{$advert->price}} грн </strong></p>
				<p>{{$advert->name_company}}</p>
			</div>
		</div>
		@endif
	@endforeach
</div>