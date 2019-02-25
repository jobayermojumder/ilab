<!DOCTYPE html>
<html lang="en">
<head>
	<title>iLab | A Lab to fulfill the Young Innovators Dreams</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content=""> 

	<!-- Favicon -->
	<link rel="shortcut icon" href="../favicon.ico">

	<!-- Web Fonts -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=cyrillic,latin">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:100,300,500,700&amp;subset=latin,cyrillic">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/img/abelpro.otf">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/img/abelpro-bold.otf">

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/app.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/blocks.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/one.style.css">

	<!-- CSS Footer -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/footers/footer-v7.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/animate.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/line-icons.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/pace-flash.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/owl-carousel2/assets/owl.carousel.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/architecture.style.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/custom.css">
</head>

<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery">
	<!--=== Header ===-->
	<nav class="one-page-header one-page-header-style-2 navbar navbar-default navbar-fixed-top architecture-nav one-page-nav-scrolling one-page-nav__fixed" role="navigation">
		<div class="container">
			<div class="page-scroll">
				<a class="logo-link navbar-brand logo-left" href="#intro">
					<img class="default-logo" src="<?=base_url()?>assets/img/ilab-logo.png" alt="Logo">
					<img class="shrink-logo" src="<?=base_url()?>assets/img/ilab-logo.png" alt="Logo">
				</a>
			</div>

			<div class="container no-padding-left ">
				<div class="row collapse navbar-collapse navbar-ex1-collapse">
					<div class="col-md-5 no-side-padding">
						
					</div>

					<div class="col-md-2 no-side-padding">
						<div class="center-block logo page-scroll">
							<a class="logo-link navbar-brand logo-centered" href="index.php">
								<img class="default-logo" src="<?=base_url()?>assets/img/ilab-logo.png" alt="Logo" style="margin: -5px; padding: 0px;">
								<img class="shrink-logo" src="<?=base_url()?>assets/img/ilab-logo.png" alt="Logo" style="margin: -5px; padding: 0px;">
							</a>
						</div>
					</div>

					<div class="col-md-5 no-side-padding">
						
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</nav>

	<section style="margin-top: 10%;">
		<div class="container">
			<?php if($this->session->flashdata('smsg') && $this->session->flashdata('smsg') != ""){ ?>
				<div class="alert alert-success alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Success!</strong> <?=$this->session->flashdata('smsg')?>
				</div>		
			<?php } ?>
			<?php if($this->session->flashdata('emsg') && $this->session->flashdata('emsg') != ""){ ?>
				<div class="alert alert-danger alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Error!</strong> <?=$this->session->flashdata('emsg')?>
				</div>		
			<?php } ?>



			<div class="row well">
				<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
					<img src="<?=base_url($results->path.$results->product_image1)?>" class="img-responsive product-image">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
					<h3><?=$results->product_name?></h3>
					<p><?=$results->product_description?></p>
					<p><b>category: </b><?=$results->product_category?></p>
					<p><b>Innovator name: </b><?=$results->product_innovator_name?></p>
					<p><b>Price: </b><?=$results->product_cost_tk?> tk( $<?=$results->product_cost_doller?>)</p>
					<br><br>
					<a href="#" class="btn btn-info pull-left" data-toggle="modal" data-target="#myModal">Adopt</a>
				</div>
				<div class="col-md-12" style="text-align: center; margin-top: 20px;">
					<iframe width="500" height="300"src="<?=$results->product_video?>"></iframe>

				</div>
			</div>
		</div>
	</section>

	<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="fa fa-times"></i></button>
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-body" style="background-color: white; padding: 20px;">
					<div class="modal-bot g-heading-v7">
						<h3 class="g-color-black" style="margin-bottom: 0px;"><?=$results->product_name?></h3>
					</div>

					<form class="form-horizontal" method="post" action="<?=site_url('home/order_submit')?>">
						<div class="form-group">
							<div class="col-sm-12">
								<input type="hidden"  class="form-control" id="product_id" name="product_id" value="<?=$results->product_id?>">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-3" for="form_user_name">User name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="form_user_name" name="form_user_name">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-3" for="form_user_email">User email</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" id="form_user_email"name="form_user_email">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-3" for="form_user_phone">User phone</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="form_user_phone" name="form_user_phone">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-3" for="product_quantity">Product quantity</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" name="product_quantity" id="product_quantity">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-3" for="country">country</label>
							<div class="col-sm-9">
								<input type="text" name="country" class="form-control" id="country" value="Bangladesh">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-3" for="form_comment">Comment</label>
							<div class="col-sm-9">
								<textarea type="text" class="form-control" id="form_comment" name="form_comment"></textarea>
							</div>
						</div>
						<div class="form-group"> 
							<div class="col-sm-offset-3 col-sm-9">
								<button type="submit" class="btn btn-info">Submit</button>
							</div>
						</div>
					</form>

					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>


<!-- JS Global Compulsory -->
<script src="<?=base_url()?>assets/css/plugins/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/css/plugins/jquery/jquery-migrate.min.js"></script>
<script src="<?=base_url()?>assets/css/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="<?=base_url()?>assets/css/plugins/smoothScroll.js"></script>
<script src="<?=base_url()?>assets/css/plugins/jquery.easing.min.js"></script>
<script src="<?=base_url()?>assets/css/plugins/pace/pace.min.js"></script>
<script src="<?=base_url()?>assets/css/plugins/owl-carousel2/owl.carousel.min.js"></script>
<script src="<?=base_url()?>assets/css/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
<script src="<?=base_url()?>assets/css/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
<script src="<?=base_url()?>assets/css/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="<?=base_url()?>assets/css/plugins/modernizr.js"></script>
<script src="<?=base_url()?>assets/css/plugins/backstretch/jquery.backstretch.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?signed_in=true&amp;callback=initMap" async defer></script><script src="<?=base_url()?>assets/js/plugins/gmaps-ini.js"></script>

<!-- JS Page Level-->
<script src="<?=base_url()?>assets/js/one.app.js"></script>
<script src="<?=base_url()?>assets/js/plugins/pace-loader.js"></script>
<script src="<?=base_url()?>assets/js/plugins/owl-carousel2.js"></script>
<script src="<?=base_url()?>assets/js/plugins/cube-portfolio-lightbox.js"></script>
<script src="<?=base_url()?>assets/js/plugins/promo.js"></script>
<script src="<?=base_url()?>assets/js/forms/contact.js"></script>
<script>
	$(function() {
		App.init();
		OwlCarousel.initOwlCarousel();
		ContactForm.initContactForm();
	});
</script>
</body>
</html>