<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{asset('/')}}">NiceNews</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
				@foreach($categories as $category)
					<li><a href="{{asset('/categories')}}/{{$category->name}}">{{$category->title}}</a></li>
				@endforeach
            </ul>
			@if(Auth::guest())
				<ul class="nav navbar-nav navbar-right">
					@foreach($navbar as $element)
					   @if($element->for_unreg_users == 1)
						   <li><a href="{{asset($element->alias)}}">{{$element->title}}</a></li>	
						@endif
					@endforeach	
				</ul>
			@elseif(Auth::user()))
				<ul class="nav navbar-nav navbar-right dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="{color: #9D9D9D;}">
						<i class="fa fa-user" aria-hidden="true"></i>{{ Auth::user()->name }} <span class="caret"></span>
					</a>		
					<ul class="dropdown-menu" role="menu">
						@foreach($navbar as $element)
							@if(Auth::user()->isThe('admin'))
								@if($element->for_admin == 1)
									<li><a href="{{asset($element->alias)}}">{{$element->title}}</a></li>
								@endif
							@endif
							@if(Auth::user()->isThe('moderator'))
								@if($element->for_moderator == 1)
									<li><a href="{{asset($element->alias)}}">{{$element->title}}</a></li>	
								@endif							
							@elseif($element->for_reg_users == 1)
							   <li><a href="{{asset($element->alias)}}">{{$element->title}}</a></li>	
							@endif
						@endforeach
							<li role="separator" class="divider"></li>
							<li>										  
								<a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выйти</a>
								<form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
				</ul>
			@endif
				<li class="sidebar-search">
					<div class="input-group custom-search-form">
						<input type="text" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div>
					<!-- /input-group -->
				</li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>