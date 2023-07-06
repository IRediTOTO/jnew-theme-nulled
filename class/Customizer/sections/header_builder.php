<?php

$options = [];

$options[] = [
	'id'          => 'jnews_hb_notice',
	'type'        => 'jnews-alert',
	'default'     => 'warning',
	'label'       => esc_html__( 'Notice', 'jnews' ),
	'description' => wp_kses( __(
		'<ul>
                    <li>We will reset all options inside header builder panel when you click one of the starter layout</li>
                    <li>You can modify your header using header builder like normal after choosing header builder layout.</li>
                </ul>',
		'jnews' ), wp_kses_allowed_html() ),
];

$options[] = [
	'id'          => 'jnews_hb_layout',
	'transport'   => 'postMessage',
	'default'     => 'jnews_hb_preset',
	'type'        => 'jnews-preset-image',
	'label'       => esc_html__( 'Starter Layout', 'jnews' ),
	'description' => esc_html__( 'Select starter layout of your heading.', 'jnews' ),
	'choices'     => [
		'1' => '',
		'2' => '',
		'3' => '',
		'4' => '',
		'5' => '',
		'6' => '',
		'7' => '',
	],
];

$options[] = [
	'id'        => 'jnews_hb_preset',
	'transport' => 'refresh',
	'default'   => '',
	'type'      => 'jnews-preset',
	'label'     => 'Preset',
	'multiple'  => 1,
	'choices'   => [
		'1' => [
			'label'    => esc_html__( 'Header 1', 'jnews' ),
			'settings' => [
				'jnews_hb_element_desktop_top_left'     => [ 'top_bar_menu' ],
				'jnews_hb_element_desktop_top_right'    => [ 'date', 'weather', 'social_icon', 'login' ],
				'jnews_hb_element_desktop_mid_left'     => [ 'logo' ],
				'jnews_hb_element_desktop_mid_right'    => [ 'ads' ],
				'jnews_hb_element_desktop_bottom_left'  => [ 'main_menu' ],
				'jnews_hb_element_desktop_bottom_right' => [ 'search_icon' ],
				'jnews_header_social_icon_text_color'   => '#ffffff',
				'jnews_header_logo'                     => get_parent_theme_file_uri( 'assets/img/logo.png' ),
				'jnews_header_logo_retina'              => get_parent_theme_file_uri( 'assets/img/logo@2x.png' ),
			],
		],
		'2' => [
			'label'    => esc_html__( 'Header 2', 'jnews' ),
			'settings' => [
				'jnews_hb_arrange_bar'                  => [ 'top', 'bottom', 'mid' ],
				'jnews_hb_element_desktop_top_left'     => [ 'top_bar_menu' ],
				'jnews_hb_element_desktop_top_right'    => [ 'date', 'weather', 'social_icon', 'login' ],
				'jnews_hb_element_desktop_mid_left'     => [ 'logo' ],
				'jnews_hb_element_desktop_mid_right'    => [ 'ads' ],
				'jnews_hb_element_desktop_bottom_left'  => [ 'main_menu' ],
				'jnews_hb_element_desktop_bottom_right' => [ 'search_icon' ],
				'jnews_header_social_icon_text_color'   => '#ffffff',
				'jnews_header_logo'                     => get_parent_theme_file_uri( 'assets/img/logo.png' ),
				'jnews_header_logo_retina'              => get_parent_theme_file_uri( 'assets/img/logo@2x.png' ),
			],
		],
		'3' => [
			'label'    => esc_html__( 'Header 3', 'jnews' ),
			'settings' => [
				'jnews_hb_element_desktop_top_left'     => [ 'top_bar_menu' ],
				'jnews_hb_element_desktop_top_right'    => [ 'date', 'weather', 'social_icon', 'login' ],
				'jnews_hb_element_desktop_mid_left'     => [ 'logo' ],
				'jnews_hb_element_desktop_mid_right'    => [ 'main_menu', 'search_icon' ],
				'jnews_hb_element_desktop_bottom_left'  => [],
				'jnews_hb_element_desktop_bottom_right' => [],
				'jnews_header_social_icon_text_color'   => '#ffffff',
				'jnews_header_midbar_border_top_height' => 1,
				'jnews_header_midbar_height'            => 90,
				'jnews_header_logo'                     => get_parent_theme_file_uri( 'assets/img/logo.png' ),
				'jnews_header_logo_retina'              => get_parent_theme_file_uri( 'assets/img/logo@2x.png' ),
			],
		],
		'4' => [
			'label'    => esc_html__( 'Header 4', 'jnews' ),
			'settings' => [
				'jnews_hb_element_desktop_top_left'     => [ 'logo', 'top_bar_menu' ],
				'jnews_hb_element_desktop_top_right'    => [ 'date', 'weather', 'social_icon', 'login' ],
				'jnews_hb_element_desktop_mid_left'     => [],
				'jnews_hb_element_desktop_mid_center'   => [ 'ads' ],
				'jnews_hb_element_desktop_mid_right'    => [],
				'jnews_hb_element_desktop_bottom_left'  => [ 'main_menu' ],
				'jnews_hb_element_desktop_bottom_right' => [ 'search_icon' ],
				'jnews_hb_display_desktop_mid_left'     => 'normal',
				'jnews_hb_display_desktop_mid_center'   => 'grow',
				'jnews_hb_display_desktop_mid_right'    => 'normal',
				'jnews_header_topbar_height'            => '55',
				'jnews_header_midbar_height'            => 150,
				'jnews_header_topbar_scheme'            => 'normal',
				'jnews_header_bottombar_scheme'         => 'jeg_navbar_dark',
				'jnews_header_bottombar_boxed'          => true,
				'jnews_header_bottombar_fitwidth'       => true,
				'jnews_header_bottombar_border'         => true,
				'jnews_header_bottombar_border_color'   => '#515151',
				'jnews_header_logo'                     => get_parent_theme_file_uri( 'assets/img/sticky_logo.png' ),
				'jnews_header_logo_retina'              => get_parent_theme_file_uri( 'assets/img/sticky_logo@2x.png' ),
			],
		],
		'5' => [
			'label'    => esc_html__( 'Header 5', 'jnews' ),
			'settings' => [
				'jnews_hb_element_desktop_top_left'      => [ 'top_bar_menu' ],
				'jnews_hb_element_desktop_top_right'     => [ 'date', 'weather', 'social_icon', 'login' ],
				'jnews_hb_element_desktop_mid_left'      => [],
				'jnews_hb_element_desktop_mid_center'    => [ 'logo' ],
				'jnews_hb_element_desktop_mid_right'     => [],
				'jnews_hb_element_desktop_bottom_left'   => [],
				'jnews_hb_element_desktop_bottom_center' => [ 'main_menu' ],
				'jnews_hb_element_desktop_bottom_right'  => [ 'search_icon' ],
				'jnews_hb_display_desktop_mid_left'      => 'normal',
				'jnews_hb_display_desktop_mid_center'    => 'grow',
				'jnews_hb_display_desktop_mid_right'     => 'normal',
				'jnews_hb_display_desktop_bottom_left'   => 'normal',
				'jnews_hb_display_desktop_bottom_center' => 'grow',
				'jnews_hb_display_desktop_bottom_right'  => 'normal',
				'jnews_header_social_icon_text_color'    => '#ffffff',
				'jnews_header_logo'                      => get_parent_theme_file_uri( 'assets/img/logo.png' ),
				'jnews_header_logo_retina'               => get_parent_theme_file_uri( 'assets/img/logo@2x.png' ),
			],
		],
		'6' => [
			'label'    => esc_html__( 'Header 6', 'jnews' ),
			'settings' => [
				'jnews_hb_element_desktop_top_left'        => [ 'top_bar_menu' ],
				'jnews_hb_element_desktop_top_right'       => [ 'date', 'weather' ],
				'jnews_hb_element_desktop_mid_left'        => [ 'social_icon' ],
				'jnews_hb_element_desktop_mid_center'      => [ 'logo' ],
				'jnews_hb_element_desktop_mid_right'       => [ 'login' ],
				'jnews_hb_element_desktop_bottom_left'     => [],
				'jnews_hb_element_desktop_bottom_center'   => [ 'main_menu' ],
				'jnews_hb_element_desktop_bottom_right'    => [ 'search_icon' ],
				'jnews_hb_display_desktop_mid_left'        => 'normal',
				'jnews_hb_display_desktop_mid_center'      => 'grow',
				'jnews_hb_display_desktop_mid_right'       => 'normal',
				'jnews_hb_display_desktop_bottom_left'     => 'normal',
				'jnews_hb_display_desktop_bottom_center'   => 'grow',
				'jnews_hb_display_desktop_bottom_right'    => 'normal',
				'jnews_header_social_icon'                 => 'square',
				'jnews_header_bottombar_border_top_height' => 1,
				'jnews_header_bottombar_height'            => 60,
				'jnews_header_logo'                        => get_parent_theme_file_uri( 'assets/img/logo.png' ),
				'jnews_header_logo_retina'                 => get_parent_theme_file_uri( 'assets/img/logo@2x.png' ),
			],
		],
		'7' => [
			'label'    => esc_html__( 'Header 7', 'jnews' ),
			'settings' => [
				'jnews_hb_element_desktop_top_left'     => [ 'top_bar_menu' ],
				'jnews_hb_element_desktop_top_right'    => [ 'date', 'weather', 'login' ],
				'jnews_hb_element_desktop_mid_left'     => [ 'logo', 'main_menu' ],
				'jnews_hb_element_desktop_mid_right'    => [ 'social_icon', 'search_icon' ],
				'jnews_hb_element_desktop_bottom_left'  => [],
				'jnews_hb_element_desktop_bottom_right' => [],
				'jnews_header_social_icon_text_color'   => '#333333',
				'jnews_hb_display_desktop_mid_left'     => 'grow',
				'jnews_hb_display_desktop_mid_center'   => 'normal',
				'jnews_hb_display_desktop_mid_right'    => 'normal',
				'jnews_header_width'                    => 'full',
				'jnews_header_midbar_border_top_height' => 1,
				'jnews_header_midbar_height'            => 90,
				'jnews_header_logo'                     => get_parent_theme_file_uri( 'assets/img/logo.png' ),
				'jnews_header_logo_retina'              => get_parent_theme_file_uri( 'assets/img/logo@2x.png' ),
			],
		],
	],
];

return $options;
