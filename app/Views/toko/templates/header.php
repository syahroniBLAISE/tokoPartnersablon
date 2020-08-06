<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	foreach ($seo as $value) {
		$tittle = $value['tittle'];
		$keyword = $value['keyword'];
		$description = $value['description'];
	}
	// $halaman = $data['halaman'];
	?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="<?php echo $keyword;?>">
    <meta name="description" content="<?php echo $description;?>">
    <meta name="author" content="">
    <title><?php echo $tittle;?> | <?php echo $tittle;?></title>
    <link href="/asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="/asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="/asset/css/prettyPhoto.css" rel="stylesheet">
    <link href="/asset/css/price-range.css" rel="stylesheet">
    <link href="/asset/css/animate.css" rel="stylesheet">
	<link href="/asset/css/main.css" rel="stylesheet">
	<link href="/asset/css/responsive.css" rel="stylesheet">
	<link href="/asset/css/style.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="asset/js/html5shiv.js"></script>
    <script src="asset/js/respond.min.js"></script>
    <![endif]-->       
    <!-- <link rel="shortcut icon" href="/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png"> -->
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<?php 
						foreach ($kontak as $value) {
							$phone = $value['phone'];
							$email = $value['email'];
						}
						?>
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="/#"><i class="fa fa-phone"></i> <?php echo $phone ?></a></li>
								<li><a href="/#"><i class="fa fa-envelope"></i> <?php echo $email ?></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<?php 
							foreach ($sosial_media as $value) {
								$tw = $value['tw'];
								$fb = $value['fb'];
								$gp = $value['gp'];
							}
							?>
							<ul class="nav navbar-nav">
								<li><a href="/<?php echo $fb;?>"><i class="fa fa-facebook"></i></a></li>
								<li><a href="/<?php echo $tw;?>"><i class="fa fa-twitter"></i></a></li>
								<li><a href="/<?php echo $gp;?>"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<?php
							// foreach ($logo-> as $value) {
								$logo = $logo['gambar'];
							// }

							?>
							<a href="/"><img src="images/logo/<?php echo $logo;?>" alt="Adriano MX Online Shop" /></a>
						</div>
						<div class="btn-group pull-right">
							
							
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="/home/tentang_kami"> Tentang Kami</a></li>
								<li><a href="/home/cara_belanja"> Cara Belanja</a></li>
								<li><a href="/home/order_sablon"> Order Sablon</a></li>
								<li><a href="/home/hubungi_kami"> Hubungi Kami</a></li>
								<li><a href="/home/keranjang"> Keranjang Belanja</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="/" class="active">Home</a></li>
								
								<li class="dropdown"><a href="/#">Category<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                    	<?php
                                    	// foreach ($kategori-> as $value) { ?>
                                    		
                                        <li><a href="/home/kategori/<?php echo $kategori['id_kategori'];?>"><?php echo $kategori['nama_kategori'];?></a></li>
                                    	<?php
                                    	// }
                                    	?>
										 
                                    </ul>
                                </li> 
								
								
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<?php 
						// echo form_open('home/cari');?>
						<!-- <div class="search_box pull-right">
							<input type="text" name="cari" placeholder="Search"/>
						</div> -->
						<?php 
						// echo form_close();?>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
