<?php

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function aft_customize_register( $wp_customize ) {
	
    /**
     * Add custom active callback.
     * @link http://ottopress.com/2015/whats-new-with-the-customizer/
     */
    function callback_sub_page() {
        return ! is_front_page();
    }

    /**
     * Add settings to create various social media text areas.
     */
    $wp_customize->add_section( 'my_social_settings', array(
        'title'       => __( 'aft Social Info', 'text-domain' ),
        'description' => 'Paste url for social networks',
        'priority'    => 35,
    ) );


    $social_sites = my_customizer_social_media_array();
    $priority     = 1;

    foreach ( $social_sites as $social_site ) {

        $wp_customize->add_setting( "$social_site", array(
            'sanitize_callback' => 'esc_url_raw',
            //'transport'         => 'postMessage'
        ) );

        $wp_customize->add_control( $social_site, array(
            'label'    => __( "$social_site:", 'text-domain' ),
            'section'  => 'my_social_settings',
            'type'     => 'text',
            'priority' => $priority,
        ) );

        $priority = $priority + 1;
    }

}
add_action( 'customize_register', 'aft_customize_register' );

function my_customizer_social_media_array()
{
    $social_sites = [
        'linkedin',
        'instagram',
        'facebook',
        'twitter',
        'tiktok',
        'youtube',
        //'google-plus',
        //'apple',
        //'flickr',
        //'pinterest',
    ];
    return $social_sites;
}
