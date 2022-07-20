<?php
include_once('admin/include/menu_function.php');
$row=show_menu();
?>

<!DOCTYPE html>
<html><!-------Shared free html By Mellatweb.com-->
<head>
<meta charset="utf-8">
<title>Gazek HTML-5 Template | Homepage 03</title>
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="assets/css/color-switcher-design.css" rel="stylesheet">
<!-- Color Themes -->
<link id="theme-color-file" href="assets/color-themes/default-theme.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600;700;800&family=Work+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
 	<!-- Main Header-->
    <header class="main-header header-style-two">
    	
		<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="inner-container clearfix">
                	
					<div class="left-box clearfix">
						<!-- Nav Btn -->
						<div class="menu-toggler nav-toggler hidden-bar-opener"><span class="icon flaticon-menu"></span></div>
						<!--Social Links-->
						<ul class="social-links clearfix">
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
							<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
						</ul>
					</div>
					
                	<div class="logo-box">
                    	<div class="logo"><a href="index.html"><img src="https://via.placeholder.com/130x60" alt="" title=""></a></div>
                    </div>
                    
					<!-- Main Menu End-->
					<div class="outer-box clearfix">
						<!-- Quote Btn -->
						<div class="btn-box">
							<a href="tel:+800-019-4900" class="contact-btn theme-btn"><span class="icon flaticon-smartphone"></span> + 800 019 4900</a>
						</div>
					</div>					
					
                </div>
				
            </div>
        </div>
        <!--End Header Upper-->
        
		<div class="header-lower">
			<div class="auto-container clearfix">
				
				<div class="nav-outer clearfix">
					<!--Mobile Navigation Toggler-->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
					<!-- Main Menu -->
					<nav class="main-menu navbar-expand-md">
						<div class="navbar-header">
							<!-- Toggle Button -->    	
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
						<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
						<ul class="navigation clearfix" >

                            <?php foreach($row as $rows){ ?>
								<li class="current dropdown"><a href="<?php echo $rows['url']; ?>"><?php echo $rows['title']; ?></a>
									<ul>

                                        <?php 
                                        $id=$rows['menu_id'];
                                        $res=show_submenu($id);
                                        if($res){
                                            foreach($res as $value){ ?>
                                                <li class="dropdown"><a href="<?php echo $value['url']; ?>"><?php echo $value['title']; ?></a>
                                                    <ul>
                                                        <li><a href="index.html">Header Style 01</a></li>
                                                        <li><a href="index-2.html">Header Style 02</a></li>
                                                        <li><a href="index-3.html">Header Style 03</a></li>
                                                    </ul>
                                                </li>
                                                <?php } }?>
                                            
									</ul>
                                    
								</li>
                                <?php }?>
								
						</ul>
						</div>
					</nav>
					
				</div>
				
			</div>
		</div>
		
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" title=""><img src="https://via.placeholder.com/130x60" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
					<!-- Main Menu End-->
					
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="https://via.placeholder.com/130x60" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
	
	<!-- Hidden Navigation Bar -->
    <section class="hidden-bar left-align">
		<div class="color-layer"></div>
        <div class="hidden-bar-closer">
            <button><span class="flaticon-multiply"></span></button>
        </div>
        <div class="logo">
        	<a href="index.html"><img src="https://via.placeholder.com/130x60" alt="" /></a>
        </div>
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
            <!-- .Side-menu -->
            <div class="side-menu">
            <ul class="navigation clearfix" >

<?php foreach($row as $rows){ ?>
    <li class="current dropdown"><a href="<?php echo $rows['url']; ?>"><?php echo $rows['title']; ?></a>
        <ul>

            <?php 
            $id=$rows['menu_id'];
            $res=show_submenu($id);
            foreach($res as $value){ ?>
            <li class="dropdown"><a href="<?php echo $value['url']; ?>"><?php echo $value['title']; ?></a>
                <ul>
                    <li><a href="index.html">Header Style 01</a></li>
                    <li><a href="index-2.html">Header Style 02</a></li>
                    <li><a href="index-3.html">Header Style 03</a></li>
                </ul>
            </li>
            <?php }?>
        </ul>
    </li>
    <?php }?>
    
