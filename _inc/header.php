<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<meta itemscope itemtype="https://schema.org/Person" itemprop="name" content="Konstantin Minevich">
	<meta itemscope itemtype="https://schema.org/Person" itemprop="description" content="Konstantin is a web designer and front end developer with several years of experience. He has been professionally designing and building websites since 2013. He has a strong knowledge of client side programming (JavaScript) and a proven expertise in HTML5 and CSS3." >
	<title>MinevichDesign | <?php echo $page_title; ?></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>favicon.png">
		<link rel="canonical" href="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oswald:400,700%7CDosis:400,300,700' type='text/css'>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/three-quarters-spinner.css" type="text/css">
	<link rel='stylesheet' href='<?php echo BASE_URL ?>fonts/flaticon/flaticon.css' type='text/css'>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/main.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">
	</script>
</head>
	<body id="top"
	<?php if ($page == "home") { ?>
		class="landing-page"
	<?php } else { ?>
		class="content-page"
	<?php } ?>
	>
	<div class="loading">
	    <div class="three-quarters-loader spinner"></div>
	</div>

	<div id="menu">
		<a href aria-hidden="false" id="menu-close"><span class="flaticon-close"></span></a>
		<a href="<?php echo BASE_URL; ?>">Home</a>
        <a href="<?php echo BASE_URL; ?>about/">About</a>
		<a href="<?php echo BASE_URL; ?>services/">Services</a>
		<a href="<?php echo BASE_URL; ?>portfolio/">Portfolio</a>
		<a href="<?php echo BASE_URL; ?>contact/">Contact</a>
	</div>
	<div id="main-nav">
		<div id="inner-nav">
			<div id="main-nav-logo">
				<a href="<?php echo BASE_URL; ?>">
					<span>Minevich</span>Design
				</a>
			</div>
			<button id="menu-toggle"><span class="flaticon-menu"></span></button>
			<div id="main-nav-navbar">
				<ul class="nav-items">
					<li><a <?php if($page == "home") echo 'class="active"'; ?> href="<?php echo BASE_URL; ?>">Home</a></li>
                    <li><a <?php if($page == "about") echo 'class="active"'; ?> href="<?php echo BASE_URL; ?>about/">About</a></li>
					<li><a <?php if($page == "services") echo 'class="active"'; ?> href="<?php echo BASE_URL; ?>services/">Services</a></li>
					<li><a <?php if($page == "portfolio") echo 'class="active"'; ?> href="<?php echo BASE_URL; ?>portfolio/">Portfolio</a></li>
					<li><a id="contact-link" <?php if($page == "contact") echo 'class="active"'; ?> href="<?php echo BASE_URL; ?>contact/">Contact Me</a></li>
				</ul>
			</div>
		</div>
	</div>
	<?php if ($page !== 'home') { ?>
		<div class="content-wrapper">
        <div class="page-header ph_<?php echo $page;?>">
            <h1 class="page-title"><?php echo $page_title ?></h1>
        </div>
    <?php } ?>
