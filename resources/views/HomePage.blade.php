<?php 
$home = '#agilehome';
$About ='#sl3waboutstia';
$Spec ='#wthreedesserts';
$shop='/shop';
$port ='#portfolio';
$chef ='#chefw3agile';
$feed ='#agileinfofeedback';
$nletter ='#newsletter';
$contact ='#aitscontactw3l';

$scroll ='scroll'
?>

@extends('header')

@section('body')
	<!-- Header -->
	@include('navigation')
			<!-- Slider -->
		<div class="slider">
			<ul class="rslides" id="slider">
				<li>
					<img src="images/slide-1.jpg" alt="Cake Factory">
				</li>
				<li>
					<img src="images/slide-2.jpg" alt="Cake Factory">
				</li>
				<li>
					<img src="images/slide-3.jpg" alt="Cake Factory">
				</li>
				<li>
					<img src="images/slide-4.jpg" alt="Cake Factory">
				</li>
				<li>
					<img src="images/slide-5.jpg" alt="Cake Factory">
				</li>
			</ul>
		</div>
		<!-- //Slider -->
	<!-- //Header -->

	<!-- About -->
	<div class="sl3waboutstia" id="sl3waboutstia">
		<div class="container">
			<h1>ABOUT US</h1>

			<div class="sl3waboutstia-grids">
				<div class="col-md-4 col-sm-4 sl3waboutstia-grid sl3waboutstia-grid-1">
					<h3>We Turn Flour into Piece of Cake Art</h3>
					<span>
						<p>Located in NguVanHoc street, Cake Factory will bring you greatest grand-baked cake that you can stop your brain and relax. We will create a space for you to throw your soul, fooling around without a single stress.
						</p>
						<p>Come here, sweet heart, we won't disappoint you with our traditional taste of cake, glorious taste of coffee that couldn't be compared to anything else.
						</p>
					</span>
				</div>
				<div class="col-md-8 col-sm-8 sl3waboutstia-grid sl3waboutstia-grid-2">
					<h3>Come to us, you can:</h3>
					<ul>
						<li class="origamiheart">
							<span><h4 style="text-align: left;font-weight: bold;">Share Your Love</h4>
							<p>Meet up with friend and share your love after a long day of work.</p></span>
						</li>
						<li class="coffee">
							<span>
							<h4 style="text-align: left;font-weight: bold;">Cup Of Coffee</h4>
							<p>What is better than a cup of Vietnamese traditional condensed milked coffee  nd some leaves of mint?</p></span>
						</li>
						<li class="cake">
							<span><h4 style="text-align: left;font-weight: bold;">Life Is A Piece Of Cake</h4>
							<p>Take it easy, release your long fetch of sign. Sit here with us and let us comfort your stress of you whole life.</p></span>
						</li>
					</ul>
				<!-- </div>
				<div class="col-md-4 col-sm-4 sl3waboutstia-grid sl3waboutstia-grid-3">
					<img src="images/about.jpg" alt="Tout dé Cake">
				</div> -->
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<!-- //About -->

	<!-- Stats -->
	<!-- <div class="w3lsstatsaits" id="w3lsstatsaits">
		<div class="container">
			<h2>STATS</h2>

			<div class="w3lsstatsaits-info">
				<div class="col-md-3 col-sm-3 w3lsstatsaits-grid w3lsstatsaits-grid-1">
					<div class="w3lsstatsaits-img">
						<img src="images/stats-1.png" alt="Corsa Racer">
					</div>
					<div class="w3lsstatsaitsstats counter" data-slno='1' data-min='0' data-max='9000' data-delay='.5' data-increment=4>9000</div>
					<p>Happy Clients</p>
				</div>
				<div class="col-md-3 col-sm-3 w3lsstatsaits-grid w3lsstatsaits-grid-2">
					<div class="w3lsstatsaits-img">
						<img src="images/stats-2.png" alt="Corsa Racer">
					</div>
					<div class="w3lsstatsaitsstats counter" data-slno='1' data-min='0' data-max='17000' data-delay='8' data-increment="1">17000</div>
					<p>Cakes Baked</p>
				</div>
				<div class="col-md-3 col-sm-3 w3lsstatsaits-grid w3lsstatsaits-grid-3">
					<div class="w3lsstatsaits-img">
						<img src="images/stats-3.png" alt="Corsa Racer">
					</div>
					<div class="w3lsstatsaitsstats counter" data-slno='1' data-min='0' data-max='12000' data-delay='.5' data-increment="11">12000</div>
					<p>Orders</p>
				</div>
				<div class="col-md-3 col-sm-3 w3lsstatsaits-grid w3lsstatsaits-grid-4">
					<div class="w3lsstatsaits-img">
						<img src="images/stats-4.png" alt="Corsa Racer">
					</div>
					<div class="w3lsstatsaitsstats counter" data-slno='1' data-min='0' data-max='169' data-delay='8' data-increment="1">169</div>
					<p>Awards</p>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div> -->
	<!-- //Stats -->

	<!-- Desserts -->
	<div class="wthreedesserts" id="wthreedesserts">
		<h3>OUR POPULAR DESSERTS</h3>

		<!-- Owl-Carousel -->
		<div id="owl-demo" class="owl-carousel text-center">
			<div class="item">
				<img class="lazyOwl" src="images/gallery-1.jpg" alt="Tout dé Cake">
			</div>
			<div class="item">
				<img class="lazyOwl" src="images/gallery-2.jpg" alt="Tout dé Cake">
			</div>
			<div class="item">
				<img class="lazyOwl" src="images/gallery-3.jpg" alt="Tout dé Cake">
			</div>
			<div class="item">
				<img class="lazyOwl" src="images/gallery-4.jpg" alt="Tout dé Cake">
			</div>
			<div class="item">
				<img class="lazyOwl" src="images/gallery-5.jpg" alt="Tout dé Cake">
			</div>
			<div class="item">
				<img class="lazyOwl" src="images/gallery-6.jpg" alt="Tout dé Cake">
			</div>
			<div class="item">
				<img class="lazyOwl" src="images/gallery-7.jpg" alt="Tout dé Cake">
			</div>
			<div class="item">
				<img class="lazyOwl" src="images/gallery-8.jpg" alt="Tout dé Cake">
			</div>
			<div class="item">
				<img class="lazyOwl" src="images/gallery-9.jpg" alt="Tout dé Cake">
			</div>
		</div>
		<!-- //Owl-Carousel -->

	</div>
	<!-- //Desserts -->

	<!-- Portfolio -->
	<div class="portfolio" id="portfolio">
			<div class="container">
			<h3>PORTFOLIO</h3>

			<div class="tabs tabs-style-bar">
				<nav>
					<ul>
						<li><a href="#section-bar-1" class="icon icon-box"><span>CAKES</span></a></li>
						<li><a href="#section-bar-2" class="icon icon-display"><span>PASTRIES</span></a></li>
						<li><a href="#section-bar-3" class="icon icon-upload"><span>CHOCOLATES</span></a></li>
					</ul>
				</nav>

				<div class="content-wrap">

					<!-- Tab-1 -->
					<section id="section-bar-1" class="agileits w3layouts">
						<div class="gallery-grids">
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/cake-1.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/cake-1.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/cake-2.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/cake-2.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/cake-3.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/cake-3.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/cake-4.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/cake-4.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/cake-5.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/cake-5.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/cake-6.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/cake-6.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/cake-7.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/cake-7.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/cake-8.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/cake-8.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/cake-9.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/cake-9.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</section>
					<!-- //Tab-1 -->

					<!-- Tab-2 -->
					<section id="section-bar-2" class="agileits w3layouts">
						<div class="gallery-grids">
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/pastry-1.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/pastry-1.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/pastry-2.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/pastry-2.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/pastry-3.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/pastry-3.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/pastry-4.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/pastry-4.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/pastry-5.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/pastry-5.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/pastry-6.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/pastry-6.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/pastry-7.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/pastry-7.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/pastry-8.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/pastry-8.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/pastry-9.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/pastry-9.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</section>
					<!-- //Tab-2 -->

					<!-- Tab-3 -->
					<section id="section-bar-3" class="agileits w3layouts">
						<div class="gallery-grids">
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/choco-1.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/choco-1.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/choco-2.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/choco-2.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/choco-3.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/choco-3.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/choco-4.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/choco-4.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/choco-5.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/choco-5.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/choco-6.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/choco-6.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/choco-7.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/choco-7.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/choco-8.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/choco-8.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/choco-9.jpg" class="swipebox">
									<figure class="effect-apollo">
										<img src="images/choco-9.jpg" alt="Tout dé Cake" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</section>
					<!-- //Tab-3 -->
					
				</div><!-- //Content -->
			</div><!-- //Tabs -->

		</div>
	</div>
	<!-- //Portfolio -->

	<!-- Chefs -->
	<div class="chefw3agile" id="chefw3agile">
		<div class="container">
			<h3>OUR CHÉFS</h3>

			<div class="chefw3agile-grids">
				<div class="col-md-4 col-sm-4 chefw3agile-grid">
					<div class="pic">
						<div class="stack twisted">
							<img src="images/chef-1.jpg" alt="Tout dé Cake" class="img-responsive">
						</div>
						<div class="pic-caption top-to-bottom">
							<h4>Jean Réno</h4>
							<!-- Social-Icons -->
							<div class="social wthree">
								<ul class="social-icons agileinfo">
									<li><a href="#" class="facebook w3ls" title="Go to Our Facebook Page"><i class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
									<li><a href="#" class="twitter w3l" title="Go to Our Twitter Account"><i class="fa w3l fa-twitter-square" aria-hidden="true"></i></a></li>
									<li><a href="#" class="googleplus w3" title="Go to Our Google Plus Account"><i class="fa w3 fa-google-plus-square" aria-hidden="true"></i></a></li>
									<li><a href="#" class="instagram wthree" title="Go to Our Instagram Account"><i class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<!-- //Social-Icons -->
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 chefw3agile-grid">
					<div class="pic">
						<div class="stack twisted">
							<img src="images/chef-2.jpg" alt="Tout dé Cake" class="img-responsive">
						</div>
						<div class="pic-caption top-to-bottom">
							<h4>Elena D'élia</h4>
							<!-- Social-Icons -->
							<div class="social wthree">
								<ul class="social-icons agileinfo">
									<li><a href="#" class="facebook w3ls" title="Go to Our Facebook Page"><i class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
									<li><a href="#" class="twitter w3l" title="Go to Our Twitter Account"><i class="fa w3l fa-twitter-square" aria-hidden="true"></i></a></li>
									<li><a href="#" class="googleplus w3" title="Go to Our Google Plus Account"><i class="fa w3 fa-google-plus-square" aria-hidden="true"></i></a></li>
									<li><a href="#" class="instagram wthree" title="Go to Our Instagram Account"><i class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<!-- //Social-Icons -->
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 chefw3agile-grid">
					<div class="pic">
						<div class="stack twisted">
							<img src="images/chef-3.jpg" alt="Tout dé Cake" class="img-responsive">
						</div>
						<div class="pic-caption top-to-bottom">
							<h4>Piérré Cardin</h4>
							<!-- Social-Icons -->
							<div class="social wthree">
								<ul class="social-icons agileinfo">
									<li><a href="#" class="facebook w3ls" title="Go to Our Facebook Page"><i class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
									<li><a href="#" class="twitter w3l" title="Go to Our Twitter Account"><i class="fa w3l fa-twitter-square" aria-hidden="true"></i></a></li>
									<li><a href="#" class="googleplus w3" title="Go to Our Google Plus Account"><i class="fa w3 fa-google-plus-square" aria-hidden="true"></i></a></li>
									<li><a href="#" class="instagram wthree" title="Go to Our Instagram Account"><i class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<!-- //Social-Icons -->
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 chefw3agile-grid">
					<div class="pic">
						<div class="stack twisted">
							<img src="images/chef-4.jpg" alt="Tout dé Cake" class="img-responsive">
						</div>
						<div class="pic-caption top-to-bottom">
							<h4>Mary Watson</h4>
							<!-- Social-Icons -->
							<div class="social wthree">
								<ul class="social-icons agileinfo">
									<li><a href="#" class="facebook w3ls" title="Go to Our Facebook Page"><i class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
									<li><a href="#" class="twitter w3l" title="Go to Our Twitter Account"><i class="fa w3l fa-twitter-square" aria-hidden="true"></i></a></li>
									<li><a href="#" class="googleplus w3" title="Go to Our Google Plus Account"><i class="fa w3 fa-google-plus-square" aria-hidden="true"></i></a></li>
									<li><a href="#" class="instagram wthree" title="Go to Our Instagram Account"><i class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<!-- //Social-Icons -->
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 chefw3agile-grid">
					<div class="pic">
						<div class="stack twisted">
							<img src="images/chef-5.jpg" alt="Tout dé Cake" class="img-responsive">
						</div>
						<div class="pic-caption top-to-bottom">
							<h4>Joé Tanto</h4>
							<!-- Social-Icons -->
							<div class="social wthree">
								<ul class="social-icons agileinfo">
									<li><a href="#" class="facebook w3ls" title="Go to Our Facebook Page"><i class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
									<li><a href="#" class="twitter w3l" title="Go to Our Twitter Account"><i class="fa w3l fa-twitter-square" aria-hidden="true"></i></a></li>
									<li><a href="#" class="googleplus w3" title="Go to Our Google Plus Account"><i class="fa w3 fa-google-plus-square" aria-hidden="true"></i></a></li>
									<li><a href="#" class="instagram wthree" title="Go to Our Instagram Account"><i class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<!-- //Social-Icons -->
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 chefw3agile-grid">
					<div class="pic">
						<div class="stack twisted">
							<img src="images/chef-6.jpg" alt="Tout dé Cake" class="img-responsive">
						</div>
						<div class="pic-caption top-to-bottom">
							<h4>Leslie Chow</h4>
							<!-- Social-Icons -->
							<div class="social wthree">
								<ul class="social-icons agileinfo">
									<li><a href="#" class="facebook w3ls" title="Go to Our Facebook Page"><i class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
									<li><a href="#" class="twitter w3l" title="Go to Our Twitter Account"><i class="fa w3l fa-twitter-square" aria-hidden="true"></i></a></li>
									<li><a href="#" class="googleplus w3" title="Go to Our Google Plus Account"><i class="fa w3 fa-google-plus-square" aria-hidden="true"></i></a></li>
									<li><a href="#" class="instagram wthree" title="Go to Our Instagram Account"><i class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<!-- //Social-Icons -->
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			
		</div>
	</div>
	<!-- //Chefs -->

	<!-- Feedback -->
	<div class="agileinfofeedback" id="agileinfofeedback">
		<div class="container">
			<h3>CUSTOMER FEEDBACK</h3>

			<!-- Slider1 -->
			<div class="slider-1 w3layouts agileits">
				<ul class="rslides w3layouts agileits" id="slider1">
					<li>
						<p>Hey, your waitress is so hot, can I touch her?</p>
						<h4>Hentaiyarou</h4>
					</li>
					<li>
						<p>Can I have a free cake?</p>
						<h4>Poor Bastard</h4>
					</li>
					<li>
						<p>Your cake is hilarious!</p>
						<h4>Just some retard</h4>
					</li>
					<li>
						<p>Can you give me your wife?</p>
						<h4>Some death man</h4>
					</li>
					<li>
						<p>Ma ma, cateee, cateee, boy me some cate, boy me a forking cateeee......</p>
						<h4>A baby</h4>
					</li>
				</ul>
			</div>
			<!-- //Slider1 -->
			
		</div>
	</div>
	<!-- //Feedback -->

	<!-- Newsletter -->
	<div class="newsletter" id="newsletter">
		<div class="container">
			<div class="new-grids">
				<div class="col-md-5 col-sm-5 newsletter-grid newsletter-grid-1 subscribe">
					<p>Subscribe to our Newsletter</p>
				</div>
				<div class="col-md-7 col-sm-7 newsletter-grid newsletter-grid-2 email-form">
					<form action="#" method="post">
						<input class="email" type="email" name="Email" placeholder="Email Address" required="">
						<input type="submit" class="submit" value="SUBSCRIBE">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //Newsletter -->



	<!-- Contact -->
	<div class="aitscontactw3l" id="aitscontactw3l">
		<div class="container">
			<h3>GET IN TOUCH</h3>

			<form action="#" method="post" class="aitscontactw3l-grids">
				<div class="col-md-3 col-sm-3 aitscontactw3l-grid aitscontactw3l-grid-1">
					<input class="fill fill-top" type="text" name="Name" placeholder="Name" required="">
					<input class="fill" type="email" name="Email" placeholder="Email" required="">
				</div>
				<div class="col-md-3 col-sm-3 aitscontactw3l-grid aitscontactw3l-grid-2">
					<input class="fill fill-top" type="tel" name="Phone" placeholder="Phone">
					<input class="fill" type="text" name="Place" placeholder="Place">
				</div>
				<div class="col-md-6 col-sm-6 aitscontactw3l-grid aitscontactw3l-grid-3">
					<textarea class="fill message" name="Message" placeholder="Message" required=""></textarea>
					<input class="submit" type="submit" name="Send" value="SEND">
				</div>
				<div class="clearfix"></div>
			</form>

		</div>
	</div>
	<!-- //Contact -->

	<!-- Map -->
		{{--  <div id="map"></div>  --}}
	<!-- //Map -->

	<!-- Footer -->
	<div class="footer">
		<div class="container">

			<div class="footer-top">
				<div class="footer-grids">
					<div class="col-md-4 col-sm-4 address">
						<h5>Address</h5>
							<ul>
								<li>NguVanHoc street</li>
								<li>696969</li>
								<li>Saint HocThiNgu</li>
								<li>NH, HocNgu</li>
							</ul>
					</div>
					<div class="col-md-4 col-sm-4 contact">
						<h5>Contact</h5>
						<div class="phone">
							<ul>
								<li>+1 234 569 6969</li>
								<li>Mail : <a href="mailto:mail@example.com">info@NVHCakeFactory.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 connect">
						<h5>Follow</h5>
						<!-- Social-Icons -->
						<div class="social wthree">
							<ul class="social-icons agileinfo">
								<li><a href="#" class="facebook w3ls" title="Go to Our Facebook Page"><i class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
								<li><a href="#" class="twitter w3l" title="Go to Our Twitter Account"><i class="fa w3l fa-twitter-square" aria-hidden="true"></i></a></li>
								<li><a href="#" class="googleplus w3" title="Go to Our Google Plus Account"><i class="fa w3 fa-google-plus-square" aria-hidden="true"></i></a></li>
								<li><a href="#" class="instagram wthree" title="Go to Our Instagram Account"><i class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#" class="youtube w3layouts" title="Go to Our Youtube Channel"><i class="fa w3layouts fa-youtube-square" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<!-- //Social-Icons -->
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="footer-bottom">
					<div class="col-md-6 col-sm-6 footer-bottom-grid footer-nav">
						<ul>
							<li><a href="#agilehome">Home</a></li>
							<li><a href="#sl3waboutstia">About</a></li>
							<li><a href="#wthreedesserts">Specials</a></li>
							<li><a href="/shop">Shop</a></li>
							<li><a href="#portfolio">Portfolio</a></li>
							<li><a href="#aitscontactw3l">Contact</a></li>
						</ul>
					</div>
					<div class="col-md-6 col-sm-6 footer-bottom-grid copyright">
						<p>&copy; 2017 Cake Factory. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank"> W3layouts </a><a href="#agilehome" class="scroll" title="To Top"><i class="fa fa-level-up" aria-hidden="true"></i></a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

		</div>
	</div>
	<!-- //Footer -->
		<!-- Custom-JavaScript-File-Links -->

	<!-- Default-JavaScript -->   <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- Bootstrap-JavaScript --> <script type="text/javascript" src="js/bootstrap.min.js"></script>

	

	<!-- Slider-JavaScript -->
		<script src="js/responsiveslides.min.js"></script>
		<script>
			$(function () {
				$("#slider, #slider1").responsiveSlides({
					auto: true,
					nav: true,
					speed: 1500,
					namespace: "callbacks",
					pager: true,
				});
			});
		</script>
	<!-- //Slider-JavaScript -->

	<!-- Owl-Carousel-JavaScript -->
		<script src="js/owl.carousel.js"></script>
		<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 4,
				lazyLoad : true,
				autoPlay :true,
				pagination : false,
			});
		});
		</script>
	<!-- //Owl-Carousel-JavaScript -->

	<!-- Gallery-Tab-JavaScript -->
		<script src="js/cbpFWTabs.js"></script>
		<script>
			(function() {
				[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
					new CBPFWTabs( el );
				});
			})();
		</script>
	<!-- //Gallery-Tab-JavaScript -->

	<!-- Swipe-Box-JavaScript -->
		<script src="js/jquery.swipebox.min.js"></script> 
			<script type="text/javascript">
				jQuery(function($) {
					$(".swipebox").swipebox();
				});
		</script>
	<!-- //Swipe-Box-JavaScript -->

	<!-- Stats-Number-Scroller-Animation-JavaScript -->
		<script src="js/waypoints.min.js"></script> 
		<script src="js/counterup.min.js"></script> 
		<script>
			jQuery(document).ready(function( $ ) {
				$('.counter').counterUp({
					delay: 10,
					time: 1000
				});
			});
		</script>
	<!-- //Stats-Number-Scroller-Animation-JavaScript -->

	<!-- Map-JavaScript -->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>        
		<script type="text/javascript">
			google.maps.event.addDomListener(window, 'load', init);
			function init() {
				var mapOptions = {
					zoom: 11,
					center: new google.maps.LatLng(40.6700, -73.9400),
					styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
				};
				var mapElement = document.getElementById('map');
				var map = new google.maps.Map(mapElement, mapOptions);
				var marker = new google.maps.Marker({
					position: new google.maps.LatLng(40.6700, -73.9400),
					map: map,
				});
			}
		</script>
	<!-- //Map-JavaScript -->

	<!-- Smooth-Scrolling-JavaScript -->
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- //Smooth-Scrolling-JavaScript -->

	<!-- //Custom-JavaScript-File-Links -->
@endsection
