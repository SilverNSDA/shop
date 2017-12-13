	<!-- Header -->
	<div class="aitsheaderw3ls" id="agilehome">
		<!-- Navigation -->
		<div class="agiletopbar">
			<div class="wthreenavigation">
				<div class="menu-wrap">
					<nav class="menu">
						<div class="icon-list">
							<a class="{{$scroll}}" href="{{$home}}"><i class="fa fa-home"></i><span>Home</span></a>
							<a class="{{$scroll}}" href="{{$About}}"><i class="fa fa-info"></i><span>About</span></a>
							<a class="{{$scroll}}" href="{{$Spec}}"><i class="fa fa-birthday-cake"></i><span>Specials</span></a>
							<a class="" href="{{$shop}}"><i class="fa fa-shopping-cart"></i><span>Shop</span></a>
							<a class="{{$scroll}}" href="{{$port}}"><i class="fa fa-picture-o"></i><span>Portfolio</span></a>
							<a class="{{$scroll}}" href="{{$chef}}"><i class="fa fa-user"></i><span>Chefs</span></a>
							<a class="{{$scroll}}" href="{{$feed}}"><i class="fa fa-comment-o"></i><span>Feedback</span></a>
							<a class="{{$scroll}}" href="{{$nletter}}"><i class="fa fa-envelope-o"></i><span>Subscribe</span></a>
							<a class="{{$scroll}}" href="{{$contact}}"><i class="fa fa-phone"></i><span>Contact</span></a>
							<ul class="nav navbar-nav navbar-right">
							<!-- Authentication Links -->
							@guest
								<li><a href="{{ route('login') }}">Login</a></li>
								<li><a href="{{ route('register') }}">Register</a></li>
							@else
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
										{{ Auth::user()->name }} <span class="caret"></span>
									</a>

									<ul class="dropdown-menu">
										<li>
											<a href="{{ route('logout') }}"
												onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
												Logout
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>
										</li>
									</ul>
								</li>
							@endguest
							</ul>
							{{--  @if logged
								<a class="" href=""><i class="fa fa-users"></i><span>Log in</span></a>
								<a class="" href=""><i class="fa fa-user-plus"></i><span>Sign up</span></a>
							@else
								<a class="" href=""><i class="fa fa-sign-out "></i><span>Logout</span></a>
							@endif  --}}
							
						</div>
					</nav>
                    <button class="close-button" id="close-button">Close Menu</button>
                </div>
            <button class="menu-button" id="open-button">Open Menu</button>
        </div>
        <div class="agileinfomenu" style="position: fixed; border: none !important;">
            {{--  <p>MENU</p>  --}}
        </div>
        <div class="aitslogow3ls">
                <a href="index.html"><div class="agilelogo">Cake Factory</div></a>
        </div>
        {{--  <div class="wthreecontact">
            <p><a class="scroll" href="#aitscontactw3l"><i class="fa fa-envelope-o" aria-hidden="true"></i> CONTACT US</a></p>
        </div>  --}}
        <div class="clearfix"></div>
    </div>
    <!-- //Navigation -->

    <!-- Navigation-JavaScript -->
    <script src="js/classie.js"></script>
    <script src="js/main.js"></script>
	<!-- //Navigation-JavaScript -->



	</div>
	<!-- //Header -->