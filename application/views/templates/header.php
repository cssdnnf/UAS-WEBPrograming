<html>        
    <!--
    |
    |   WEB PROGRAMMING
    |   Kategori Food and Beverage
    |
    |   Anggota Kelompok:
    |   1. Cassiel Dannyala Ferdinand || Nim: 06023032
    |   2. Siti Shalu Prilia || Nim: 06023015
    |   3. Muhammad Vico Lacosto || Nim: 06023033
    |
    -->
    <head>
        <!-- End of Async Drift Code -->
        <meta charset="UTF-8">
        <meta name="author" content="Cassiel D. Ferdinand">
        <meta name="description" content="Web Programming - Bertemakan website restourant cepat saji.">
        <meta name="keyword" content="Web Programming, Food and Beverage, F&B, TAU, Tanri Abeng University">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Site Title -->
		<title><?php echo $setting[0]['title_web']; ?></title>

        <!-- Icon Website -->
        <link rel="icon" href="./assets/images/burger-icon.png">

        <!-- CSS -->
        <link href="./assets/css/menu.css" rel="stylesheet">
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="./assets/css/owl.carousel.min.css" rel="stylesheet">
        <link href="./assets/css/owl.theme.default.min.css" rel="stylesheet">
        <link href="./assets/css/magnific-popup.css" rel="stylesheet">

        <!-- CSS Custom -->
        <link href="./assets/css/style.css" rel="stylesheet">


		<!-- Leaflet CSS -->
		<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    </head>
    <body>
        <!-- Header -->
        <!--<header>-->
        <div class="navik-header header-shadow navik-mega-menu">
                <div class="container">
                    <div class="navik-header-container">
                        <!-- Logo -->
                        <div class="logo" data-mobile-logo="./assets/images/Logo.png" data-sticky-logo="./assets/images/Logo.png">
                            <a href="#"><img src="./assets/images/Logo.png" alt="logo"/></a>
                        </div>
                        
                        <!-- Burger menu -->
                        <div class="burger-menu">
                            <div class="line-menu line-half first-line"></div>
                            <div class="line-menu"></div>
                            <div class="line-menu line-half last-line"></div>
                        </div>

                        <!-- Navigasi Menu -->
                        <nav class="navik-menu menu-caret submenu-top-border">
                            <ul>
                                <!-- Menu Home -->
                                <li><a href="#">Home</a>
                                </li>

                                <!-- Menu About-->
                                <li><a href="#">About Us</a>
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#Gallery">Image Gallery</a></li>
                                        <li><a href="#Team">Team</a></li>
										<li><a href="#Faq">Pertanyaan</a></li>
                                    </ul>
                                </li>

                                <!-- List Menu -->
                                <li><a href="#">List Menu</a>
                                    <ul class="menus-1">
                                        <li class="tab-link" data-tab="tab-1"><a href="#tabs-content">BURGERS</a></li>
                                        <li class="tab-link" data-tab="tab-2"><a href="#tabs-content">FRIES & SIDES</a></li>
                                        <li class="tab-link" data-tab="tab-3"><a href="#tabs-content">DRINKS</a></li>
                                        <li class="tab-link" data-tab="tab-4"><a href="#tabs-content">DESSERTS</a></li>
                                    </ul>
                                </li>

                                <!-- Menu Contact -->
                                <li class="submenu-right"><a href="#">Contacts</a>
                                    <ul>
                                        <li><a href="#Location">Location</a></li>
                                        <li><a href="#Contact">Contact US</a></li>
                                    </ul>
                                </li>

                                <?php if ($this->session->userdata('user_id')): ?>
								<li class="menu-cart">
									<a href="<?php echo site_url('admin/orders'); ?>"><i class="fa fa-shopping-cart"></i></a>
								</li>
                                <?php endif; ?>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
         <!-- </header> -->
         
         <div class="content">
