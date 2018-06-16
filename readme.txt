=== GP Social Share ===
Contributors: WestCoastDigital
Tags: social, share, svg
Requires at least: 4.6
Tested up to: 4.9.6
Stable tag: 1.0
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Add social share icons to single posts within GeneratePress Theme

== Description ==

This plugin hooks into the generate_after_content hook to append social share icons to the single post page by default.

It uses the if_single() WordPress hook to ensure only fires on all single posts.

Configured shared content:

Image = post featured Image - full url
Title = post title
Content = the first 40 words of the content
URL = the post permalink

== Social Media Channels ==
These are the social channels currently supported by the plugin
* Facebook
* Twitter
* Google+
* Pinterest
* LinkedIn
* Email

== Installation ==

Ensure GeneratePress is your current active theme


1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Appearance->GP Social Share screen to add your own SVG code for the icons and choose your hook placement

== Frequently Asked Questions ==

= Can I use outside of hooks =

You can use the following shortcode
	[gp-social]

= Nothing happens when I activate the plugin =

Ensure you have the GeneratePress Theme active.

= Do I have to use the premium version of the GeneratePress Theme? =

No. This plugin works with the theme and does not require the premium plugin.

= What if the hook I want to use isnt in the option, want it in multiple locations or want to apply some condtional logic? =

You can use the following action to display the social share options whenever/wherever you like, just change out the_hook_you_require for the one you want to use

	add_action( 'the_hook_you_require','wcdgpSocialShare::add_social_icons' );


= Can I display the amount of times my post has been shared? =

No. This plugin does not use any API's or receive any data from the shared content. It is intentionally built to be light weight.

= Can I change the email body? =

Yes. Just add a function called gp_social_email_body which returns your body content.

= Can I use the media uploader to upload SVG icons? =

No. WordPress has SVG disabled by default due to potential security issues, the decision was made to support this and stick to inline SVG code.

== Screenshots ==
1. Plugin settings backend

== Changelog ==

= 1.0.4 =
Fixed bug with shortcode
Added colour styling support
Improved backend UI

= 1.0.3 =
Added shortcode support

= 1.0.2 =
Added support for custom email body

= 1.0.1 =
Wrapped functions in class for conflict support
Updated readme
Added WhatsApp support
Added hook option to display icons
Converted jQuery to vanilla JS

= 1.0 =
This version allows you to paste in your own SVG icon code

= 0.5 =
* Initial Build

== Upgrade Notice ==

= 1.0.3 =
Upgrade in enable shortcode support

= 1.0.2 =
Upgrade in order to be able to customise your email body text

= 1.0 =
Upgrade in order to use your own SVG icon code

== Customisations ==

If you want to find custom icons, I recommend you check out [https://iconmonstr.com](https://iconmonstr.com/)

To use Iconmonstr SVG code
1. Search for your required icon
1. Click on the icon you like
1. Ensure SVG is selected
1. Agree to the license conditions
1. Click on Embed
1. Ensure Inline is selected
1. Highlight the displayed SVG code
1. Copy and paste the code into the relevant icon section
1. Save Changes at the bottom of the page

You can add more sharing using the following function and modifying it as required


	function add_extra_icons($social_links) {

    	$title = get_the_title();
    	$url = urlencode( get_permalink() );
    	$excerpt = wp_trim_words( get_the_content(), 40 );
    	$thumbnail = get_the_post_thumbnail_url( 'full' );
    	$author = get_the_author();
		// Swap your svg code
    	$icon = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M14.238 15.348c.085.084.085.221 0 .306-.465.462-1.194.687-2.231.687l-.008-.002-.008.002c-1.036 0-1.766-.225-2.231-.688-.085-.084-.085-.221 0-.305.084-.084.222-.084.307 0 .379.377 1.008.561 1.924.561l.008.002.008-.002c.915 0 1.544-.184 1.924-.561.085-.084.223-.084.307 0zm-3.44-2.418c0-.507-.414-.919-.922-.919-.509 0-.923.412-.923.919 0 .506.414.918.923.918.508.001.922-.411.922-.918zm13.202-.93c0 6.627-5.373 12-12 12s-12-5.373-12-12 5.373-12 12-12 12 5.373 12 12zm-5-.129c0-.851-.695-1.543-1.55-1.543-.417 0-.795.167-1.074.435-1.056-.695-2.485-1.137-4.066-1.194l.865-2.724 2.343.549-.003.034c0 .696.569 1.262 1.268 1.262.699 0 1.267-.566 1.267-1.262s-.568-1.262-1.267-1.262c-.537 0-.994.335-1.179.804l-2.525-.592c-.11-.027-.223.037-.257.145l-.965 3.038c-1.656.02-3.155.466-4.258 1.181-.277-.255-.644-.415-1.05-.415-.854.001-1.549.693-1.549 1.544 0 .566.311 1.056.768 1.325-.03.164-.05.331-.05.5 0 2.281 2.805 4.137 6.253 4.137s6.253-1.856 6.253-4.137c0-.16-.017-.317-.044-.472.486-.261.82-.766.82-1.353zm-4.872.141c-.509 0-.922.412-.922.919 0 .506.414.918.922.918s.922-.412.922-.918c0-.507-.413-.919-.922-.919z"/></svg>';
		$extra_icons = array(
			'<a href="https://reddit.com/submit?url={' . $url . '}&title={' . $title . '}" class="add-share" title="' . __( 'Add this post!', 'gp-social' ) . '">' . $icon . '</a>',
		);

		// combine the two arrays
		$social_links = array_merge($extra_icons, $social_links);
 
		return $social_links;
	}
	add_filter('add_social_icons', 'add_extra_icons');
