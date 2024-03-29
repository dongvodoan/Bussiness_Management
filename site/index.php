<!DOCTYPE html>
<html lang="en">

<head>
	<?php require('partials/head.php'); ?>
</head>
<body>
	<header id="header-section" class="header-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="logo">
						<a href="#" class="navbar-brand">
							<img class="img-responsive" src="img/logo.png" alt="Creative" />
						</a>
					</div>
					<button class="navbar-toggle collapsed" data-toggle="collapse" data-target=".menu-area" aria-expanded="false">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="menu-area navbar-collapse collapse pull-right">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#about">About</a></li>
							<li><a href="#services">services</a></li>
							<li><a href="#speclize">speclize</a></li>
							<li><a href="#portfolio">portfolio</a></li>
							<li><a href="#contact">contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<section id="slider-seaction" class="slider-area">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active signle-slider">
						<img src="img/slider.jpg" alt="">
						<div class="carousel-caption">
							<h1 data-animation="animated bounceInLeft">WE Love UX-Design</h1>
							<p data-animation="animated bounceInRight">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words
								which don't look</p>
						</div>
					</div>
					<div class="item signle-slider">
						<img src="img/slider.jpg" alt="">
						<div class="carousel-caption">
							<h1 data-animation="animated bounceInDown">WE Love UI</h1>
							<p data-animation="animated bounceInUp">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words
								which don't look</p>
						</div>
					</div>
					<div class="item signle-slider">
						<img src="img/slider.jpg" alt="">
						<div class="carousel-caption">
							<h1 data-animation="animated slideInLeft">WE Love PHP</h1>
							<p data-animation="animated slideInRight">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words
								which don't look</p>
						</div>
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<i class="fa fa-angle-left" aria-hidden="true"></i>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</a>
			</div>

			<div class="slide-down">
				<a href="" class="slide_down_btn">
					<i class="fa fa-angle-down"></i>
				</a>			
			</div>
		</section>
		<!--end slider-area-->
	</header>
	<!-- end header-area -->

	<section class="about-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="about-content text-center" id="about">
						<h1> INVEST IN YOUR <span>FUTURE</span></h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
							aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum
							dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<p> Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
							text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
							book.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end about-area -->

	<section id="promotional-section" class="promotional-area">
		<div class="container">
			<div class="row">
				<div class="featured-area" id="services">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="single-featurebox text-center">
							<div class="single-feature-image" style="padding: 25px 30px;">
								<img src="img/ficon1.png" alt="">
							</div>
							<h3>EASY CUSTOMIZE</h3>
							<p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
								infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="single-featurebox text-center" >
							<div class="single-feature-image">
								<img src="img/ficon2.png" alt="">
							</div>
							<h3>CREATIVE LAYOUT</h3>
							<p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
								infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="single-featurebox text-center">
							<div class="single-feature-image">
								<img src="img/ficon3.png" alt="">
							</div>
							<h3>SUPER RESPONSIVE</h3>
							<p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
								infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose</p>
						</div>
					</div>
				</div>
				<div class="testimonial-area">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
						<div class="testimonial-slider text-center">
							<div class="testi-devider">
								<img src="img/mini-user.png" alt="">
							</div>
							<div class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#" data-slide-to="0" class="active"></li>
									<li data-target="#" data-slide-to="1"></li>
									<li data-target="#" data-slide-to="2"></li>
								</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
									<div class="item active single-testi">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
											magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
											et dolore magna aliqua. </p>
										<div class="testi-author">
											<h4>Annie Smith</h4>
											<h6>UI Designer</h6>
										</div>
									</div>
									<div class="item single-testi">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
											magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
											et dolore magna aliqua. </p>
										<div class="testi-author">
											<h4>Jhon Doe</h4>
											<h6>UX Designer</h6>
										</div>
									</div>
									<div class="item single-testi">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
											magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
											et dolore magna aliqua. </p>
										<div class="testi-author">
											<h4>Jhoan Doew</h4>
											<h6>UI & UX Designer</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end testimonial-area-->
			</div>
		</div>
	</section>
	<section id="specilizer-section" class="specilizer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
					<div class="works-tabs" id="speclize">
						<h1>What we do</h1>
						<div class="tabs-area">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="#development" aria-controls="development" role="tab" data-toggle="tab">Development</a></li>
								<li role="presentation" class="active"><a href="#visualDesign" aria-controls="visualDesign" role="tab" data-toggle="tab">Visual Design</a></li>
								<li role="presentation"><a href="#internetMarketing" aria-controls="internetMarketing" role="tab" data-toggle="tab">Internet-Marketing</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="development">
									<div class="single-tab">
										<p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
											The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words
											etc.
										</p>
										<div class="sigworks-group">
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
												<div class="single-sigworks">
													<i class="fa fa-unlink"></i>
													<h4>Web</h4>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
												<div class="single-sigworks">
													<i class="fa fa-list"></i>
													<h4>Graphics</h4>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
												<div class="single-sigworks">
													<i class="fa fa-laptop"></i>
													<h4>Branding</h4>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
												<div class="single-sigworks">
													<i class="fa fa-recycle"></i>
													<h4>Typography</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="visualDesign">
									<div class="single-tab">
										<p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
											The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words
											etc.
										</p>
										<div class="sigworks-group">
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
												<div class="single-sigworks">
													<i class="fa fa-unlink"></i>
													<h4>Web</h4>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
												<div class="single-sigworks">
													<i class="fa fa-list"></i>
													<h4>Graphics</h4>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
												<div class="single-sigworks">
													<i class="fa fa-laptop"></i>
													<h4>Branding</h4>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
												<div class="single-sigworks">
													<i class="fa fa-recycle"></i>
													<h4>Typography</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="internetMarketing">
									<div class="single-tab">
										<p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
											The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words
											etc.
										</p>
										<div class="sigworks-group">
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
												<div class="single-sigworks">
													<i class="fa fa-unlink"></i>
													<h4>Web</h4>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
												<div class="single-sigworks">
													<i class="fa fa-list"></i>
													<h4>Graphics</h4>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
												<div class="single-sigworks">
													<i class="fa fa-laptop"></i>
													<h4>Branding</h4>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
												<div class="single-sigworks">
													<i class="fa fa-recycle"></i>
													<h4>Typography</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end tap selection -->
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="progress-bars">
						<h1>Our Specialization</h1>
						<p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
							elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
						</p>
						<div class="progressbar-area">
							<div class="single-progressbar">
								<div class="progresstitle"><span>Web Development</span><span>80%</span></div>
								<div class="progress">
									<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
										style="width: 80%">
									</div>
								</div>
							</div>
							<div class="single-progressbar">
								<div class="progresstitle"><span>Visual Designs</span><span>90%</span></div>
								<div class="progress">
									<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
										style="width: 90%">
									</div>
								</div>
							</div>
							<div class="single-progressbar">
								<div class="progresstitle"><span>Internet Marketing</span><span>70%</span></div>
								<div class="progress">
									<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
										style="width: 70%">
									</div>
								</div>
							</div>
							<div class="single-progressbar">
								<div class="progresstitle"><span>Wireframing and Structure</span><span>85%</span></div>
								<div class="progress">
									<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
										style="width: 85%">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="whitespace-section" class="whitespace-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 text-center">
					<div class="white-space">
						<h1>Works We Did</h1>
						<div class="wa-devider">
							<i class="fa fa-tv"></i>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typestting industry. Lorem Ipsum has been the industry’s</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--end whitespace-area-->

	<section id="porfolio-section" class="portfolio-area">
		<div class="container">
			<div class="row">
				<div class="portfilter-area text-center" id="portfolio">
					<ul class="portfolio-filter">
						<li><a href="#" class="active" data-filter="*">All</a></li>
						<li><a href="#" data-filter=".illustration">Illustration</a></li>
						<li><a href="#" data-filter=".graphics">Graphics</a></li>
						<li><a href="#" data-filter=".video">Video</a></li>
						<li><a href="#" data-filter=".web">Web</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="portfolio-items" >
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item illustration">
						<div class="single-portfolio">
							<img class="img-responsive" src="img/port1.png" alt="" />
							<div class="port-info text-center">
								<h4>Name of Project</h4>
								<h6>Name of Category</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item graphics">
						<div class="single-portfolio">
							<img class="img-responsive" src="img/port2.png" alt="" />
							<div class="port-info text-center">
								<h4>Name of Project</h4>
								<h6>Name of Category</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item video">
						<div class="single-portfolio">
							<img class="img-responsive" src="img/port3.png" alt="" />
							<div class="port-info text-center">
								<h4>Name of Project</h4>
								<h6>Name of Category</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item web">
						<div class="single-portfolio">
							<img class="img-responsive" src="img/port4.png" alt="" />
							<div class="port-info text-center">
								<h4>Name of Project</h4>
								<h6>Name of Category</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item graphics">
						<div class="single-portfolio">
							<img class="img-responsive" src="img/port5.png" alt="" />
							<div class="port-info text-center">
								<h4>Name of Project</h4>
								<h6>Name of Category</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item video">
						<div class="single-portfolio">
							<img class="img-responsive" src="img/port6.png" alt="" />
							<div class="port-info text-center">
								<h4>Name of Project</h4>
								<h6>Name of Category</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--end portfolio area-->

	<section class="counter-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="single-counter text-center">
						<img src="img/count1.png" alt="" />
						<h6>Completed Project</h6>
						<span>195</span>
					</div>
					<!--end single counter-->
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="single-counter text-center">
						<img src="img/count2.png" alt="" />
						<h6>Awards Received</h6>
						<span>27</span>
					</div>
					<!--end single counter-->
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="single-counter text-center">
						<img src="img/count3.png" alt="" />
						<h6>Happy Customers</h6>
						<span>950</span>
					</div>
					<!--end single counter-->
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="single-counter text-center">
						<img src="img/count4.png" alt="" />
						<h6>Cup of Coffee</h6>
						<span>500</span>
					</div>
					<!--end single counter-->
				</div>
			</div>
		</div>
	</section>
	
	<section id="googleMap-section" class="googleMap-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
					<div class="googleMap-content text-center">
						<h1>Get In Touch</h1>
						<div class="map-devider"><i class="fa fa-angle-down"></i></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typestting industry. Lorem Ipsum has been the industry’s</p>
						<i class="fa fa-map-marker"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--end google map area-->
	
	<section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="margin-bottom: 15px;">
                    <h2>Contact Us</h2>
                </div><!-- /.section-header -->
            </div><!-- /.row -->
            <div class="row">
                <div class="">
                    <div class="col-lg-8 col-sm-8 col-sm-6 col-xs-12">
                        <form method="" action="" accept-charset="UTF-8" class="frm-show-form" id="form-contacts" novalidate="novalidate">
                        <input name="_token" type="hidden" value="5Z5oYKewpvNiQOIfyl85Wdz2PGUiyYpwLGWzGkWB">
                        <div class="frm_forms " id="frm_form_3_container">
                            <div class="frm_form_field form-field col-sm-6">
                                <input class="form-control" placeholder="Name" name="name" type="text">
                            </div>
                            <div class="frm_form_field form-field col-sm-6">
                                <input class="form-control" placeholder="Email Address" name="email" type="text">
                            </div>
                            <div class="frm_form_field form-field col-sm-12" style="padding-top: 2%;padding-bottom: 2%;">
                                <input class="form-control" placeholder="Name company" name="company" type="text">
                            </div>
                        </div>
                        <div class="">
                            <div class="col-sm-12">
                                <div class="frm_forms with_frm_style" id="frm_form_3_container">
                                    <div class="frm_form_field form-field  frm_none_container">
                                        <textarea class="form-control" rows="6" placeholder="Content" id="field_2ywico" name="content" cols="50"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="" style="margin-top: 5%;">
                                    <input class="form-control btn btn-primary" type="submit" value="Send">
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="map-area">
							<div id="googleMap" style="width: 350px;height: 270px;"></div>
						</div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->    
    </section>
	<!--end map area-->

	<footer id="footer-section" class="footer-area">
		<?php require("partials/footer.php"); ?>
	</footer>
	<!--end footer-->
	<?php require('partials/script.php'); ?>	
</body>
</html>