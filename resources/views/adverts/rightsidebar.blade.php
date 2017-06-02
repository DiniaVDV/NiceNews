
<div class="col-xs-3 col-md-3 col-lg-3 hidden-xs">
	@foreach($adverts as $advert)
		@if($advert->rightsidebar == 'Да')
		<div class="panel panel-default advert">
			<div class="panel-heading">
					<h4 class="title">{{$advert->title}}</h4>
			</div>
			<div class="panel-body">
				<p>{{$advert->content}}</p>
				<p id="priceOnList"><strong>{{$advert->price}} грн </strong></p>
				<p>{{$advert->name_company}}</p>
				<a href="{{$advert->site_company}}">{{$advert->site_company}}</a>
			</div>
		</div>
		@endif
	@endforeach
</div>