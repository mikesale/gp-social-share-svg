<?php

defined( 'ABSPATH' ) or die( 'Cannot access pages directly.' );

function gp_social_options_page( $settings_pages ) {
    $settings_pages[] = array(
        'id'          => 'gp_social_settings',
        'option_name' => 'gp_social_settings',
        'menu_title'  => 'GP Social Settings',
        'parent'      => 'themes.php',
        'help_tabs' => array(
            array(
                'title'   => 'Shortcode',
                'content' => '<p>You can output the social share links using the shortcode [gp-social].</p>',
            ),
        ),
    );
    return $settings_pages;
}
add_filter( 'mb_settings_pages', 'gp_social_options_page' );

function gp_social_fields_register( $meta_boxes ) {
    // 1st Meta Box
    $meta_boxes[] = array(
        'title'     => 'Social Share Settings',
        'settings_pages' => 'gp_social_settings',

        'tabs'      => array(
            'icons' => array(
                'label' => 'Icons',
                'icon'  => 'dashicons-share',
            ),
            'colors'  => array(
                'label' => 'Colours',
                'icon'  => 'dashicons-admin-customizer',
            ),
            'settings'    => array(
                'label' => 'Settings',
                'icon'  => 'dashicons-admin-generic',
            ),
        ),

        'tab_style' => 'default',
        'tab_wrapper' => true,

        'fields'    => array(
            array(
                'name'  => 'Facebook Icon',
                'id'    => 'gp_social_facebook',
                'type'  => 'textarea',
                'std'   => default_facebook(),
                'tab'   => 'icons',
            ),// gp_social_facebook
            array(
                'name'  => 'Twitter Icon',
                'id'    => 'gp_social_twitter',
                'type'  => 'textarea',
                'std'   => default_twitter(),
                'tab'   => 'icons',
            ),// gp_social_twitter
            array(
                'name'  => 'LinkedIn Icon',
                'id'    => 'gp_social_linkedin',
                'type'  => 'textarea',
                'std'   => default_linkedin(),
                'tab'   => 'icons',
            ),// gp_social_linkedin
            array(
                'name'  => 'Google+ Icon',
                'id'    => 'gp_social_google',
                'type'  => 'textarea',
                'std'   => default_google(),
                'tab'   => 'icons',
            ),// gp_social_google
            array(
                'name'  => 'Pinterest Icon',
                'id'    => 'gp_social_pinterest',
                'type'  => 'textarea',
                'std'   => default_pinterest(),
                'tab'   => 'icons',
            ),// gp_social_pinterest
            array(
                'name'  => 'WhatsApp Icon',
                'id'    => 'gp_social_whatsapp',
                'type'  => 'textarea',
                'std'   => default_whatsapp(),
                'tab'   => 'icons',
            ),// gp_social_whatsapp
            array(
                'name'  => 'Email Icon',
                'id'    => 'gp_social_email',
                'type'  => 'textarea',
                'std'   => default_email(),
                'tab'   => 'icons',
            ),// gp_social_email
            array(
                'name' => 'Facebook Icon',
                'id'   => 'fb_color',
                'type' => 'color',
                'std'   => '#999999',
                'tab'   => 'colors',
            ),// fb_color
            array(
                'name' => 'Facebook Icon - Hover',
                'id'   => 'fb_color_hover',
                'type' => 'color',
                'std'   => '#1e73be',
                'tab'   => 'colors',
            ),// fb_color_hover
            array(
                'name' => 'Twitter Icon',
                'id'   => 'tw_color',
                'type' => 'color',
                'std'   => '#999999',
                'tab'   => 'colors',
            ),// tw_color
            array(
                'name' => 'Twitter Icon - Hover',
                'id'   => 'tw_color_hover',
                'type' => 'color',
                'std'   => '#00acee',
                'tab'   => 'colors',
            ),// tw_color_hover
            array(
                'name' => 'LinkedIn Icon',
                'id'   => 'li_color',
                'type' => 'color',
                'std'   => '#999999',
                'tab'   => 'colors',
            ),// li_color
            array(
                'name' => 'LinkedIn Icon - Hover',
                'id'   => 'li_color_hover',
                'type' => 'color',
                'std'   => '#0077b5',
                'tab'   => 'colors',
            ),// li_color_hover
            array(
                'name' => 'Google+ Icon',
                'id'   => 'gp_color',
                'type' => 'color',
                'std'   => '#999999',
                'tab'   => 'colors',
            ),// gp_color
            array(
                'name' => 'Google+ Icon - Hover',
                'id'   => 'gp_color_hover',
                'type' => 'color',
                'std'   => '#dd4b39',
                'tab'   => 'colors',
            ),// gp_color_hover
            array(
                'name' => 'Pinterest Icon',
                'id'   => 'pin_color',
                'type' => 'color',
                'std'   => '#999999',
                'tab'   => 'colors',
            ),// pin_color
            array(
                'name' => 'Pinterest Icon - Hover',
                'id'   => 'pin_color_hover',
                'type' => 'color',
                'std'   => '#c92228',
                'tab'   => 'colors',
            ),// pin_color_hover
            array(
                'name' => 'WhatsApp Icon',
                'id'   => 'wa_color',
                'type' => 'color',
                'std'   => '#999999',
                'tab'   => 'colors',
            ),// wa_color
            array(
                'name' => 'WhatsApp Icon - Hover',
                'id'   => 'wa_color_hover',
                'type' => 'color',
                'std'   => '#075e54',
                'tab'   => 'colors',
            ),// wa_color_hover
            array(
                'name' => 'Email Icon',
                'id'   => 'em_color',
                'type' => 'color',
                'std'   => '#999999',
                'tab'   => 'colors',
            ),// em_color
            array(
                'name' => 'Email Icon - Hover',
                'id'   => 'em_color_hover',
                'type' => 'color',
                'std'   => '#f1f1d4',
                'tab'   => 'colors',
            ),// em_color_hover
            array(
                'name' => 'Hook Locations',
                'id'   => 'gp_social_hook',
                'type' => 'select',
                'tab'   => 'settings',
                'options'         => array(
                    'generate_after_content'                => 'generate_after_content',
                    'generate_before_content'               => 'generate_before_content',
                    'generate_before_entry_title'           => 'generate_before_entry_title',
                    'generate_after_entry_title'            => 'generate_after_entry_title',
                    'generate_after_entry_content'          => 'generate_after_entry_content',
                    'generate_before_comments_container'    => 'generate_before_comments_container',
                    'generate_inside_comments'              => 'generate_inside_comments',
                    'generate_below_comments_title'         => 'generate_below_comments_title',
                    'generate_after_main_content'           => 'generate_after_main_content',
                    'generate_before_right_sidebar_content' => 'generate_before_right_sidebar_content',
                    'generate_after_right_sidebar_content'  => 'generate_after_right_sidebar_content',
                ),
                'multiple'        => false,
                'placeholder'     => 'Select the hook location',
                'select_all_none' => false,
            ),// gp_social_hook
        ),// fields
    );

    return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'gp_social_fields_register' );

