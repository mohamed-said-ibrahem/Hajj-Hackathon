<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black">


<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
<title>Nabd</title>

<link rel="stylesheet" type="text/css" href="<?= base_url()."assets/"; ?>styles/style.css">
<link rel="stylesheet" type="text/css" href="<?= base_url()."assets/"; ?>styles/menu.css">
<link rel="stylesheet" type="text/css" href="<?= base_url()."assets/"; ?>styles/framework.css">
<link rel="stylesheet" type="text/css" href="<?= base_url()."assets/"; ?>styles/font-awesome.css">


	
	
<script type="text/javascript" src="<?= base_url()."assets/"; ?>scripts/jquery.js"></script>
<script type="text/javascript" src="<?= base_url()."assets/"; ?>scripts/plugins.js"></script>
<script type="text/javascript" src="<?= base_url()."assets/"; ?>scripts/custom.js"></script>
</head>
<body>
<div class="gallery-fix"></div><!-- Fix Gallery next/prev error on Android -->
<div class="sidebar-tap-close"></div><!-- Overlay for content to close Sidebar -->
    
<div class="header-fixed header-light">
    <a href="#" class="header-icon-1 open-left-sidebar"><i class="fa fa-navicon"></i></a>
    <a href="<?= base_url() ?>" class="header-logo logo-to-right"></a>
</div>
    
        
<div class="sidebar-left sidebar-light">
    <div class="sidebar-scroll">
        <div class="sidebar-header">
            <a href="<?= base_url() ?>" class="sidebar-logo"></a>
        </div>        
        <div class="sidebar-menu"> 
			<?php
			$key = 'home';
			if (strpos($this->uri->uri_string(), $key) !== false || $this->uri->uri_string() == null) {
				$active = 'active-item';
			} else {
				$active = '';
			}
			?>
            <a class="menu-item border-menu-white <?= $active ?>" href="<?= base_url() ?>">
                <i class="fa fa-ambulance"></i>
                طلب مساعدة طبية
                <i class="fa fa-circle"></i>  
            </a> 
			
			<?php
			$key = 'home';
			if (strpos($this->uri->uri_string(), $key) !== false) {
				$active = 'active-item';
			} else {
				$active = '';
			}
			?>
            <a class="menu-item border-menu-white <?= $active ?>" href="<?= site_url("history") ?>">
                <i class="fa fa-history"></i>
                السجل الصحي
                <i class="fa fa-circle"></i>  
            </a> 
			
			<?php
			$key = 'home';
			if (strpos($this->uri->uri_string(), $key) !== false) {
				$active = 'active-item';
			} else {
				$active = '';
			}
			?>
            <a class="menu-item border-menu-white <?= $active ?>" href="<?= site_url("diagnosis") ?>">
                <i class="fa fa-question"></i>
                طلب تشخيص عن بعد
                <i class="fa fa-circle"></i>

            </a> 
			
			<?php
			$key = 'home';
			if (strpos($this->uri->uri_string(), $key) !== false) {
				$active = 'active-item';
			} else {
				$active = '';
			}
			?>
            <a class="menu-item border-menu-white <?= $active ?>" href="<?= site_url("information") ?>">
                <i class="fa fa-heart"></i>
                الصحة العامة
                <i class="fa fa-circle"></i>  
            </a> 
        </div>    
    </div>
</div>
	
