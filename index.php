<!-- API call initialized below -->
<?php

	///////////////common API call starts///////////////////

	$format = "json";

	$url = "https://content.guardianapis.com/search?&format=$format&api-key=4c9ce24c-afaf-4769-9c27-1ee87e40c9cf";

	$ch = curl_init();


	curl_setopt($ch, CURLOPT_URL, $url); 

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 3);
	$content = trim(curl_exec($ch));
	curl_close($ch);

	//echo "<pre>";
	$data = json_decode($content);

	//var_dump($data);
	/////////////////Common API call ends//////////////


	////////////////////////API call for BD news starts///////////////////////
	$bdUrl="https://content.guardianapis.com/search?q=bangladesh&format=$format&api-key=4c9ce24c-afaf-4769-9c27-1ee87e40c9cf";

	$bdch = curl_init();


	curl_setopt($bdch, CURLOPT_URL, $bdUrl); 

	curl_setopt($bdch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($bdch, CURLOPT_TIMEOUT, 3);
	$bdContent = trim(curl_exec($bdch));
	curl_close($bdch);

	//echo "<pre>";
	$bdData = json_decode($bdContent);

	//var_dump($bdData);

	////////////////////////API call for BD news ends///////////////////////

	////////////////////////API call for Politics news starts///////////////////////

	$polUrl="https://content.guardianapis.com/search?q=politics&format=$format&api-key=4c9ce24c-afaf-4769-9c27-1ee87e40c9cf";

	$polch = curl_init();


	curl_setopt($polch, CURLOPT_URL, $polUrl); 

	curl_setopt($polch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($polch, CURLOPT_TIMEOUT, 3);
	$polContent = trim(curl_exec($polch));
	curl_close($polch);

	//echo "<pre>";
	$polData = json_decode($polContent);


	////////////////////////API call for Politics news ends///////////////////////
	
	////////////////////////API call for World News starts///////////////////////

	$worldUrl="https://content.guardianapis.com/search?q=world%20news&format=$format&api-key=4c9ce24c-afaf-4769-9c27-1ee87e40c9cf";

	$worldch = curl_init();


	curl_setopt($worldch, CURLOPT_URL, $worldUrl); 

	curl_setopt($worldch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($worldch, CURLOPT_TIMEOUT, 3);
	$worldContent = trim(curl_exec($worldch));
	curl_close($worldch);

	//echo "<pre>";
	$worldData = json_decode($worldContent);


	////////////////////////API call for World News starts///////////////////////	

	////////////////////////API call for technology News starts///////////////////////

	$techUrl="https://content.guardianapis.com/search?q=technology&format=$format&api-key=4c9ce24c-afaf-4769-9c27-1ee87e40c9cf";

	$techch = curl_init();


	curl_setopt($techch, CURLOPT_URL, $techUrl); 

	curl_setopt($techch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($techch, CURLOPT_TIMEOUT, 3);
	$techContent = trim(curl_exec($techch));
	curl_close($techch);

	//echo "<pre>";
	$techData = json_decode($techContent);

	////////////////////////API call for technology News ends///////////////////////

	////////////////////////API call for sports News starts///////////////////////
	$sportUrl="https://content.guardianapis.com/search?q=sports&format=$format&api-key=4c9ce24c-afaf-4769-9c27-1ee87e40c9cf";

	$sportch = curl_init();


	curl_setopt($sportch, CURLOPT_URL, $sportUrl); 

	curl_setopt($sportch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($sportch, CURLOPT_TIMEOUT, 3);
	$sportContent = trim(curl_exec($sportch));
	curl_close($sportch);

	//echo "<pre>";
	$sportData = json_decode($sportContent);

	////////////////////////API call for technology News starts///////////////////////

?>

<!-- API call initializing done above -->


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Newpaper using API</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet"> 
		
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
		
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
	
		<!-- Header -->
		<header id="header">
			<!-- Center Header -->
			<div id="center-header">
				<div class="container">
					<div class="header-logo">
						<a href="#" class="logo"><img src="./img/newLogo.png" alt=""></a>
					</div>
					<!-- <div class="header-ads">
						<img class="center-block" src="./img/ad-2.jpg" alt=""> 
					</div> -->
				</div>
			</div>
			<!-- /Center Header -->
			
			<!-- Nav Header -->
			<div id="nav-header">
				<div class="container">
					<nav id="main-nav">
						<div class="nav-logo">
							<a href="#" class="logo"><img src="./img/logo-alt.png" alt=""></a>
						</div>
						<ul class="main-nav nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#bangladesh">Bangladesh</a></li>
							<li><a href="#politics">Politics</a></li>
							<li><a href="#world">World News</a></li>
							<li><a href="#technology">Technology</a></li>
							<li><a href="#sport">Sports</a></li>
						</ul>
					</nav>
					<!-- <div class="button-nav">
						<button class="search-collapse-btn"><i class="fa fa-search"></i></button>
						<button class="nav-collapse-btn"><i class="fa fa-bars"></i></button>
						<div class="search-form">
							<form>
								<input class="input" type="text" name="search" placeholder="Search">
							</form>
						</div>
					</div> -->
				</div>
			</div>
			<!-- /Nav Header -->
		</header>
		<!-- /Header -->
		
		<!-- Owl Carousel 1 -->
		<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
			<!-- ARTICLE -->
			
		<?php foreach ($data->response->results as $key => $value) {
			?>
			<article class="article thumb-article">
				<div class="article-img">
					<img src="./img/news.jpg" alt="">
				</div>
				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="#"><?php echo $value->sectionName; ?></a></li><br>
						<li class="article-type"><?php echo $value->type;?></i></li>
					</ul>
					<h2 class="article-title"><a href="<?php echo $value->webUrl;?>"><?php echo $value->webTitle; ?></a></h2>
					<ul class="article-meta">
						<li><i class="fa fa-clock-o"></i><?php $dateResponse = $value->webPublicationDate; $dr = new DateTime($dateResponse); echo $dr->format('m/d/Y'); ?></li>
						<!-- <li><i class="fa fa-comments"></i> 33</li> -->
					</ul>
				</div>
			</article>

		<?php } ?>
		</div>
		<!-- /Owl Carousel 1 -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">Trending Posts</h2>
						</div>
						<!-- /section title -->
						
						<!-- Tab content -->
						<div class="tab-content">
							<!-- tab1 -->
							<div id="tab1" class="tab-pane fade in active">
								<!-- row -->
								<div class="row">
									<?php for($i=0; $i<1; $i++){ ?>
										<!-- Column 1 -->
									<div class="col-md-12 col-sm-12">
											<?php foreach ($data->response->results as $key => $value){ ?>
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="./img/trend.jpg" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="<?php echo $value->webUrl;?>"><?php echo $value->webTitle; ?></a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> <?php $dateResponse = $value->webPublicationDate; $dr = new DateTime($dateResponse); echo $dr->format('m/d/Y'); ?></li>
												</ul>
											</div>
										</article>
									<?php } ?>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 1 -->
								<?php } ?>
									
								</div>
								<!-- /row -->
							</div>
							<!-- /tab1 -->
						</div>
						<!-- /tab content -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- row -->
						<div class="row">
							<!-- Column 1 -->
							<div class="col-lg-6 col-sm-6" id="bangladesh">
								<!-- section title -->
								<div class="section-title">
									<h2 class="title">bangladesh</h2>
								</div>
								<!-- /section title -->
								

								<!-- ARTICLE -->
								<?php foreach ($bdData->response->results as $key => $bdValue){ ?>
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="./img/bangladeshi.jpg" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="<?php echo $bdValue->webUrl; ?>"><?php echo $bdValue->webTitle; ?></a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> <?php $dateResponse2 = $bdValue->webPublicationDate; $dr2 = new DateTime($dateResponse2); echo $dr2->format('m/d/Y'); ?></li>
											
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
								<?php } ?>
								<!-- ARTICLE -->
								
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
							
							<!-- Column 2 -->
							<div class="col-lg-6 col-md-6 col-sm-6">
								<!-- section title -->
								<div class="section-title">
									<h2 class="title" id="politics">Global Politics</h2>
								</div>
								<!-- /section title -->
								

								<!-- ARTICLE -->
								<?php foreach ($polData->response->results as $key => $polValue){ ?>
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="./img/politics.jpeg" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="<?php echo $polValue->webUrl; ?>"><?php echo $polValue->webTitle; ?></a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> <?php $dateResponse3 = $polValue->webPublicationDate; $dr3 = new DateTime($dateResponse3); echo $dr3->format('m/d/Y'); ?></li>
											
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
								<?php } ?>
								<!-- ARTICLE -->
								
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 2 -->
						</div>
						<!-- /row -->
						
						<!-- row -->
						<div class="row">
							
						<!-- row -->
						<div class="row">
							<!-- Column 1 -->
							<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-8">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title" id="world">World News</h2>
						</div>
						<!-- /section title -->
						
						<!-- ARTICLE -->
						<?php foreach ($worldData->response->results as $key => $worldValue){ ?>
						<article class="article row-article">
							<div class="article-img">
								<a href="#">
									<img src="./img/world.jpg" alt="">
								</a>
							</div>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#"><?php echo $worldValue->sectionName ?></a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h3 class="article-title"><a href="<?php echo $worldValue->webUrl; ?>"><?php echo $worldValue->webTitle; ?></a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> <?php $dateResponse4 = $worldValue->webPublicationDate; $dr4 = new DateTime($dateResponse4); echo $dr4->format('m/d/Y'); ?></li>
									
								</ul>
							</div>
						</article>
					<?php } ?>
						<!-- /ARTICLE -->
						
					</div>
					<!-- /Main Column -->
					
					<!-- Aside Column -->
					
					<!-- /Aside Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
							<!-- /Column 1 -->
							
							<!-- Column 2 -->
							
							<!-- /Column 3 -->
						</div>
						<!-- /row -->
					</div>
					<!-- /Main Column -->
							
	</div>
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title" id="technology">Technology News</h2>
							<div id="nav-carousel-2" class="custom-owl-nav pull-right"></div>
						</div>
						<!-- /section title -->
						
						<!-- owl carousel 2 -->
						<div id="owl-carousel-2" class="owl-carousel owl-theme">
							<!-- ARTICLE -->
	<?php foreach ($techData->response->results as $key => $techValue){ ?>
							<article class="article thumb-article">
								<div class="article-img">
									<img src="./img/tech.jpg" alt="">
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="#0"><?php echo $techValue->sectionName; ?></a></li>
										<li class="article-type"><i class="fa fa-file-text"></i></li>
									</ul>
									<h3 class="article-title"><a href="<?php echo $techValue->webUrl; ?>"><?php echo $techValue->webTitle ?></a></h3>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> <?php $dateResponse5 = $techValue->webPublicationDate; $dr5 = new DateTime($dateResponse5); echo $dr5->format('m/d/Y'); ?></li>
									</ul>
								</div>
							</article>

						<?php } ?>
							<!-- /ARTICLE -->
						</div>
						<!-- /owl carousel 2 -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title" id="sport">Sports News</h2>
						</div>
						<!-- /section title -->
						<div class="col-md-4">
						<!-- article widget -->
						
							
							<!-- owl carousel 4 -->
							<div id="owl-carousel-4" class="owl-carousel owl-theme">
								<!-- ARTICLE -->
								<?php foreach ($sportData->response->results as $key => $sportValue){ ?>
								<article class="article thumb-article">
									<div class="article-img">
										<img src="./img/sports.jpeg" alt="">
									</div>
									<div class="article-body">
										<ul class="article-info">
											<li class="article-category"><a href="#0"><?php echo $sportValue->sectionName ?></a></li>
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
										<h3 class="article-title"><a href="<? echo $sportValue->webUrl; ?>"> <?php echo $sportValue->webTitle; ?></a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i><?php $dateResponse6 = $techValue->webPublicationDate; $dr6 = new DateTime($dateResponse6); echo $dr6->format('m/d/Y'); ?></li>
											
										</ul>
									</div>
								</article>

							<?php } ?>
						<!-- ARTICLE -->
						
					</div>
					<!-- /Main Column -->
					
					<!-- Aside Column -->
					
					<!-- /Aside Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
		<!-- FOOTER -->
		<footer id="footer">
			<!-- Top Footer -->
			
			<!-- /Top Footer -->
			
			<!-- Bottom Footer -->
			<div id="bottom-footer" class="section">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- footer links -->
						<div class="col-md-6 col-md-push-6">
							<!-- <ul class="footer-links">
								<li><a href="#">About us</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Advertisement</a></li>
								<li><a href="#">Privacy</a></li>
							</ul> -->
						</div>
						<!-- /footer links -->
						
						<!-- footer copyright -->
						<div class="col-md-6 col-md-pull-6">
							<div class="footer-copyright">
								<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
							</div>
						</div>
						<!-- /footer copyright -->
					</div>
					<!-- /ROW -->
				</div>
				<!-- /CONTAINER -->
			</div>
			<!-- /Bottom Footer -->
		</footer>
		<!-- /FOOTER -->
		
		<!-- Back to top -->
		<div id="back-to-top"></div>
		<!-- Back to top -->
		
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
