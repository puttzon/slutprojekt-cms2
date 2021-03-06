<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5fd22f9d6ba3c',
	'title' => 'Leveransmetod 1',
	'fields' => array(
		array(
			'key' => 'field_5fd22fa58dd3d',
			'label' => 'Fraktklass ett',
			'name' => 'fraktklass_ett',
			'type' => 'number',
			'instructions' => 'Skriv in beloppet för fraktklass 1 via bud. <br>
0-1kg',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'kr',
			'min' => 1,
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5fd233da52932',
			'label' => 'Fraktklass två',
			'name' => 'fraktklass_tva',
			'type' => 'number',
			'instructions' => 'Skriv in beloppet för fraktklass 2 via bud. <br>

2kg- 3kg',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'kr',
			'min' => 1,
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5fd233f652933',
			'label' => 'Fraktklass tre',
			'name' => 'fraktklass_tre',
			'type' => 'number',
			'instructions' => 'Skriv in beloppet för fraktklass 3 via bud. <br>
3-100kg',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'kr',
			'min' => 1,
			'max' => '',
			'step' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'Leveransmetod 1-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5fd78fc1989de',
	'title' => 'Leveranszon',
	'fields' => array(
		array(
			'key' => 'field_5fd78fcf8724d',
			'label' => 'Zon 0',
			'name' => 'zon_0',
			'type' => 'number',
			'instructions' => 'Kostnaden för leverans med bud, zon 0.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'kr',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5fd790528724e',
			'label' => 'Zon 1',
			'name' => 'zon_1',
			'type' => 'number',
			'instructions' => 'Kostnaden för leverans med bud, zon 1.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'kr',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5fd7905a8724f',
			'label' => 'Zon 2',
			'name' => 'zon_2',
			'type' => 'number',
			'instructions' => 'Kostnaden för leverans med bud, zon 2.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'kr',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5fd7905d87250',
			'label' => 'Zon 3',
			'name' => 'zon_3',
			'type' => 'number',
			'instructions' => 'Kostnaden för leverans med bud, zon 3.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'kr',
			'min' => '',
			'max' => '',
			'step' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'Leveransmetod 1-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;