function default_facebook() {
    $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg>';
    return $svg;
}// default facebook icon

function default_twitter() {
    $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.066 9.645c.183 4.04-2.83 8.544-8.164 8.544-1.622 0-3.131-.476-4.402-1.291 1.524.18 3.045-.244 4.252-1.189-1.256-.023-2.317-.854-2.684-1.995.451.086.895.061 1.298-.049-1.381-.278-2.335-1.522-2.304-2.853.388.215.83.344 1.301.359-1.279-.855-1.641-2.544-.889-3.835 1.416 1.738 3.533 2.881 5.92 3.001-.419-1.796.944-3.527 2.799-3.527.825 0 1.572.349 2.096.907.654-.128 1.27-.368 1.824-.697-.215.671-.67 1.233-1.263 1.589.581-.07 1.135-.224 1.649-.453-.384.578-.87 1.084-1.433 1.489z"/></svg>';
    return $svg;
}// default twitter icon

function default_linkedin() {
    $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z"/></svg>';
    return $svg;
}// default linkedin icon

function default_google() {
    $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2.917 16.083c-2.258 0-4.083-1.825-4.083-4.083s1.825-4.083 4.083-4.083c1.103 0 2.024.402 2.735 1.067l-1.107 1.068c-.304-.292-.834-.63-1.628-.63-1.394 0-2.531 1.155-2.531 2.579 0 1.424 1.138 2.579 2.531 2.579 1.616 0 2.224-1.162 2.316-1.762h-2.316v-1.4h3.855c.036.204.064.408.064.677.001 2.332-1.563 3.988-3.919 3.988zm9.917-3.5h-1.75v1.75h-1.167v-1.75h-1.75v-1.166h1.75v-1.75h1.167v1.75h1.75v1.166z"/></svg>';
    return $svg;
}// default google icon

function default_pinterest() {
    $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 19c-.721 0-1.418-.109-2.073-.312.286-.465.713-1.227.87-1.835l.437-1.664c.229.436.895.804 1.604.804 2.111 0 3.633-1.941 3.633-4.354 0-2.312-1.888-4.042-4.316-4.042-3.021 0-4.625 2.027-4.625 4.235 0 1.027.547 2.305 1.422 2.712.132.062.203.034.234-.094l.193-.793c.017-.071.009-.132-.049-.202-.288-.35-.521-.995-.521-1.597 0-1.544 1.169-3.038 3.161-3.038 1.72 0 2.924 1.172 2.924 2.848 0 1.894-.957 3.205-2.201 3.205-.687 0-1.201-.568-1.036-1.265.197-.833.58-1.73.58-2.331 0-.537-.288-.986-.886-.986-.702 0-1.268.727-1.268 1.7 0 .621.211 1.04.211 1.04s-.694 2.934-.821 3.479c-.142.605-.086 1.454-.025 2.008-2.603-1.02-4.448-3.553-4.448-6.518 0-3.866 3.135-7 7-7s7 3.134 7 7-3.135 7-7 7z"/></svg>';
    return $svg;
}// default pinterest icon

function default_whatsapp() {
    $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/></svg>';
    return $svg;
}// default whatsapp icon