</ul>
            </div>
            <!-- /.Side-menu -->
			
            <!--Social Links-->
            <ul class="social-links clearfix">
                <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
            </ul>
        </div>
     	
        <!--Copyright Text-->
        <div class="copyright-text">Copyright &copy; 2020 <a href="https://www.mellatweb.com">Mellatweb.com</a></div>
    </section>
	
	<!-- Banner Section Two -->
    <section class="banner-section-three">
		<div class="main-slider-carousel owl-carousel owl-theme">
            
            <div class="slide" style="background-image: url(https://via.placeholder.com/1920x620)">
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="content-boxed">
						<div class="inner-box">
							<h1>Delivering For <br> Brand Expanding</h1>
							<div class="text">Possim sapientem dolor ipsum cumy sed graeci civibus <br> ats utamur molit elsifeny officia hase sonet.</div>
							<div class="btns-box">
								<a href="#" class="theme-btn btn-style-one"><span class="txt">discuss project</span></a>
								<a href="#" class="theme-btn btn-style-three"><span class="txt">our services</span></a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="slide" style="background-image: url(https://via.placeholder.com/1920x620)">
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="content-boxed">
						<div class="inner-column">
							<h1>Delivering For <br> Brand Expanding</h1>
							<div class="text">Possim sapientem dolor ipsum cumy sed graeci civibus <br> ats utamur molit elsifeny officia hase sonet.</div>
							<div class="btns-box">
								<a href="#" class="theme-btn btn-style-one"><span class="txt">discuss project</span></a>
								<a href="#" class="theme-btn btn-style-three"><span class="txt">our services</span></a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="slide" style="background-image: url(https://via.placeholder.com/1920x620)">
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="content-boxed">
						<div class="inner-column">
							<h1>Delivering For <br> Brand Expanding</h1>
							<div class="text">Possim sapientem dolor ipsum cumy sed graeci civibus <br> ats utamur molit elsifeny officia hase sonet.</div>
							<div class="btns-box">
								<a href="#" class="theme-btn btn-style-one"><span class="txt">discuss project</span></a>
								<a href="#" class="theme-btn btn-style-three"><span class="txt">our services</span></a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Banner Section Two -->
	
	<!-- About Section Two -->
	<section class="about-section-two">
		<div class="circle-layer" style="background-image:url(assets/images/icons/icon-1.png)"></div>
		<div class="dotted-layer" style="background-image:url(assets/images/icons/dotted-pattern.png)"></div>
		<div class="auto-container">

			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="https://via.placeholder.com/500x542" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">About Us</div>
							<div class="separate"></div>
							<h2>Innovation Brings Life <br> to Our Projects</h2>
						</div>
						<div class="text">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit any laboruys. Sed ut error sit voluptatem accusantium dolor que totams rendy aperiam eaque laudantium sed ipsum dolor sit amet consectetur adipisicing elit eiusmod tempora.</div>
						<ul class="list-style-one">
							<li>Incididunt labore magna aliqua enimad minim</li>
							<li>Sit voluptatem accusantium dolore mquey laudan</li>
							<li>Rem aperiam eaque ipsa quae illo inventore veritatis</li>
						</ul>
						<a href="#" class="theme-btn btn-style-one"><span class="txt">discover more</span></a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Section -->
	
	<!-- Services Section Two -->
	<section class="services-section-two">
		<div class="long-arrow" style="background-image: url(assets/images/icons/long-arrow-4.png)"></div>
		<div class="plus-icons" style="background-image:url(assets/images/icons/icon-3.png)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">what we do</div>
				<div class="separate"></div>
				<h2>Impressive Experience <br> Building For Clients</h2>
			</div>
			
			<div class="row clearfix">
					
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-data"></span>
						</div>
						<h5><a href="#">Web Development</a></h5>
						<div class="text">Vim novum tritaniys scribentur varet per cu dicat copiosae reprimique teim. laborey fabulas scriptorem.</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-graphic"></span>
						</div>
						<h5><a href="#">Digital Marketing</a></h5>
						<div class="text">Vim novum tritaniys scribentur varet per cu dicat copiosae reprimique teim. laborey fabulas scriptorem.</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-vector"></span>
						</div>
						<h5><a href="#">Brand Designing</a></h5>
						<div class="text">Vim novum tritaniys scribentur varet per cu dicat copiosae reprimique teim. laborey fabulas scriptorem.</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-smartphone-2"></span>
						</div>
						<h5><a href="#">Mobile Applications</a></h5>
						<div class="text">Vim novum tritaniys scribentur varet per cu dicat copiosae reprimique teim. laborey fabulas scriptorem.</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-graphic-tool"></span>
						</div>
						<h5><a href="#">Ux/Ui Design</a></h5>
						<div class="text">Vim novum tritaniys scribentur varet per cu dicat copiosae reprimique teim. laborey fabulas scriptorem.</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-rate"></span>
						</div>
						<h5><a href="#">Search Optimization</a></h5>
						<div class="text">Vim novum tritaniys scribentur varet per cu dicat copiosae reprimique teim. laborey fabulas scriptorem.</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Services Section Two -->
	
	<!-- Gallery Section Two -->
	<section class="gallery-section-two">
		<div class="long-arrow" style="background-image: url(assets/images/icons/long-arrow-4.png)"></div>
		<div class="pattern-icon" style="background-image: url(assets/images/icons/icon-4.png)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">what we have done</div>
				<div class="separate"></div>
				<h2>Recent Projects</h2>
			</div>
			
			<div class="masonry-items-container row clearfix">
				
				<!-- Gallery Block Two -->
				<div class="gallery-block-two masonry-item col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<figure class="image-box">
							<img src="https://via.placeholder.com/360x360" alt="">
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<h4><a href="#">Cato Art Work</a></h4>
										<div class="category">Branding Design</div>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				
				<!-- Gallery Block Two -->
				<div class="gallery-block-two masonry-item col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<figure class="image-box">
							<img src="https://via.placeholder.com/360x260" alt="">
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<h4><a href="#">Cato Art Work</a></h4>
										<div class="category">Branding Design</div>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				
				<!-- Gallery Block Two -->
				<div class="gallery-block-two masonry-item col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<figure class="image-box">
							<img src="https://via.placeholder.com/360x450" alt="">
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<h4><a href="#">Cato Art Work</a></h4>
										<div class="category">Branding Design</div>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				
				<!-- Gallery Block Two -->
				<div class="gallery-block-two masonry-item col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<figure class="image-box">
							<img src="https://via.placeholder.com/360x260" alt="">
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<h4><a href="#">Cato Art Work</a></h4>
										<div class="category">Branding Design</div>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				
				<!-- Gallery Block Two -->
				<div class="gallery-block-two masonry-item col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<figure class="image-box">
							<img src="https://via.placeholder.com/360x450" alt="">
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<h4><a href="#">Cato Art Work</a></h4>
										<div class="category">Branding Design</div>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				<!-- Gallery Block Two -->
				<div class="gallery-block-two masonry-item col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<figure class="image-box">
							<img src="https://via.placeholder.com/360x360" alt="">
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<h4><a href="#">Cato Art Work</a></h4>
										<div class="category">Branding Design</div>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				<!-- Gallery Block Two -->
				<div class="gallery-block-two masonry-item col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<figure class="image-box">
							<img src="https://via.placeholder.com/360x260" alt="">
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<h4><a href="#">Cato Art Work</a></h4>
										<div class="category">Branding Design</div>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				
				
				
			</div>
			
		</div>
	</section>
	<!-- End Gallery Section Two -->
	
	<!-- Video Section -->
	<section class="video-section" style="background-image:url(https://via.placeholder.com/1920x1280)">
		<div class="auto-container">
			<h2>Crafting high-level brands with <br> pleasant mode of design</h2>
			<div class="title">we provide solutions for everyone</div>
			<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="fa fa-play"><i class="ripple"></i></span></a>
		</div>
	</section>
	<!-- End Video Section -->
	
	<!-- Experiance Section -->
	<section class="experiance-section">
		<div class="auto-container">
			<div class="long-arrow" style="background-image: url(assets/images/icons/long-arrow-4.png)"></div>
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="title">better strategy</div>
				<div class="separate"></div>
				<h2>Our Experience</h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- Experiance Column -->
				<div class="experiance-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="number">15</div>
						<div class="years">Years Of Experience</div>
					</div>
				</div>
				
				<!-- Skill Column -->
				<div class="skill-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<h3>Skills we have ...</h3>
						<div class="text">Excepteur sint occaecat cupidatat non proident sunt culpaui officia deserunt mollit any laboruys. Sed ut perspiciatis unde omnis iste.</div>
						
						<!-- Skills -->
						<div class="skills">

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">marketing</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="92">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="92"></div></div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">design / development</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="80">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="80"></div></div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">photography</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="65">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="65"></div></div>
								</div>
							</div>

						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Experiance Section -->
	
	<!-- Featured Section -->
	<section class="featured-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="icon">
							<img src="assets/images/resource/feature-1.png" alt="" />
						</div>
						<h5>Planning & Sketch</h5>
						<div class="text">Percu dicat copiosae reprimique teim. laborey sed fabulas scriptorem.</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="icon">
							<img src="assets/images/resource/feature-2.png" alt="" />
						</div>
						<h5>Design & Develop</h5>
						<div class="text">Percu dicat copiosae reprimique teim. laborey sed fabulas scriptorem.</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="icon">
							<img src="assets/images/resource/feature-3.png" alt="" />
						</div>
						<h5>Testing & Deliver</h5>
						<div class="text">Percu dicat copiosae reprimique teim. laborey sed fabulas scriptorem.</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Featured Section -->
	
	<!-- Counter Section -->
	<section class="counter-section" style="background-image:url(https://via.placeholder.com/1920x437)">
		<div class="auto-container">
			
			<!-- Fact Counter -->
			<div class="fact-counter style-two">
				<div class="row clearfix">

					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-mouse"></div>
								<div class="count-outer count-box alternate">
									<span class="count-text" data-speed="4500" data-stop="600">0</span>+
								</div>
								<div class="counter-title">Project</div>
							</div>
						</div>
					</div>
					
					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-imac"></div>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="2000" data-stop="80">0</span>+
								</div>
								<div class="counter-title">Award</div>
							</div>
						</div>
					</div>
					
					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-user-4"></div>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="150">0</span>+
								</div>
								<div class="counter-title">Client</div>
							</div>
						</div>
					</div>
					
					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-folder-1"></div>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="125">0</span>+
								</div>
								<div class="counter-title">in progress</div>
							</div>
						</div>
					</div>
				
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Counter Section -->
	
	<!-- Team Section -->
	<section class="team-section">
		<div class="long-arrow" style="background-image: url(assets/images/icons/long-arrow-4.png)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">professionals at work</div>
				<div class="separate"></div>
				<h2>Meet Our Team</h2>
			</div>
			
			<div class="row clearfix">
			
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="https://via.placeholder.com/170x170" alt="" />
						</div>
						<h6>alex rasman</h6>
						<div class="designation">ceo founder</div>
						<!--Social Links-->
						<ul class="social-links">
							<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
							<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
						</ul>
						
						<!-- Overlay Box -->
						<div class="overlay-box">
							<div class="overlay-inner">
								<div class="content">
									<div class="name"><a href="#">alex rasman</a></div>
									<div class="designation-popup">ceo founder</div>
									<div class="text">Eorem ipsum dolr sit dolor amt eiusmod tempor sed eminys bor veniama ipsum nostrud esa sed magna aliqa autga enim.</div>
									<div class="number"><a href="tel:123-456-7890">(123) 456 7890</a></div>
									<!--Social Links-->
									<ul class="social-links">
										<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
										<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="https://via.placeholder.com/170x170" alt="" />
						</div>
						<h6>tom albert</h6>
						<div class="designation">developer</div>
						<!--Social Links-->
						<ul class="social-links">
							<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
							<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
						</ul>
						
						<!-- Overlay Box -->
						<div class="overlay-box">
							<div class="overlay-inner">
								<div class="content">
									<div class="name"><a href="#">tom albert</a></div>
									<div class="designation-popup">developer</div>
									<div class="text">Eorem ipsum dolr sit dolor amt eiusmod tempor sed eminys bor veniama ipsum nostrud esa sed magna aliqa autga enim.</div>
									<div class="number"><a href="tel:123-456-7890">(123) 456 7890</a></div>
									<!--Social Links-->
									<ul class="social-links">
										<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
										<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="https://via.placeholder.com/170x170" alt="" />
						</div>
						<h6>sara anderson</h6>
						<div class="designation">creative designer</div>
						<!--Social Links-->
						<ul class="social-links">
							<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
							<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
						</ul>
						
						<!-- Overlay Box -->
						<div class="overlay-box">
							<div class="overlay-inner">
								<div class="content">
									<div class="name"><a href="#">sara anderson</a></div>
									<div class="designation-popup">creative designer</div>
									<div class="text">Eorem ipsum dolr sit dolor amt eiusmod tempor sed eminys bor veniama ipsum nostrud esa sed magna aliqa autga enim.</div>
									<div class="number"><a href="tel:123-456-7890">(123) 456 7890</a></div>
									<!--Social Links-->
									<ul class="social-links">
										<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
										<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="https://via.placeholder.com/170x170" alt="" />
						</div>
						<h6>chris donald</h6>
						<div class="designation">manager admin</div>
						<!--Social Links-->
						<ul class="social-links">
							<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
							<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
						</ul>
						
						<!-- Overlay Box -->
						<div class="overlay-box">
							<div class="overlay-inner">
								<div class="content">
									<div class="name"><a href="#">chris donald</a></div>
									<div class="designation-popup">manager admin</div>
									<div class="text">Eorem ipsum dolr sit dolor amt eiusmod tempor sed eminys bor veniama ipsum nostrud esa sed magna aliqa autga enim.</div>
									<div class="number"><a href="tel:123-456-7890">(123) 456 7890</a></div>
									<!--Social Links-->
									<ul class="social-links">
										<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
										<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Team Section -->
	
	<!-- Testimonial Section -->
	<section class="testimonial-section">
		<div class="long-arrow" style="background-image: url(assets/images/icons/long-arrow-1.png)"></div>
		<div class="circle-layer" style="background-image:url(assets/images/icons/icon-1.png)"></div>
		<div class="plus-icons" style="background-image:url(assets/images/icons/icon-3.png)"></div>
		<div class="side-pattern" style="background-image:url(assets/images/background/pattern-1.png)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">What clients saying</div>
				<div class="separate"></div>
				<h2>What Clients Say</h2>
			</div>
			<div class="testimonial-carousel owl-carousel owl-theme">
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="author-image">
							<img src="https://via.placeholder.com/100x100" alt="" />
						</div>
						<div class="text">Aperiam eaque ipsa quae ab illo inventore veritatis quasi Sit voluptatem accusantium dolore mquey laudan totam architecto beatae vitae dicta sunt explicabo tempor incid labore et dolore magna aliqua veniam.</div>
						<div class="author-info">John Smith</div>
						<div class="designation">CEO Kamelia Media Ltd.</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="author-image">
							<img src="https://via.placeholder.com/100x100" alt="" />
						</div>
						<div class="text">Aperiam eaque ipsa quae ab illo inventore veritatis quasi Sit voluptatem accusantium dolore mquey laudan totam architecto beatae vitae dicta sunt explicabo tempor incid labore et dolore magna aliqua veniam.</div>
						<div class="author-info">John Smith</div>
						<div class="designation">CEO Kamelia Media Ltd.</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="author-image">
							<img src="https://via.placeholder.com/100x100" alt="" />
						</div>
						<div class="text">Aperiam eaque ipsa quae ab illo inventore veritatis quasi Sit voluptatem accusantium dolore mquey laudan totam architecto beatae vitae dicta sunt explicabo tempor incid labore et dolore magna aliqua veniam.</div>
						<div class="author-info">John Smith</div>
						<div class="designation">CEO Kamelia Media Ltd.</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="author-image">
							<img src="https://via.placeholder.com/100x100" alt="" />
						</div>
						<div class="text">Aperiam eaque ipsa quae ab illo inventore veritatis quasi Sit voluptatem accusantium dolore mquey laudan totam architecto beatae vitae dicta sunt explicabo tempor incid labore et dolore magna aliqua veniam.</div>
						<div class="author-info">John Smith</div>
						<div class="designation">CEO Kamelia Media Ltd.</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="author-image">
							<img src="https://via.placeholder.com/100x100" alt="" />
						</div>
						<div class="text">Aperiam eaque ipsa quae ab illo inventore veritatis quasi Sit voluptatem accusantium dolore mquey laudan totam architecto beatae vitae dicta sunt explicabo tempor incid labore et dolore magna aliqua veniam.</div>
						<div class="author-info">John Smith</div>
						<div class="designation">CEO Kamelia Media Ltd.</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="author-image">
							<img src="https://via.placeholder.com/100x100" alt="" />
						</div>
						<div class="text">Aperiam eaque ipsa quae ab illo inventore veritatis quasi Sit voluptatem accusantium dolore mquey laudan totam architecto beatae vitae dicta sunt explicabo tempor incid labore et dolore magna aliqua veniam.</div>
						<div class="author-info">John Smith</div>
						<div class="designation">CEO Kamelia Media Ltd.</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->
	
	<!-- Contact Section -->
	<section class="contact-section" style="background-image:url(assets/images/background/1.jpg)">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="long-arrow" style="background-image: url(assets/images/icons/long-arrow-3.png)"></div>
						<!-- Sec Title -->
						<div class="sec-title style-two">
							<div class="title">Contact us</div>
							<div class="separate"></div>
						</div>
						
						<ul class="info-list">
							<li>
								<strong>London Office, UK</strong>
								58 Crown Street, London CA11 2ZX<br>
								United Kingdom<br>
								Phone: <a href="tel:079-7807-2032">079 7807 2032</a><br>
								Email: <a href="mailto:biz@my-domain.com">biz@my-domain.com</a>
							</li>
							<li>
								<strong>Newyork Office, USA</strong>
								4157  Settlers Lane, Huntington, NY<br>
								11743 - United States<br>
								Phone: <a href="tel:917-833-6516">917-833-6516</a><br>
								Email: <a href="mailto:biz@my-domain.com">biz@my-domain.com</a>
							</li>
						</ul>
						
					</div>
				</div>
				
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="long-arrow" style="background-image: url(assets/images/icons/long-arrow-3.png)"></div>
						<!-- Sec Title -->
						<div class="sec-title style-two">
							<div class="title">send a message</div>
							<div class="separate"></div>
						</div>
						
						<!-- Default Form -->
						<div class="default-form">
							<form method="post" action="blog.html">
									
								<div class="form-group">
									<input type="text" name="username" placeholder="Your name" required>
								</div>
								
								<div class="form-group">
									<input type="email" name="email" placeholder="Email address" required>
								</div>
								
								<div class="form-group">
									<textarea name="message" placeholder="message"></textarea>
								</div>
							
								<div class="form-group">
									<button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">send message</span></button>
								</div>
								
							</form>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact Section -->
	
	<!-- News Section -->
	<section class="news-section">
		<div class="long-arrow" style="background-image: url(assets/images/icons/long-arrow-4.png)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">get working tips from us</div>
				<div class="separate"></div>
				<h2>News And Articles</h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-single.html"><img src="https://via.placeholder.com/360x280" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="icon fa fa-calendar"></span> March 15, 2020</li>
								<li><span class="icon fa fa-comment-o"></span> 187</li>
							</ul>
							<h5><a href="blog-single.html">Streamline Your Projects With Our Easy Solutions</a></h5>
							<div class="text">Excepteur sint occaecat cupidatat non proident mollit any laboruys. Sed ut perspiciatis unde om accusantium dolor que totams.</div>
							<a href="blog-single.html" class="theme-btn btn-style-four"><span class="txt">Read More</span></a>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-single.html"><img src="https://via.placeholder.com/360x280" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="icon fa fa-calendar"></span> March 15, 2020</li>
								<li><span class="icon fa fa-comment-o"></span> 187</li>
							</ul>
							<h5><a href="blog-single.html">Why We Are Top of The Heap Digital Agency In Town</a></h5>
							<div class="text">Excepteur sint occaecat cupidatat non proident mollit any laboruys. Sed ut perspiciatis unde om accusantium dolor que totams.</div>
							<a href="blog-single.html" class="theme-btn btn-style-four"><span class="txt">Read More</span></a>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-single.html"><img src="https://via.placeholder.com/360x280" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="icon fa fa-calendar"></span> March 15, 2020</li>
								<li><span class="icon fa fa-comment-o"></span> 187</li>
							</ul>
							<h5><a href="blog-single.html">Streamline Your Projects With Our Easy Solutions</a></h5>
							<div class="text">Excepteur sint occaecat cupidatat non proident mollit any laboruys. Sed ut perspiciatis unde om accusantium dolor que totams.</div>
							<a href="blog-single.html" class="theme-btn btn-style-four"><span class="txt">Read More</span></a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End News Section -->
	
	<!-- Main Footer -->
    <footer class="main-footer style-two">
		<div class="patern-icon" style="background-image: url(assets/images/icons/icon-4.png)"></div>
    	<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
					
					<!-- Footer Column -->
					<div class="footer-column col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget logo-widget">
							<div class="logo">
								<a href="index.html"><img src="https://via.placeholder.com/130x60" alt="" /></a>
							</div>
							<div class="text">Vim novum tritaniys scribentur varety per culy dicat copiosae reprimique teim laborey fabulas scriptorem.</div>
							<!--Social Links-->
							<ul class="social-links clearfix">
								<li><a href="#"><span class="fa fa-twitter"></span></a></li>
								<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
								<li><a href="#"><span class="fa fa-instagram"></span></a></li>
								<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
								<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
								<li><a href="#"><span class="fa fa-skype"></span></a></li>
							</ul>
							<div class="copyright">Shared free By <a href="https://www.mellatweb.com">Mellatweb.com</a> -</div>
						</div>
					</div>
					
					<!-- Footer Column -->
					<div class="footer-column col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget links-widget">
							<div class="footer-title">
								<h4>Site Links</h4>
							</div>
							<div class="row clearfix">
								<div class="column col-lg-6 col-md-6 col-xs-12">
									<ul>
										<li><a href="#">Home Page</a></li>
										<li><a href="#">About Us</a></li>
										<li><a href="#">Latest News</a></li>
										<li><a href="#">Recent Projects</a></li>
									</ul>
								</div>
								<div class="column col-lg-6 col-md-6 col-xs-12">
									<ul>
										<li><a href="#">Our Services</a></li>
										<li><a href="#">Partners Team</a></li>
										<li><a href="#">Testimonials</a></li>
										<li><a href="#">Contact Support</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					
					<!--Footer Column-->
					<div class="footer-column col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget gallery-widget">
							<div class="footer-title">
								<h4>Recent Projects</h4>
							</div>
							<div class="widget-content">
								<div class="images-outer clearfix">
									<!--Image Box-->
									<figure class="image-box"><a href="https://via.placeholder.com/570x400" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="https://via.placeholder.com/80x80" alt=""></a></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="https://via.placeholder.com/570x400" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="https://via.placeholder.com/80x80" alt=""></a></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="https://via.placeholder.com/570x400" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="https://via.placeholder.com/80x80" alt=""></a></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="https://via.placeholder.com/570x400" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="https://via.placeholder.com/80x80" alt=""></a></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="https://via.placeholder.com/570x400" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="https://via.placeholder.com/80x80" alt=""></a></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="https://via.placeholder.com/570x400" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="https://via.placeholder.com/80x80" alt=""></a></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="https://via.placeholder.com/570x400" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="https://via.placeholder.com/80x80" alt=""></a></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="https://via.placeholder.com/570x400" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="https://via.placeholder.com/80x80" alt=""></a></figure>
								</div>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</footer>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="assets/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="assets/color-themes/green-theme.css"></span>
            <span class="palate blue-color" data-theme-file="assets/color-themes/blue-theme.css"></span>
            <span class="palate orange-color" data-theme-file="assets/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="assets/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="assets/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="assets/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="assets/color-themes/redd-color.css"></span>
        </div>
    </div>
	
    <a href="#" class="purchase-btn">Purchase now $17</a>
    
    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>

</div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/tilt.jquery.min.js"></script>
<script src="assets/js/jquery.paroller.min.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/color-settings.js"></script>

</body>
</html>