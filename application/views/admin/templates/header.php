<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="author" content="Roy Holliger" />
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <meta name="robots" content="index,follow" />
        <meta name="viewport" content="width=device-width">

        <title>Backend</title>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
    	<link rel="stylesheet" href="<?= assets_url().'css/ext/bootstrap.css' ?>"/>
		<link rel="stylesheet" href="<?= assets_url().'css/main.css' ?>" />
		<link rel="stylesheet" href="<?= assets_url().'css/ext/jNotify.jquery.css' ?>"/>
		<link rel="stylesheet" href="<?= assets_url().'css/ext/jquery.tagsinput.css' ?>"/>
     
        <!--<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>-->

        <script src="<?= assets_url().'js/ext/modernizr-2.6.1.min.js' ?>"></script>
        <script src="<?= assets_url().'js/ext/jquery-1.10.2.min.js' ?>"></script>
		<script src="<?= assets_url().'js/ext/bootstrap.min.js' ?>"></script>
		<script src="<?= assets_url().'js/ext/jquery.easing.1.3.js' ?>"></script>
		<script src="<?= assets_url().'js/ext/jNotify.jquery.min.js' ?>"></script>
		<script src="<?= assets_url().'js/ext/jquery.tagsinput.min.js' ?>"></script>
		<script src="<?= assets_url().'js/ext/jquery.animate-colors-min.js' ?>"></script>
		<script src="<?= assets_url().'js/ext/jquery.tablesorter.min.js' ?>"></script>
        <script src="<?= assets_url().'js/plugins.js' ?>"></script>
		<script src="<?= assets_url().'js/main.js' ?>"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="container">
        
			<section id="main">
				<div class="wrapper">
			        <header>
			        	<div id="headernav">
							<nav id="links">
								<ul>
									<li><a href="#">Testlink1<span class="anot">12</span></a></li>
									<li><a href="#" class="active">Testlink2</a></li>
								</ul>
							</nav>
							<div id="profileContainer">
								<span id="profile">
									<!--<img src="#" alt="Bild"/>-->
									Hallo Welt
									<a href="#">Test</a>
								</span>
								<a href="#" id="logout"><i id="logouticon" class="icon-search"></i></a>
							</div>
			        	</div>
			        </header>