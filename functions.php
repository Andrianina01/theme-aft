<?php 

	

	require get_template_directory() . '/inc/control-tinymce.php';

function theme_scripts() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	
	

	// Print styles.
	wp_enqueue_style( 'bootstrap 5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css', array() );

	wp_enqueue_style( 'custom-print-style', get_template_directory_uri() . '/css/animate.min.css', array() );
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/custom.css', array() );
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fonts/fontawesome/css/all.min.css', array() );
		wp_enqueue_style( 'slick', get_template_directory_uri() . '/js/slick/slick.css', array() );
		wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/js/slick/slick-theme.css', array() );
		




		// Responsive embeds script.
		wp_enqueue_script(
			'custom-custom-one-responsive-embeds-script',
			get_template_directory_uri() . '/js/jquery-3.6.0.js',
			true
		); 
		// Register the IE11 polyfill file.
		wp_enqueue_script(
			'bootstrap_js',
			 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js',
			array(),
			true
		);

		wp_enqueue_script(
			'custom-one-ie11-gsap',
			get_template_directory_uri() . '/js/gsap/gsap.min.js',
			array(),
			true
		);
		wp_enqueue_script(
			'custom-one-ie11-gsap-3',
			get_template_directory_uri() . '/js/gsap/ScrollTrigger.min.js',
			array(),
			true
		);

		wp_enqueue_script(
			'custom-one-ie11-gsap-1',
			get_template_directory_uri() . '/js/gsap/scrollsmooth.js',
			array(),
			true
		);
		wp_enqueue_script(
			'custom-one-ie11-gsap-6',
			get_template_directory_uri() . '/js/gsap/ScrollToPlugin.min.js',
			array(),
			true
		);


		wp_enqueue_script(
			'custom-custom-scriptnn',
			get_template_directory_uri() . '/js/custom.js',
			array(),
			true
		);
		wp_enqueue_script(
			'fontawesome',
			get_template_directory_uri() . '/fonts/fontawesome/js/all.min.js',
			array(),
			true
		);
		wp_enqueue_script(
			'slick',
			get_template_directory_uri() . '/js/slick/slick.js',
			array(),
			true
		);
		
}
	
	add_action( 'wp_enqueue_scripts', 'theme_scripts' ); 


	 function themeperso_customize_register($wp_customize){

	 	 /**************************************************/
	 	$wp_customize->add_section('themeperso_color_scheme', array(
	        'title'    => __('contact haut', 'themeperso'),
	        //'description' => '',
	        'priority' => 10,
    	));
	 	/*numero*/
	 	$wp_customize->add_setting('themeperso_numero', array(
        'default'        => '0340505205',
        'capability'     => 'edit_theme_options',
        //'type'           => 'text',
	    ));
	  
	    $wp_customize->add_control('themeperso_numero', array(
	        'label'      => __('telephone', 'themename'),
	        'section'    => 'themeperso_color_scheme',
	        //'settings'   => 'themeperso_theme_options',
	    ));
	    /*mail*/
	    $wp_customize->add_setting('themeperso_mail', array(
        'default'        => 'value@gmail.com',
        'capability'     => 'edit_theme_options',
        //'type'           => 'text',
	    ));
	  
	    $wp_customize->add_control('themeperso_mail', array(
	        'label'      => __('mail', 'themename'),
	        'section'    => 'themeperso_color_scheme',
	        //'settings'   => 'themeperso_theme_options',
	    ));
		/*title*/
	    $wp_customize->add_setting('themeperso_attr_title_mail', array(
			'default'        => 'votre titre ici',
			'capability'     => 'edit_theme_options',
			//'type'           => 'text',
			));
		  
			$wp_customize->add_control('themeperso_attr_title_mail', array(
				'label'      => __("title du mail", 'themename'),
				'section'    => 'themeperso_color_scheme',
				//'settings'   => 'themeperso_theme_options',
			));
	    /**************************************************/


	    


    	}


		/*-----------------------------------------------------------*/



	 add_action('customize_register', 'themeperso_customize_register');

register_nav_menus(array('Top' => 'Navigation principale'));

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

function remove_admin_bar() {
  show_admin_bar(false);
}
/* add_action('after_setup_theme', 'remove_admin_bar');
	 */
add_theme_support( 'custom-logo' );

function AFT_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer col-1', 'AFT' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'AFT' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer col-2', 'AFT' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'AFT' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer col-1', 'AFT' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'AFT' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer col-2', 'AFT' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'AFT' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer col-3', 'AFT' ),
			'id'            => 'footer-5',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'AFT' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}
add_action( 'widgets_init', 'AFT_widgets_init' );