function default_email() {
    $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 .02c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.99 6.98l-6.99 5.666-6.991-5.666h13.981zm.01 10h-14v-8.505l7 5.673 7-5.672v8.504z"/></svg>';
    return $svg;
}// default email icon

function social_share_filter() {

    $title = get_the_title();
    $url = urlencode( get_permalink() );
    $excerpt = wp_trim_words( get_the_content(), 40 );
    $thumbnail = get_the_post_thumbnail_url( 'full' );
    $author = get_the_author();

    $facebook = rwmb_meta( 'gp_social_facebook', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    if( $facebook ) {
        $facebook_icon = $facebook;
    } else {
        $facebook_icon = default_facebook();
    }

    $twitter = rwmb_meta( 'gp_social_twitter', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    if( $twitter ) {
        $twitter_icon = $twitter;
    } else {
        $twitter_icon = default_twitter();
    }

    $linkedin = rwmb_meta( 'gp_social_linkedin', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    if( $linkedin ) {
        $linkedin_icon = $linkedin;
    } else {
        $linkedin_icon = default_linkedin();
    }

    $google = rwmb_meta( 'gp_social_google', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    if( $google ) {
        $google_icon = $google;
    } else {
        $google_icon = default_google();
    }

    $pinterest = rwmb_meta( 'gp_social_pinterest', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    if( $pinterest ) {
        $pinterest_icon = $pinterest;
    } else {
        $pinterest_icon = default_pinterest();
    }

    $whatsapp = rwmb_meta( 'gp_social_whatsapp', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    if( $whatsapp ) {
        $whatsapp_icon = $whatsapp;
    } else {
        $whatsapp_icon = default_whatsapp();
    }

    $email = rwmb_meta( 'gp_social_email', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    if( $email ) {
        $email_icon = $email;
    } else {
        $email_icon = default_email();
    }
    
    if ( !function_exists( 'gp_social_email_body' ) ) {
        $email_body = __('Check out this awesome article by', 'gp-social');
        $email_body .= ' ' . $author . '. ';
        $email_body .= $url;
    } else {
        $email_body = gp_social_email_body();
    }

    $social_links = array(

        '<a href="https://www.facebook.com/sharer/sharer.php?u=' . $url . '" onclick="return false" class="fb-share" title="' . __( 'Share this post!', 'gp-social' ) . '">' . $facebook_icon . '</a>',
        '<a href="https://twitter.com/share?url=' . $url . '&text=' . $excerpt . '" class="tw-share" title="' . __( 'Tweet this post!', 'gp-social' ) . '">' . $twitter_icon . '</a>',
        '<a href="http://www.linkedin.com/shareArticle?url=' . $url . '&title=' . $title . '" class="li-share" title="' . __( 'Share this post!', 'gp-social' ) . '">' . $linkedin_icon . '</a>',
        '<a href="https://plus.google.com/share?url=' . $url . '" class="gp-share" title="' . __( 'Share this post!', 'gp-social' ) . '">' . $google_icon . '</a>',
        '<a href="https://pinterest.com/pin/create/bookmarklet/?media=' . $thumbnail . '&url=' . $url . '&description=' . $title . '" class="pt-share" title="' . __( 'Pin this post!', 'gp-social' ) . '">' . $pinterest_icon . '</a>',
        '<a href="whatsapp://send?text=' . $url . '" class="wa-share" data-action="share/whatsapp/share" title="' . __( 'Share this post!', 'gp-social' ) . '">' . $whatsapp_icon . '</a>',
        '<a href="mailto:?Subject=' .  $title . '&Body=' . $email_body . '" target="_top" class="em-share" title="' . __( 'Email this post!', 'gp-social' ) . '">' . $email_icon . '</a>',

    );

    $list = '<ul id="gp-social-share">';

    // Users can now add additional icons as they require them (example in readme.md)
    if( has_filter('add_social_icons') ) {

        $social_links = apply_filters( 'add_social_icons', $social_links );

    }

    // Create the social list
    foreach( $social_links as $social_link ) :

        $list .= '<li>' . $social_link . '</li>';

    endforeach;

    $list .= '</ul>';

    return $list;
}// social_share_filter

function register_styles_scripts() {

    wp_register_style( 'social-share-css', plugins_url( '/css/gp-social-share.css', __FILE__ ), array(), 'all' );
        
    wp_register_script( 'social-share-js', plugin_dir_url( __FILE__ ) . 'js/gp-social-share.js', array('jquery'), '1.0' );

}
add_action( 'wp_enqueue_scripts', 'register_styles_scripts' );

function add_social_icons() {

    // Check to ensure we are on a single post
    if ( is_single() ) {

        // Enqueue base style now we are in the hook
        wp_enqueue_style( 'social-share-css' );

        // Enqueue base script now we are in the hook
        wp_enqueue_script( 'social-share-js' );

        // Echo out the social icons
        echo social_share_filter();

    }// is_single

}// add_social_icons

function social_shortcode() {
    wp_enqueue_style( 'social-share-css' );
    wp_enqueue_script( 'social-share-js' );
    return social_share_filter();
}
add_shortcode( 'gp-social', 'social_shortcode' );