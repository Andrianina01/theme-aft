<?php 

/**
 * Template name: Page custom
*/

?>
<?php get_header() ?>
    	<section id="home" style="background-image: url(<?= get_theme_mod('image_upload_test') ?>);">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-offset-2 col-md-8">
    					<h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s"><?= get_theme_mod('themeperso_titre') ?><span><?= get_theme_mod("themeperso_titre_blue") ?></span></h1>
    					<div class="element">
                            <?= get_theme_mod('infos_description') ?>
                        </div>
    					<a data-scroll href="<?= get_theme_mod("themeperso_btn_link") ?>" class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">GET STARTED</a>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end home -->

        <iframe src="https://www.cosmetiquesnaturels.ch/fr/identite-visuelle/2460-logo.html"></iframe>

    	<!-- start about -->
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">WE ARE <span>AWESOME</span></h2>
    				</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-mobile"></i>
								</div>
								<h3 class="media-heading">FULLY RESPONSIVE</h3>
							</div>
							<div class="media-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-comment-o"></i>
								</div>
								<h3 class="media-heading">FREE SUPPORT</h3>
							</div>
							<div class="media-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-html5"></i>
								</div>
								<h3 class="media-heading">HTML5 &AMP; CSS3</h3>
							</div>
							<div class="media-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end about -->

    	<!-- start team -->
    	<section id="team">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>AWESOME</span> TEAM</h2>
    				</div>
                    <?php 
                        $args = array(
                            'post_type' => 'personnel',
                            'posts_per_page' => 3,
                        );

                        // 2. On exécute la WP Query
                        $my_query = new WP_Query( $args );

                        // 3. On lance la boucle !
                        if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
                          

                     ?>

    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" id="<?= get_the_ID(); ?>" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">

    						<img src="<?= get_the_post_thumbnail_url() ?>" class="img-responsive" alt="team img 1" style="width: 100%;height: 175px;object-fit: cover;">
    							<div class="team-des" style="min-height: 205px;">
    								<h4><?= the_title(); ?></h4>
    								<span> 
                                        <?php 
                                               $terms = get_the_terms( $post->ID, 'poste' );
                                                foreach($terms as $term){
                                                    ?>
                                                    <a href="<?= get_term_link($term) ?>"><?php  echo $term->name; ?></a>
                                                    <?php
                                                }
                                               ?>
                                     </span>
                                     <?= the_excerpt(); ?>
    							</div>
    					</div>
    				</div>

                    <?php endwhile; endif;  wp_reset_postdata();?>
    			</div>
    		</div>
    	</section>
    	<!-- end team -->

    	<!-- start service -->
    	<section id="service">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">OUR <span>AWESOME</span> THINGS</h2>
    				</div>
    				<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    					<i class="fa fa-laptop"></i>
    					<h4>Web Design</h4>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
    				</div>
    				<div class="col-md-4 active wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
    					<i class="fa fa-cloud"></i>
    					<h4>Cloud Computing</h4>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
    				</div>
    				<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    					<i class="fa fa-cog"></i>
    					<h4>UX Design</h4>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end servie -->

    	<!-- start portfolio -->
    	<section id="portfolio">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>AWESOME</span> PORTFOLIO</h2>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
    					   <img src="<?= get_template_directory_uri()?>/images/portfolio-img1.jpg" class="img-responsive" alt="portfolio img 1">
                                <div class="portfolio-overlay">
                                    <h4>Project One</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="<?= get_template_directory_uri()?>/images/portfolio-img2.jpg" class="img-responsive" alt="portfolio img 2">
                                <div class="portfolio-overlay">
                                    <h4>Project Two</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="<?= get_template_directory_uri()?>/images/portfolio-img3.jpg" class="img-responsive" alt="portfolio img 3">
                                <div class="portfolio-overlay">
                                    <h4>Project Three</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="<?= get_template_directory_uri()?>/images/portfolio-img4.jpg" class="img-responsive" alt="portfolio img 4">
                                <div class="portfolio-overlay">
                                    <h4>Project Four</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="<?= get_template_directory_uri()?>/images/portfolio-img3.jpg" class="img-responsive" alt="portfolio img 3">
                                <div class="portfolio-overlay">
                                    <h4>Project Five</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="<?= get_template_directory_uri()?>/images/portfolio-img4.jpg" class="img-responsive" alt="portfolio img 4">
                                <div class="portfolio-overlay">
                                    <h4>Project Six</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="<?= get_template_directory_uri()?>/images/portfolio-img1.jpg" class="img-responsive" alt="portfolio img 1">
                                <div class="portfolio-overlay">
                                    <h4>Project Seven</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="<?= get_template_directory_uri()?>/images/portfolio-img2.jpg" class="img-responsive" alt="portfolio img 2">
                                <div class="portfolio-overlay">
                                    <h4>Project Eight</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
    			</div>
    		</div>
    	</section>
    	<!-- end portfolio -->

    	<!-- start contact -->
    	<section id="contact">
    		<div class="container">
    			<div class="row">
                    <?= do_shortcode('[wpmem_profile]') ?>
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">CONTACT <span>AWESOME</span></h2>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
    					<form action="#" method="post">
    						<label>NAME</label>
    						<input name="fullname" type="text" class="form-control" id="fullname">
   						  	
                            <label>EMAIL</label>
    						<input name="email" type="email" class="form-control" id="email">
   						  	
                            <label>MESSAGE</label>
    						<textarea name="message" rows="4" class="form-control" id="message"></textarea>
    						
                            <input type="submit" class="form-control">
    					</form>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
    					<address>
    						<p class="address-title">OUR ADDRESS</p>
    						<span>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</span>
    						<p><i class="fa fa-phone"></i> +91 94884 87853</p>
    						<p><i class="fa fa-envelope-o"></i> giridesigns5@gmail.com</p>
    						<p><i class="fa fa-map-marker"></i> 50, Thiruvoodal Street, Thiruvannamalai - 606 601.</p>
    					</address>
    					<ul class="social-icon">
    						<li><h4>WE ARE SOCIAL</h4></li>
    						<li><a href="#" class="fa fa-facebook"></a></li>
    						<li><a href="#" class="fa fa-twitter"></a></li>
    						<li><a href="https://www.youtube.com/channel/UC4yzoGuKkCL_8FzI-B-x83A" class="fa fa-youtube"></a></li>
    					</ul>
    				</div>
                    <div class="row">
                        <div class="col-md-12 form" style="background-color: #fff!important;">
                            <?= do_shortcode('[wpmem_form login]') ?>
                            <?= do_shortcode('[wpmem_form register]') ?>
                            <!-- <?= do_shortcode('[wpmem_form user_edit]') ?>
                            <?= do_shortcode('[wpmem_form forgot_username]') ?>
                            <?= do_shortcode('[wpmem_ul]') ?> -->
                        </div>
                    </div>
    			</div>
    		</div>
    	</section>

    	<!-- end contact -->
<?php 
get_footer()

 ?>