function slider(){

	
	ob_start();
	?>

	<?php if( get_field('home_slider') ): ?>
		<div class="slide-fade slider">
		<?php while( the_repeater_field('home_slider') ): 
			$image = get_sub_field('image');
			?>

			<div class="slide-item" style="background-image:url(<?= $image['url']; ?>);">
				<article>
				<?= get_sub_field('texte') ?>
				</article>
			</div>
		<?php endwhile; ?>
		</div>
	 <?php endif; ?>
	<!-- <div class="slide-fade slider">
		<div class="slide-item" style="background-image:url('http://www.afantananarivo.mg/wp-content/uploads/2022/09/1519800848341.jpg');">
			<article>
				<h1>Lorem ipsum dolor sit amet consectetur, adipisicing el</h1>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas dignissimos quaerat fugit. Minima, porro,
				 mollitia sint sapiente adipisci magni laborum accusantium repellendus suscipit, qui molestias. Distinctio iusto cum nesciunt odit.</p>
				 <a href="#" class="wp-block-button__link">CALL TO ACTION</a>
			</article>
		</div>
		<div class="slide-item" style="background-image:url('http://www.afantananarivo.mg/wp-content/uploads/2022/09/af-vancouver.jpg');">
			<article>
				<h1>Lorem ipsum dolor sit amet consectetur, adipisicing el</h1>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas dignissimos quaerat fugit. Minima, porro,
				 mollitia sint sapiente adipisci magni laborum accusantium repellendus suscipit, qui molestias. Distinctio iusto cum nesciunt odit.</p>
			</article>
		</div>
	</div> -->

	
	<?php
	$html = ob_get_clean();
	return $html;
}
add_shortcode( 'slider_banner','slider' );

function agenda(){
	ob_start();
	?>

		<div class="row">
			
	
			<div class="col-lg-6 col-xl-3 gs_reveal">
				<article>
					<div class="image">
					<img src="https://www.afantananarivo.mg/wp-content/uploads/2022/09/1519800848341-1-1024x543.jpg" alt="">
					</div>
					<h4>modus mode</h4>
					<ul>
						<li>Du 22 au  26 aout</li>
						<li><b>lieu :</b> alliance Française</li>
					</ul>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt repellendus voluptatibus</p>
						<a href="#" class="wp-block-button__link">En savoir +</a>
				</article>
			</div>

			<div class="col-lg-6 col-xl-3 gs_reveal">
			<article>
					<div class="image">
					<img src="https://www.afantananarivo.mg/wp-content/uploads/2022/09/1519800848341-1-1024x543.jpg" alt="">
					</div>
					<h4>modus mode</h4>
					<ul>
						<li>Du 22 au  26 aout</li>
						<li><b>lieu :</b> alliance Française</li>
					</ul>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt repellendus voluptatibus</p>
						<a href="#" class="wp-block-button__link">En savoir +</a>
				</article>
			</div>
			<div class="col-lg-6 col-xl-3 gs_reveal">
			<article>
				<div class="image">
					<img src="https://www.afantananarivo.mg/wp-content/uploads/2022/09/1519800848341-1-1024x543.jpg" alt="">
				</div>
					<h4>modus mode</h4>
					<ul>
						<li>Du 22 au  26 aout</li>
						<li><b>lieu :</b> alliance Française</li>
					</ul>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt repellendus voluptatibus</p>
						<a href="#" class="wp-block-button__link">En savoir +</a>
				</article>
			</div>
		</div>
	
	<?php
	$html = ob_get_clean();
	return $html;
}
add_shortcode( 'bloc_agenda','agenda' );



// Remove author's login from comments
function remove_comment_author_class( $classes ) {
	foreach( $classes as $key => $class )
		if(strstr($class, 'comment-author-' ))
		unset( $classes[$key] );
		return $classes;
}
add_filter( 'comment_class' , 'remove_comment_author_class' );

// Remove login error messages
function remove_login_error_msg() {
	return 'Curious...?';
}
add_filter( 'login_errors', 'remove_login_error_msg' );

// Disable XMLRPC
add_filter( 'xmlrpc_enabled', '__return_false' );
remove_action('wp_head', 'rsd_link');
add_filter('bloginfo_url', function($output, $property){return ($property == 'pingback_url') ? null : $output; }, 11, 2);
add_filter( 'wp_headers', function($headers) { unset( $headers['X-Pingback'] ); return $headers; });
// Suppression de la version de WordPress
remove_action('wp_head', 'wp_generator');
					
// Suppression version flux RSS
function remove_version_wp() {
	 return '';
}
add_filter("the_generator", "remove_version_wp");
				
// Suppression des versions des fichiers css/js inclus
function remove_ver_css_js( $src ) {
	 if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
		$src = remove_query_arg( 'ver', $src );
		return $src;
}
add_filter( 'style_loader_src', 'remove_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'remove_ver_css_js', 9999 );

require get_template_directory() . '/customizer.php';
