<?php

// Custom theme
// =========================================================================================
function artskory_customize_register($wp_customize) {

	// Theme logo
	// =====================================================================================
		add_theme_support('custom-logo', array(
			'flex-width' => 'auto'
		));

	// Custom cookies
	// =====================================================================================
		$wp_customize->add_section('cookies', array(
			'title' => __("Cookies choice", "artskory"),
			'priority' => '20'
		));

		// 	Setting Message
			$wp_customize->add_setting('message', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'message', array(
				'label' => __("Message", "artskory"),
				'section' => 'cookies',
			)));

		// 	Setting validation
			$wp_customize->add_setting('validation', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'validation', array(
				'label' => __("Validation", "artskory"),
				'section' => 'cookies',
			)));

		// 	Setting more
			$wp_customize->add_setting('More', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'More', array(
				'label' => __("Texte En savoir plus", "artskory"),
				'section' => 'cookies',
			)));

		// Frame color
			$wp_customize->add_setting('frame_color', array(
				'default' => '#fff',
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
				'body_background_color', array(
					'label' => __("Couleur d’encadré", 'artskory'),
					'section' => 'cookies',
					'settings' => 'frame_color'
			)));

		// Glow color
			$wp_customize->add_setting('glow_color', array(
				'default' => '#888',
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
				'glow_color', array(
					'label' => __("Couleur de lueur", 'artskory'),
					'section' => 'cookies',
					'settings' => 'glow_color'
			)));

		// Background color
			$wp_customize->add_setting('background_color_cookie', array(
				'default' => '#143444',
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
				'background_color_cookie', array(
					'label' => __("Couleur de lueur", 'artskory'),
					'section' => 'cookies',
					'settings' => 'background_color_cookie'
			)));

		// Legal link
			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'legal_link', array(
				'label' => __("Mentions Légales URL", "artskory"),
				'section' => 'cookies',
				'settings' => 'legal_link'
			)));

	// Background video
	// =====================================================================================
		$wp_customize->add_section('movie', array(
			'title' => __("Background video", 'artskory'),
			'priority' => '30'
		));

			$wp_customize->add_setting('video_1', array(
			    'transport' => 'refresh'
			));

		// Video 1
			$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'video_1', array(
				'section' => 'movie',
				'label' => 'Video 1',
				'mime_type' => 'video'
			)));

		// Video 2
			$wp_customize->add_setting('video_2', array(
			    'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'video_2', array(
				'section' => 'movie',
				'label' => 'Video 2',
				'mime_type' => 'video'
			)));

		// Video 3
			$wp_customize->add_setting('video_3', array(
			    'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'video_3', array(
				'section' => 'movie',
				'label' => 'Video 3',
				'mime_type' => 'video'
			)));

	// Custom video text
	// =====================================================================================
		$wp_customize->add_section('title', array(
			'title' => __("Text vidéo", "artskory"),
			'priority' => '40'
		));

		// Title h1
			$wp_customize->add_setting('setting_title_h1', array(
				'default' => __("Changer ce texte", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'title_h1_customization', array(
				'label' => __("Titre", "artskory"),
				'section' => 'title',
				'settings' => 'setting_title_h1'
			)));

		// Title h2
			$wp_customize->add_setting('setting_title_h2', array(
				'default' => __("Changer ce texte", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'title_h2_customization', array(
				'label' => __("Titre", "artskory"),
				'section' => 'title',
				'settings' => 'setting_title_h2'
			)));

		// Paragraph
			$wp_customize->add_setting('setting_paragraph', array(
				'default' => __("Changer ce texte", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'paragraph_customization', array(
				'label' => __("Paragraphe", "artskory"),
				'section' => 'title',
				'settings' => 'setting_paragraph'
			)));

		// Button name
			$wp_customize->add_setting('setting_button', array(
				'default' => __("Changer ce texte", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'button_customization', array(
				'label' => __("Boutton", "artskory"),
				'section' => 'title',
				'settings' => 'setting_button'
			)));

		// Button link
			$wp_customize->add_setting('setting_link', array(
				'default' => __("Ajouter l'url du lien", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'link_customization', array(
				'label' => __("URL", "artskory"),
				'section' => 'title',
				'settings' => 'setting_link'
			)));

	// Website color
	// =====================================================================================
		$wp_customize->add_section('bg_color', array(
			'title' => __("Couleurs", "artskory"),
			'priority' => '50'
		));

		// Main body
			$wp_customize->add_setting('body_bg', array(
				'default' => '#fff',
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
				'body_background_color', array(
					'label' => __("Couleur d’arrière-plan", 'artskory'),
					'section' => 'bg_color',
					'settings' => 'body_bg'
			)));

		// Section
			$wp_customize->add_setting('project_designs_bg', array(
				'default' => '#fafafa',
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
				'project_designs_background_color', array(
					'label' => __("Couleur section", 'artskory'),
					'section' => 'bg_color',
					'settings' => 'project_designs_bg'
			)));

		// Main footer
			$wp_customize->add_setting('footer_bg', array(
				'default' => '#143444',
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
				'footer_background_color', array(
					'label' => __("Couleur pied de page", 'artskory'),
					'section' => 'bg_color',
					'settings' => 'footer_bg'
			)));

		// Link
			$wp_customize->add_setting('link_color', array(
				'default' => '#32A8DF',
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
				'link_color', array(
					'label' => __("Couleur des liens", 'artskory'),
					'section' => 'bg_color',
					'settings' => 'link_color'
			)));

		// Body color
			$wp_customize->add_setting('body_color', array(
				'default' => '#333',
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
				'body_color', array(
					'label' => __("Couleur texte courant", 'artskory'),
					'section' => 'bg_color',
					'settings' => 'body_color'
			)));

		// Background menu
			$wp_customize->add_setting('background_menu', array(
				'default' => '#2E2E2E',
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
				'background_menu', array(
					'label' => __("Couleur du menu", 'artskory'),
					'section' => 'bg_color',
					'settings' => 'background_menu'
			)));

		// Color selection
			$wp_customize->add_setting('color_selection', array(
				'default' => '#00c6ff',
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
				'color_selection', array(
					'label' => __("Couleur de selection", 'artskory'),
					'section' => 'bg_color',
					'settings' => 'color_selection'
			)));

	// Footer Bottom
	// =====================================================================================
			$wp_customize->add_section('footer', array(
				'title' => __("Footer", "artskory"),
				'priority' => '60'
			));

		// Title website
			$wp_customize->add_setting('website_title', array(
				'default' => __("Nom du site", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'website_title', array(
				'label' => __("Nom du site", "artskory"),
				'section' => 'footer',
			)));

		// Website URL
			$wp_customize->add_setting('website_link', array(
				'default' => __("Ajouter l'url du lien", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'website_link', array(
				'label' => __("URL du site", "artskory"),
				'section' => 'footer',
				'settings' => 'website_link'
			)));

		// Footer text
			$wp_customize->add_setting('footer_text', array(
				'default' => __("Text du bas de page", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_text', array(
				'label' => __("Text du bas de page", "artskory"),
				'section' => 'footer',
				'settings' => 'footer_text'
			)));

		// Legal link
			$wp_customize->add_setting('legal_link', array(
				'default' => __("Ajouter l'url du lien", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'legal_link', array(
				'label' => __("Mentions Légales URL", "artskory"),
				'section' => 'footer',
				'settings' => 'legal_link'
			)));

	// Custom social
	// =====================================================================================
		$wp_customize->add_section('social_title', array(
			'title' => __("Réseaux sociaux", "artskory"),
			'priority' => '70'
		));

		// Facebook
			$wp_customize->add_setting('facebook_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'facebook_customization', array(
				'label' => __("Facebook URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'facebook_link'
			)));

		// Linkedin
			$wp_customize->add_setting('linkedin_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'linkedin_customization', array(
				'label' => __("Linkedin URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'linkedin_link'
			)));

		// Viadeo
			$wp_customize->add_setting('viadeo_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'viadeo_customization', array(
				'label' => __("Viadeo URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'viadeo_link'
			)));

		// Pinterest
			$wp_customize->add_setting('pinterest_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pinterest_customization', array(
				'label' => __("Pinterest URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'pinterest_link'
			)));

		// Google
			$wp_customize->add_setting('google_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'google_customization', array(
				'label' => __("Google URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'google_link'
			)));

		// Github
			$wp_customize->add_setting('github_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'github_customization', array(
				'label' => __("Github URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'github_link'
			)));

		// Adn
			$wp_customize->add_setting('adn_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'adn_customization', array(
				'label' => __("Adn URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'adn_link'
			)));

		// Bitbucket
			$wp_customize->add_setting('bitbucket_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bitbucket_customization', array(
				'label' => __("Bitbucket URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'bitbucket_link'
			)));

		// Dropbox
			$wp_customize->add_setting('dropbox_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'dropbox_customization', array(
				'label' => __("Dropbox URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'dropbox_link'
			)));

		// Flickr
			$wp_customize->add_setting('flickr_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'flickr_customization', array(
				'label' => __("Flickr URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'flickr_link'
			)));

		// Foursquare
			$wp_customize->add_setting('foursquare_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'foursquare_customization', array(
				'label' => __("Foursquare URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'foursquare_link'
			)));

		// Instagram
			$wp_customize->add_setting('instagram_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'instagram_customization', array(
				'label' => __("Instagram URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'instagram_link'
			)));

		// Microsoft
			$wp_customize->add_setting('microsoft_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'microsoft_customization', array(
				'label' => __("Microsoft URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'microsoft_link'
			)));

		// Odnoklassniki
			$wp_customize->add_setting('odnoklassniki_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'odnoklassniki_customization', array(
				'label' => __("Odnoklassniki URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'odnoklassniki_link'
			)));

		// Openid
			$wp_customize->add_setting('openid_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'openid_customization', array(
				'label' => __("Openid URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'openid_link'
			)));

		// Reddit
			$wp_customize->add_setting('reddit_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reddit_customization', array(
				'label' => __("Reddit URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'reddit_link'
			)));

		// videocloud
			$wp_customize->add_setting('videocloud_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'videocloud_customization', array(
				'label' => __("videocloud URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'videocloud_link'
			)));

		// Tumblr
			$wp_customize->add_setting('tumblr_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'tumblr_customization', array(
				'label' => __("Tumblr URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'tumblr_link'
			)));

		// Twitter
			$wp_customize->add_setting('twitter_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'twitter_customization', array(
				'label' => __("Twitter URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'twitter_link'
			)));

		// Vimeo
			$wp_customize->add_setting('vimeo_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'vimeo_customization', array(
				'label' => __("Vimeo URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'vimeo_link'
			)));

		// Vk
			$wp_customize->add_setting('vk_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'vk_customization', array(
				'label' => __("Vk URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'vk_link'
			)));

		// Yahoo
			$wp_customize->add_setting('yahoo_link', array(
				'default' => __("", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'yahoo_customization', array(
				'label' => __("Yahoo URL", "artskory"),
				'section' => 'social_title',
				'settings' => 'yahoo_link'
			)));

	// Custom maps
	// =====================================================================================
		$wp_customize->add_section('maps', array(
			'title' => __("Maps", "artskory"),
			'priority' => '80'
		));

		// Latitude
			$wp_customize->add_setting('coordinates_title_1', array(
				'default' => __("Latitude", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'coordinates_title_1', array(
				'label' => __("Coordonnées gps", "artskory"),
				'section' => 'maps',
			)));

		// Longitude
			$wp_customize->add_setting('coordinates_title_2', array(
				'default' => __("Longitude", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'coordinates_title_2', array(
				'label' => __("", "artskory"),
				'section' => 'maps',
			)));

		// API key
			$wp_customize->add_setting('api_key_title', array(
				'default' => __("Entrez votre clé", "artskory"),
				'transport' => 'refresh'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'api_key_title', array(
				'label' => __("Clé d'API", "artskory"),
				'section' => 'maps',
			)));

}

add_action('customize_register', 'artskory_customize_register');

// Custom logo
// =========================================================================================
function custom_logo() {
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	echo $image[0];
}

// Custom background video
// =========================================================================================
function echo_theme_movie_1() {
    $id = get_theme_mod('video_1');
	echo wp_get_attachment_url($id);
}

function echo_theme_movie_2() {
    $id = get_theme_mod('video_2');
	echo wp_get_attachment_url($id);
}

function echo_theme_movie_3() {
    $id = get_theme_mod('video_3');
	echo wp_get_attachment_url($id);
}

// Custom colors
// =========================================================================================
function artskory_customize_css() {
	?>
	<style>
		body, .thumbnail .caption {
			color: <?php echo get_theme_mod('body_color'); ?> !important;
		}
		::-moz-selection, ::selection {
		  background: <?php echo get_theme_mod('color_selection'); ?>;
		}
		::-moz-selection {
		  background: <?php echo get_theme_mod('color_selection'); ?>;
		}
		::selection {
		  background: <?php echo get_theme_mod('color_selection'); ?>;
		}
		a, .navbar-nav > .active > a, .navbar-nav > li > a:hover {
		    color: <?php echo get_theme_mod('link_color'); ?> !important;
		}
		.header-top {
		    background-color: <?php echo get_theme_mod('background_menu'); ?> !important;
		}
		.link-skewed a::before, .navbar-toggle:hover {
			background : <?php echo get_theme_mod('link_color'); ?> !important;
		}
		.main {
			background: <?php echo get_theme_mod('body_bg'); ?>;
		}
		.project-designs {
			background: <?php echo get_theme_mod('project_designs_bg'); ?>;
		}
		.main-footer, .grid figcaption, .jumbotron {
			background: <?php echo get_theme_mod('footer_bg'); ?> !important;
		}
	</style>
	<?php
}

add_action('wp_head', 'artskory_customize_css');
