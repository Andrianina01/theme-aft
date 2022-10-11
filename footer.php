  <!-- start copyright -->
        <footer id="footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-xl-4 text-center">
                    <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?> <img src=<?= $image[0] ?> alt="Alliance française Antananarivo" class="img-fluid">

                    </div>
                    <div class="col-lg-8 col-xl-8">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                    </div>
                </div>
                <div class="row  footer-bottom">
                    <div class="col-lg-6 col-xl-4">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                    <?php dynamic_sidebar( 'footer-4' ); ?>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                    <?php dynamic_sidebar( 'footer-5' ); ?>
                    </div>
                </div>
            </div>
            <div id="copyright" class="text-center"> <p class="text-center" >2022 © Alliance française d'Antananarivo</p></div>
        </footer>

        </div>
        </div>
        <!-- end copyright -->
       <?php wp_footer() ?>
	</body>
</html>
