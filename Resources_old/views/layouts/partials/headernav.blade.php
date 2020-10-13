<header class="header">
	<!-- Navbar-->
	<nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
		<div class="container-fluid">
			<div class="d-flex align-items-center">
				<a href="{{ url($lang) }}" class="navbar-brand py-1">
				<img src="{{ asset(Theme::metatag('logo_src')) }}" height="31" alt="{{ Theme::metatag('title') }}">
				{{--
				<img src="{{ Panel::get($home)->imgSrc(['width'=>100,'height'=>40]) }}" alt="Directory logo">
				--}}
				</a>
				{{--
				@include('pub_theme::layouts.partials.headernav.search')
				--}}
			</div>
			<button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
			<!-- Navbar Collapse -->
			<div id="navbarCollapse" class="collapse navbar-collapse">
				{{--
				@include('pub_theme::layouts.partials.headernav.searchcollapsed')
				--}}
				<ul class="navbar-nav ml-auto">
					{{--
					@include('pub_theme::layouts.partials.headernav.home')
					@include('pub_theme::layouts.partials.headernav.megamenu')
					<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
					--}}
					@include('pub_theme::layouts.partials.headernav.lang')
					@auth
					<li class="nav-item dropdown ml-lg-3">
						<a id="userDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						{{--
						<img src="{{ Theme::asset('pub_theme::img/avatar/avatar-10.jpg') }}" alt="Jack London" class="avatar avatar-sm avatar-border-white mr-2">
						--}}
						<img src="{{ Panel::get(\Auth::user())->avatar() }}" alt="Me" class="avatar avatar-sm avatar-border-white mr-2">
						</a>
						<div aria-labelledby="userDropdownMenuLink" class="dropdown-menu dropdown-menu-right">
							<a href="{{ Panel::get(\Auth::user()->profile)->showUrl() }}" class="dropdown-item">
							@lang('lu::auth.profile')
							</a>

							{{--
							<a href="user-grid.html" class="dropdown-item">Bookings &mdash; grid view </a>
							<a href="user-booking-detail.html" class="dropdown-item">Booking detail </a>
							--}}
                            <div class="dropdown-divider"></div>
                                @foreach(Theme::xotModelEager('widget')
                                    //->where('layout_position','profile_dropdown')
                                    ->ofLayoutPosition('profile_dropdown')
                                    ->get()
                                    as $widget)
									{!! $widget->toHtml() !!}
								@endforeach

							<a href="{{ route('logout',$params) }}" class="dropdown-item"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
							<i class="fas fa-sign-out-alt mr-2 text-muted"></i>@lang('lu::auth.sign_out')
							</a>
							<form id="logout-form"
								action="{{ route('logout',$params) }}"
								method="POST"
								style="display: none;">
								{{ csrf_field() }}
							</form>
						</div>
					</li>
					@else
					<li class="nav-item">
						<a href="{{ route('login') }}" class="nav-link">
						@lang('lu::auth.sign_in')
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('container0.create',['lang'=>$lang,'container0'=>'profile']) }}" class="nav-link">
						@lang('lu::auth.sign_up')
						</a>
					</li>
					@endauth

					@foreach(Theme::xotModelEager('widget')->ofLayoutPosition('headernav')->get() as $widget)
					{!! $widget->toHtml() !!}
					@endforeach

				</ul>
			</div>
		</div>
	</nav>
	<!-- /Navbar -->
</header>
