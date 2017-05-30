<div class="col-sm-2 col-md-2 col-lg-2 hidden-xs">
	@foreach($adverts as $advert)
		@if($advert->leftsidebar == 'true')
		<div class="panel panel-default advert">
			<div class="panel-heading">
					<h4 class="title">{{$advert->title}}</h4>
			</div>
			<div class="panel-body">
				<p>{{$advert->content}}</p>
				<p class="price"><strong>{{$advert->price}} грн</strong></p>
				<p>{{$advert->name_company}}</p>
			</div>
		</div>
		@endif
	@endforeach
</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">