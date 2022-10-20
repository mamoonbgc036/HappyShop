<?php

new \Kirki\Panel(
	'Ecom_panel_id',
	[
		'priority'    => 120,
		'title'       => esc_html__( 'Ecom Customizer Panels', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

new \Kirki\Section(
	'Ecom_section_id_one',
	[
		'title'       => esc_html__( 'My Sections', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'Ecom_panel_id',
		'priority'    => 160,
		'active_callback'=>function(){
			return is_front_page();
		}
	]
);

// SHOP BY CATEGORY

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'category_switch_setting',
		'label'       => esc_html__( 'Category Enabler', 'kirki' ),
		'section'     => 'Ecom_section_id_one',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'category_text_setting',
		'label'    => esc_html__( 'Rename Your Category Heading', 'kirki' ),
		'section'  => 'Ecom_section_id_one',
		'default'  => esc_html__( 'Shop By Categorie', 'kirki' ),
		'priority' => 10,
		'active_callback'=>[
			[
				'setting'=>'category_switch_setting',
				'operator'=> '==',
				'value'=>true,
			]
		]
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'category_prod_num_switch',
		'label'       => esc_html__( 'Category Number Enable', 'kirki' ),
		'section'     => 'Ecom_section_id_one',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Hide', 'kirki' ),
			'off' => esc_html__( 'Show', 'kirki' ),
		],
		'active_callback'=>[
			[
				'setting'=>'category_switch_setting',
				'operator'=> '==',
				'value'=>true,
			]
		]
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'category_col_num_setting',
		'label'    => esc_html__( 'Category Column Number', 'kirki' ),
		'section'  => 'Ecom_section_id_one',
		'default'  => 3,
		'priority' => 10,
		'active_callback'=>[
			[
				'setting'=>'category_switch_setting',
				'operator'=> '==',
				'value'=>true,
			]
		]
	]
);

// NEW ARRIVALS

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'products_switch_setting',
		'label'       => esc_html__( 'New Arrival Enabler', 'kirki' ),
		'section'     => 'Ecom_section_id_one',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'product_text_setting',
		'label'    => esc_html__( 'Rename Your Arrival Heading', 'kirki' ),
		'section'  => 'Ecom_section_id_one',
		'default'  => esc_html__( 'New Arrival', 'kirki' ),
		'priority' => 10,
		'active_callback'=>[
			[
				'setting'=>'products_switch_setting',
				'operator'=>'===',
				'value'=>true,
			],
		]
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'product_sub_text_setting',
		'label'    => esc_html__( 'Rename Your Arrival Sub Heading', 'kirki' ),
		'section'  => 'Ecom_section_id_one',
		'default'  => esc_html__( '37 New fashion products arrived recently in our showroom for this winter', 'kirki' ),
		'priority' => 10,
		'active_callback'=>[
			[
				'setting'=>'products_switch_setting',
				'operator'=>'==',
				'value'=>true,				
			]
		]
	]
);

// PROMO

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'promo_switch_setting',
		'label'       => esc_html__( 'Promo Display Enabler', 'kirki' ),
		'section'     => 'Ecom_section_id_one',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);

// POPULAR PRODUCTS

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'popular_switch_setting',
		'label'       => esc_html__( 'Popular Products Enabler', 'kirki' ),
		'section'     => 'Ecom_section_id_one',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'popular_text_setting',
		'label'    => esc_html__( 'Rename Popular Heading', 'kirki' ),
		'section'  => 'Ecom_section_id_one',
		'default'  => esc_html__( 'Popular Products', 'kirki' ),
		'priority' => 10,
		'active_callback'=>[
			[
				'setting'=>'popular_switch_setting',
				'operator'=> '==',
				'value'=> true,
			]
		]
	]
);

// OFFER

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'offer_switch_setting',
		'label'       => esc_html__( 'Offer Display Enabler', 'kirki' ),
		'section'     => 'Ecom_section_id_one',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);

// FLICKER

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'flicker_switch_setting',
		'label'       => esc_html__( 'Flicker Display Enabler', 'kirki' ),
		'section'     => 'Ecom_section_id_one',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Hide', 'kirki' ),
			'off' => esc_html__( 'Display', 'kirki' ),
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'flicker_text_setting',
		'label'    => esc_html__( 'Rename Flicker Heading', 'kirki' ),
		'section'  => 'Ecom_section_id_one',
		'default'  => esc_html__( 'Simple Shop On Flicker', 'kirki' ),
		'priority' => 10,
		'active_callback'=>[
			[
				'setting'=>'flicker_switch_setting',
				'operator'=> '==',
				'value'=> true,
			]
		]
	]
);