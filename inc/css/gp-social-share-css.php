<?php

defined( 'ABSPATH' ) or die( 'Cannot access pages directly.' );

function gp_social_css() {
    $fb_color = rwmb_meta( 'fb_color', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    $fb_color_hover = rwmb_meta( 'fb_color_hover', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    $tw_color = rwmb_meta( 'tw_color', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    $tw_color_hover = rwmb_meta( 'tw_color_hover', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    $li_color = rwmb_meta( 'li_color', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    $li_color_hover = rwmb_meta( 'li_color_hover', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    $pin_color = rwmb_meta( 'pin_color', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    $pin_color_hover = rwmb_meta( 'pin_color_hover', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    $gp_color = rwmb_meta( 'gp_color', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    $gp_color_hover = rwmb_meta( 'gp_color_hover', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    $em_color = rwmb_meta( 'em_color', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    $em_color_hover = rwmb_meta( 'em_color_hover', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    $wa_color = rwmb_meta( 'wa_color', array( 'object_type' => 'setting' ), 'gp_social_settings' );
    $wa_color_hover = rwmb_meta( 'wa_color_hover', array( 'object_type' => 'setting' ), 'gp_social_settings' );

    $custom_css = "
        #gp-social-share a.fb-share svg {
            fill: {$fb_color};
        }
        #gp-social-share a.fb-share:hover svg {
            fill: {$fb_color_hover};
        }
        #gp-social-share a.tw-share svg {
            fill: {$tw_color};
        }
        #gp-social-share a.tw-share:hover svg {
            fill: {$tw_color_hover};
        }
        #gp-social-share a.li-share svg {
            fill: {$li_color};
        }
        #gp-social-share a.li-share:hover svg {
            fill: {$li_color_hover};
        }
        #gp-social-share a.pt-share svg {
            fill: {$pin_color};
        }
        #gp-social-share a.pt-share:hover svg {
            fill: {$pin_color_hover};
        }
        #gp-social-share a.gp-share svg {
            fill: {$gp_color};
        }
        #gp-social-share a.gp-share:hover svg {
            fill: {$gp_color_hover};
        }
        #gp-social-share a.em-share svg {
            fill: {$em_color};
        }
        #gp-social-share a.em-share:hover svg {
            fill: {$em_color_hover};
        }
        #gp-social-share a.wa-share svg {
            fill: {$wa_color};
        }
        #gp-social-share a.wa-share:hover svg {
            fill: {$wa_color_hover};
        }
    ";
    wp_add_inline_style( 'social-share-css', $custom_css );
}// gp_social_css
add_action( 'wp_enqueue_scripts', 'gp_social_css' );