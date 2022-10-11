<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<!-- 
        Awesome Template
        http://www.templatemo.com/preview/templatemo_450_awesome
        -->
		<title>AFT Antananarivo</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css">
		<link rel="stylesheet" id="custom-css2" href="/wp-content/themes/themePerso/css/custom2.css" type="text/css" media="all">
		<?php wp_head() ?>
		<?php
		  $content_text_color = get_option('content_text_color');
		  $content_link_color = get_option('content_link_color');
		?>
		<style>
		  body { background-color:  <?php echo $content_text_color; ?>; }
		  body a { background-color:  <?php echo $content_link_color; ?>; }
		</style>
	</head>
	<body id="top" >
<div id="accueil"></div>

<?php if(is_front_page()) : ?>

<span class='mask'><img src="<?= get_template_directory_uri()?>/images/Logo.png" ></span>

<span class='mask_2'><img src="<?= get_template_directory_uri()?>/images/mada.png" ></span>

<span class='mask_3'><img src="<?= get_template_directory_uri()?>/images/kisspng.png" ></span>

<?php endif ?>



		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-wave">
     	 		<div class="sk-rect1"></div>
       			<div class="sk-rect2"></div>
       			<div class="sk-rect3"></div>
      	 		<div class="sk-rect4"></div>
      			<div class="sk-rect5"></div>
     		</div>
    	</div> 
    	<!-- <div class="preloader">
			<div class="list-carre">
				<div class="carre carre_1"></div>
				<div class="carre carre_2"></div>
			</div>
			<div class="logo"><img src="logo.svg"></div>
		</div> -->
    	<!-- end preloader -->

        <!-- start header -->
		<div class="scroll-top"><a href="#accueil" title="scroll_top" > <i class="fa-solid fa-chevron-up"></i> </a></div>
		<div class="top-header">
			<div class="container">
                <div class="row align-items-center">

                    <div class="col-sm-12 col-md-6 col-lg-6 mail-phone">
						<span><a href="mailto:<?php echo get_theme_mod('themeperso_mail'); ?>" title="<?php echo get_theme_mod('themeperso_attr_title_mail'); ?>" ><?= get_theme_mod('themeperso_mail'); ?></a></span>
                        <span><?php echo get_theme_mod('themeperso_numero'); ?></span>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 ">
                        <ul class="social-icon mx-auto">
							<!--
							<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li> -->

							<?php
								foreach (my_customizer_social_media_array() as $social_item) {
									if (get_theme_mod($social_item)) {

										
										
										?>
										<li><a href="<?php echo get_theme_mod($social_item);?>" title="<?= $social_item ?>" target="_blank"><i class="fa-brands fa-<?php 
										
											if($social_item=="linkedin") $social_item.="-in";
											if($social_item=="facebook") $social_item.="-f";
											echo $social_item; 
										
										?>"></i></a></li>
					
										<?php
									}
								}
							?>
							

						</ul>
                    </div>
                </div>
            </div>
			</div>
            


            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
			  <div class="container">

			    <a class="navbar-brand" href="<?= home_url() ?>" title="Alliance fran&ccedil;aise Antananarivo"> <?php

			   $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'large' );
if ( has_custom_logo() ) {
    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" width="170px" >';
} else {
    echo  get_bloginfo('name') ;
} ?></a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
				<svg class="ham ham6" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
  <path
        class="line top"
        d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272" />
  <path
        class="line middle"
        d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272" />
  <path
        class="line bottom"
        d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272" />
</svg>
    </button>


			      <?php wp_nav_menu(array(
							'theme_location' => 'Top',
				            'container'         => 'div',
				            'container_class'   => 'collapse navbar-collapse',
				            'container_id'   => 'mynavbar',
				            'menu_class'        => 'navbar-nav ms-auto',
				            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				            'walker'            => new WP_Bootstrap_Navwalker(),
						)); ?>
			    
		  </div>
		</nav>
		
        
	<div id="viewport">
		<div id="load">
			
		

        <!-- end header -->

    	<!-- start navigation -->
		<!-- end navigation -->