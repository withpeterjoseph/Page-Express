<?php

	$wp_customize->add_panel('header_two', array('title' => __( 'Secondary Header' ), 'priority' => 30,) );

	$wp_customize->add_section('header_two_visibility', array('title' => 'Visibility','panel' => 'header_two','priority' => 30,));

    /** SECONDARY HEADER VISIBILITY **/

    //Secondary Header Visibility Title
    $wp_customize->add_setting(
        'secondary_header_visibility_title',
        array(
            'default' => '',
						'sanitize_callback' => 'pe_sanitize_header_title',
        )
    );
    $wp_customize->add_control( new WP_Customize_Grand_Title_Area(
        $wp_customize,
        'secondary_header_visibility_title',
        array(
            'label'	=> __( 'Visibility' ),
            'section' => 'header_two_visibility',
            'settings' => 'secondary_header_visibility_title',
        )
    ));

    //Secondary Header Visibility
		$wp_customize->add_setting(
		    'secondary_header_visibility',
		    array(
		        'default' => 'visible',
						'sanitize_callback' => 'pe_sanitize_select',
		    )
		);
		$wp_customize->add_control(
		    'secondary_header_visibility',
		    array(
		        'type' => 'select',
		        'section' => 'header_two_visibility',
		        'choices' => array(
						'visible' => 'Visible Everywhere',
            'hidden' => 'Hidden',
            'homepage' => 'Homepage Only',
            'page' => 'Pages Only',
						'posts' => 'Posts Only',
		        ),
		    )
		);

		$wp_customize->add_section('secondary_header_styling', array('title' => 'Layout','panel' => 'header_two','priority' => 30,));

    /** SECONDARY HEADER LAYOUT **/

		//Secondary Header Layout Title
		$wp_customize->add_setting(
			'secondary_header_layout_title',
			array(
				'default' => '',
				'sanitize_callback' => 'pe_sanitize_header_title',
			)
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
			$wp_customize,
			'secondary_header_layout_title',
			array(
				'label'	=> __( 'Layout' ),
				'section' => 'secondary_header_styling',
				'settings' => 'secondary_header_layout_title',
			)
		));

		//Secondary Header Type
		$wp_customize->add_setting(
			'secondary_header_type_select',
			array(
				'default' => 'Menu',
				'sanitize_callback' => 'pe_sanitize_select',
			)
		);
		$wp_customize->add_control(
			'secondary_header_type_select',
			array(
				'type' => 'select',
				'label' => 'Header Type',
				'section' => 'secondary_header_styling',
				'description'	=> __( 'Hide or show Logo and Menu in header' ),
				'choices' => array(
					'Logo & Menu' => 'Logo and Menu',
					'Menu' => 'Menu Only',
					'Logo' => 'Logo Only',
				),
			)
		);

		//Line Space
		$wp_customize->add_setting(
			'secondary_header_layout_space_one',
			array(
				'default' => '',
				'sanitize_callback' => 'pe_sanitize_line_space',
			)
		);
		$wp_customize->add_control( new WP_Line_Space(
			$wp_customize,
			'secondary_header_layout_space_one',
			array(
				'section' => 'secondary_header_styling',
				'settings' => 'secondary_header_layout_space_one',
			)
		));

		//Secondary Header Width % or px
		$wp_customize->add_setting(
			'secondary_header_width_option',
			array(
				'default' => 'fluid',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_select',
			)
		);
		$wp_customize->add_control(
			new WP_button_select(
				$wp_customize,
				'secondary_header_width_option',
				array(
					'settings'		=> 'secondary_header_width_option',
					'section'		=> 'secondary_header_styling',
					'label'			=> __( 'Header Width'),
					'description'	=> __( 'Assign fixed or fluid width to header' ),
					'choices'		=> array(
						'fixed' => 'Fixed',
						'fluid' => 'Fluid',
					)
				)
			)
		);

		//Secondary Header Width Fixed
		$wp_customize->add_setting(
			'secondary_header_width_fixed',
			array(
				'default' => '1100',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize,
				'secondary_header_width_fixed',
				array(
					'section'     => 'secondary_header_styling',
					'settings'    => 'secondary_header_width_fixed',
					'type' => __(' pixels'),
					'input_attrs' => array(
						'min' => 800,
						'max' => 1400,
						'step'  => 2,
					),
				)
			)
		);

		$wp_customize->add_setting(
			'secondary_header_width_fluid',
			array(
				'default' => '100',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize,
				'secondary_header_width_fluid', array(
					'section'     => 'secondary_header_styling',
					'settings'    => 'secondary_header_width_fluid',
					'type' => __(" percent"),
					'input_attrs' => array(
						'min'   => 50,
						'max'   => 100,
						'step'  => 2,
					),
				)
			) );

		//Secondary Header Alignment
		$wp_customize->add_setting(
			'secondary_header_alignment',
			array(
				'default' => 'center',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_select',
			)
		);
		$wp_customize->add_control(
			new WP_button_select(
				$wp_customize,
				'secondary_header_alignment',
				array(
					'settings'		=> 'secondary_header_alignment',
					'section'		=> 'secondary_header_styling',
					'label'			=> __( 'Header Alignment'),
					'description'	=> __( 'Change alignment of header relative to rest of page' ),
					'choices'		=> array(
						'left' => 'Left',
						'center' => 'Center',
						'right' => 'Right',
					)
				)
			)
		);

		//Line Space
		$wp_customize->add_setting(
			'secondary_header_layout_space_two',
			array(
				'default' => '',
				'sanitize_callback' => 'pe_sanitize_line_space',
			)
		);
		$wp_customize->add_control( new WP_Line_Space(
			$wp_customize,
			'secondary_header_layout_space_two',
			array(
				'section' => 'secondary_header_styling',
				'settings' => 'secondary_header_layout_space_two',
			)
		));

		//Secondary Header Content Width % or px
		$wp_customize->add_setting(
			'secondary_header_content_width_option',
			array(
				'default' => 'fixed',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_select',
			)
		);
		$wp_customize->add_control(
			new WP_button_select(
				$wp_customize,
				'secondary_header_content_width_option',
				array(
					'settings'		=> 'secondary_header_content_width_option',
					'section'		=> 'secondary_header_styling',
					'label'			=> __( 'Content Width'),
					'description'	=> __( 'Assign fixed or fluid width to content inside header. Content width may appear smaller if size entered is greater than width of header.' ),
					'choices'		=> array(
						'fixed' => 'Fixed',
						'fluid' => 'Fluid',
					)
				)
			)
		);

    //Secondary Header Content Width Fixed
		$wp_customize->add_setting(
			'secondary_header_content_width_fixed',
			array(
				'default' => '1024',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize,
				'secondary_header_content_width_fixed', array(
					'section'     => 'secondary_header_styling',
					'settings'    => 'secondary_header_content_width_fixed',
					'type' => __(" pixels"),
					'input_attrs' => array(
						'min'   => 800,
						'max'   => 1400,
						'step'  => 2,
					),
				)
			) );

    //Secondary Header Content Width Fluid
		$wp_customize->add_setting(
			'secondary_header_content_width_fluid',
			array(
				'default' => '100',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize,
				'secondary_header_content_width_fluid', array(
					'section'     => 'secondary_header_styling',
					'settings'    => 'secondary_header_content_width_fluid',
					'type' => __(" percent"),
					'input_attrs' => array(
						'min'   => 50,
						'max'   => 100,
						'step'  => 2,
					),
				)
			) );

		//Secondary Header Content Alignment
		$wp_customize->add_setting(
			'secondary_header_content_alignment',
			array(
				'default' => 'center',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_select',
			)
		);
		$wp_customize->add_control(
			new WP_button_select(
				$wp_customize,
				'secondary_header_content_alignment',
				array(
					'settings'		=> 'secondary_header_content_alignment',
					'section'		=> 'secondary_header_styling',
					'label'			=> __( 'Content Alignment'),
					'description'	=> __( 'Change alignment of content inside header' ),
					'choices'		=> array(
						'left' => 'Left',
						'center' => 'Center',
						'right' => 'Right',
					)
				)
			)
		);

    $wp_customize->add_section('secondary_header_background', array('title' => 'Background','panel' => 'header_two','priority' => 30,));

		/** SECONDARY HEADER BACKGROUND **/

		//Secondary Header Background Title
		$wp_customize->add_setting(
			'secondary_header_background_title',
			array(
				'default' => '',
				'sanitize_callback' => 'pe_sanitize_header_title',
			)
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
			$wp_customize,
			'secondary_header_background_title',
			array(
				'label'	=> __( 'Background' ),
				'section' => 'secondary_header_background',
				'settings' => 'secondary_header_background_title',
			)
		));

		//Secondary Header Background Visibility
		$wp_customize->add_setting(
			'secondary_header_background_visible',
			array(
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_checkbox',
			)
		);
		$wp_customize->add_control(
			'secondary_header_background_visible',
			array(
				'type' => 'checkbox',
				'label' => 'Disable Header Background',
				'section' => 'secondary_header_background',
				'description'	=> __( 'Remove background and make header transparent' ),
				'settings' => 'secondary_header_background_visible',
			)
		);

		//Line Space
		$wp_customize->add_setting(
			'secondary_header_layout_space_four',
			array(
				'default' => '',
				'sanitize_callback' => 'pe_sanitize_line_space',
			)
		);
		$wp_customize->add_control( new WP_Line_Space(
			$wp_customize,
			'secondary_header_layout_space_four',
			array(
				'section' => 'secondary_header_background',
				'settings' => 'secondary_header_layout_space_four',
			)
		));

		//Secondary Header Background Color
		$wp_customize->add_setting(
			'secondary_header_background_color',
			array(
				'default' => '#333',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'secondary_header_background_color',
				array(
					'label' => 'Background Color',
					'section' => 'secondary_header_background',
					'settings' => 'secondary_header_background_color',
				)
			)
		);

		//Secondary Header Background Image
		$wp_customize->add_setting( 'secondary_header_background_image',
			array(
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_image',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'secondary_header_background_image',
				array(
					'label' => 'Background Image',
					'section' => 'secondary_header_background',
					'settings' => 'secondary_header_background_image'
				)
			)
		);

		//Secondary Header Background Image position
		$wp_customize->add_setting(
			'secondary_header_background_image_position',
			array(
				'default' => 'left top',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_select',
			)
		);
		$wp_customize->add_control(
			'secondary_header_background_image_position',
			array(
				'type' => 'select',
				'label' => 'Background Image Position',
				'description'	=> __( 'Assign background image starting position in header' ),
				'section' => 'secondary_header_background',
				'choices' => array(
					'left top' => 'Top Left',
					'left center' => 'Center Left',
					'left bottom' => 'Bottom Left',
					'right top' => 'Top Right',
					'right center' => 'Center Right',
					'right bottom' => 'Bottom Right',
					'center top' => 'Top Center',
					'center center' => 'Center Center',
					'center bottom' => 'Bottom Center',
				),
			)
		);

		//Secondary Header Background Image repeat
		$wp_customize->add_setting(
			'secondary_header_background_image_repeat',
			array(
				'default' => 'repeat',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_select',
			)
		);
		$wp_customize->add_control(
			'secondary_header_background_image_repeat',
			array(
				'type' => 'select',
				'label' => 'Background Image Repetition',
				'section' => 'secondary_header_background',
				'description'	=> __( 'Control background image repetition in header' ),
				'choices' => array(
					'no-repeat' => 'No Repeat',
					'repeat' => 'Repeat',
					'repeat-x' => 'Repeat Horizontally',
					'repeat-y' => 'Repeat Vertically',
				),
			)
		);


		/** SECONDARY HEADER BORDER **/
		$wp_customize->add_section('secondary_header_borders', array('title' => 'Borders','panel' => 'header_two','priority' => 30,));


		//Border Title
		$wp_customize->add_setting(
			'secondary_header_border_title',
			array(
				'default' => '',
				'sanitize_callback' => 'pe_sanitize_header_title',
			)
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
			$wp_customize,
			'secondary_header_border_title',
			array(
				'label'	=> __( 'Borders' ),
				'section' => 'secondary_header_borders',
				'settings' => 'secondary_header_border_title',
			)
		));

    //Secondary Header Border Style
    $wp_customize->add_setting(
        'secondary_header_border_style',
        array(
            'default' => 'none',
						'transport' => 'postMessage',
						'sanitize_callback' => 'pe_sanitize_select',
        )
    );
    $wp_customize->add_control(
        'secondary_header_border_style',
        array(
            'type' => 'select',
            'label' => 'Border',
            'section' => 'secondary_header_borders',
						'description'	=> __( 'Select border style to display around header' ),
            'choices' => array(
                'none' => 'None',
                'dotted' => 'Dotted',
                'dashed' => 'Dashed',
                'solid' => 'Solid',
                'double' => 'Double',
                'groove' => 'Groove',
            ),
        )
    );

		//Secondary Header Border Color
		$wp_customize->add_setting(
			'secondary_header_border_color',
			array(
				'default' => '#444',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'secondary_header_border_color',
				array(
					'label' => 'Border Color',
					'section' => 'secondary_header_borders',
					'settings' => 'secondary_header_border_color',
				)
			)
		);

		//Secondary Header Border Top
		$wp_customize->add_setting(
			'secondary_header_border_top',
			array(
				'default' => '0',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize,
				'secondary_header_border_top', array(
					'priority'    => 10,
					'section'     => 'secondary_header_borders',
					'label'       => 'Top Border',
					'type' => __(" pixels"),
					'input_attrs' => array(
						'min'   => 0,
						'max'   => 50,
						'step'  => 1,
					),
				)
			) );

		//Secondary Header Border Bottom
		$wp_customize->add_setting(
			'secondary_header_border_bottom',
			array(
				'default' => '0',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize,
				'secondary_header_border_bottom', array(
					'priority'    => 10,
					'section'     => 'secondary_header_borders',
					'label'       => 'Bottom Border',
					'type' => __(" pixels"),
					'input_attrs' => array(
						'min'   => 0,
						'max'   => 50,
						'step'  => 1,
					),
				)
			) );

		//Secondary Header Border Left
		$wp_customize->add_setting(
			'secondary_header_border_left',
			array(
				'default' => '0',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize,
				'secondary_header_border_left', array(
					'priority'    => 10,
					'section'     => 'secondary_header_borders',
					'label'       => 'Left Border',
					'type' => __(" pixels"),
					'input_attrs' => array(
						'min'   => 0,
						'max'   => 50,
						'step'  => 1,
					),
				)
			) );

		//Secondary Header Border Right
		$wp_customize->add_setting(
			'secondary_header_border_right',
			array(
				'default' => '0',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize,
				'secondary_header_border_right', array(
					'priority'    => 10,
					'section'     => 'secondary_header_borders',
					'label'       => 'Right Border',
					'type' => __(" pixels"),
					'input_attrs' => array(
						'min'   => 0,
						'max'   => 50,
						'step'  => 1,
					),
				)
			) );

		//Secondary Header Border Radius
		$wp_customize->add_setting(
			'secondary_header_border_radius',
			array(
				'default' => '0',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize,
				'secondary_header_border_radius', array(
					'priority'    => 10,
					'section'     => 'secondary_header_borders',
					'label'       => 'Border Rounding',
					'type' => __(" pixels"),
					'input_attrs' => array(
						'min'   => 0,
						'max'   => 50,
						'step'  => 1,
					),
				)
			) );

		/** SECONDARY HEADER PADDING **/
		$wp_customize->add_section('secondary_header_padding', array('title' => 'Inner Spacing','panel' => 'header_two','priority' => 30,));

		//Secondary Header Padding Title
		$wp_customize->add_setting(
			'secondary_header_padding_title',
			array(
				'default' => '',
				'sanitize_callback' => 'pe_sanitize_header_title',
			)
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
			$wp_customize,
			'secondary_header_padding_title',
			array(
				'label'	=> __( 'Inner Spacing' ),
				'section' => 'secondary_header_padding',
				'settings' => 'secondary_header_padding_title',
			)
		));

		//Secondary Header Padding Top
		$wp_customize->add_setting(
			'secondary_header_padding_top',
			array(
				'default' => '0',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'secondary_header_padding_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'secondary_header_padding',
			'label'       => 'Top Spacing',
			'type' => __(" pixels"),
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
			)
		) );

		//Secondary Header Padding Bottom
		$wp_customize->add_setting(
			'secondary_header_padding_bottom',
			array(
				'default' => '0',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'secondary_header_padding_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'secondary_header_padding',
			'label'       => 'Bottom Spacing',
			'type' => __(" pixels"),
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
			)
		) );

		//Secondary Header Padding Left
		$wp_customize->add_setting(
			'secondary_header_padding_left',
			array(
				'default' => '0',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'secondary_header_padding_left', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'secondary_header_padding',
			'label'       => 'Left Spacing',
			'type' => __(" pixels"),
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
			)
		) );

		//Secondary Header Padding Right
		$wp_customize->add_setting(
			'secondary_header_padding_right',
			array(
				'default' => '0',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'secondary_header_padding_right', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'secondary_header_padding',
			'label'       => 'Right Spacing',
			'type' => __(" pixels"),
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 2,
			),
			)
		) );

		/** SECONDARY HEADER MARGINS **/
		$wp_customize->add_section('secondary_header_margins', array('title' => 'Outer Spacing','panel' => 'header_two','priority' => 30,));

		//Secondary Header Margin Title
		$wp_customize->add_setting(
			'secondary_header_margin_title',
			array(
				'default' => '',
				'sanitize_callback' => 'pe_sanitize_header_title',
			)
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
			$wp_customize,
			'secondary_header_margin_title',
			array(
				'label'	=> __( 'Outer Spacing' ),
				'section' => 'secondary_header_margins',
				'settings' => 'secondary_header_margin_title',
			)
		));

		//Secondary Header Margin Top
		$wp_customize->add_setting(
			'secondary_header_margin_top',
			array(
				'default' => '0',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'secondary_header_margin_top', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'secondary_header_margins',
			'label'       => 'Top Spacing',
			'type' => __(" pixels"),
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
			)
		) );

		//Secondary Header Margin Bottom
		$wp_customize->add_setting(
			'secondary_header_margin_bottom',
			array(
				'default' => '0',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_range',
			)
		);
		$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'secondary_header_margin_bottom', array(
			'type'        => 'range',
			'priority'    => 10,
			'section'     => 'secondary_header_margins',
			'label'       => 'Bottom Spacing',
			'type' => __(" pixels"),
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 50,
				'step'  => 1,
			),
			)
		) );

    /** SECONDARY HEADER LOGO Options **/
    $wp_customize->add_section('secondary_header_logo', array('title' => 'Logo Styling','panel' => 'header_two','priority' => 30,));

		//Secondary Header Logo Styling Title
		$wp_customize->add_setting(
			'secondary_header_logo_styling_title',
			array(
				'default' => '',
				'sanitize_callback' => 'pe_sanitize_header_title',
			)
		);
		$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
			$wp_customize,
			'secondary_header_logo_styling_title',
			array(
				'label'	=> __( 'Logo Styling' ),
				'section' => 'secondary_header_logo',
				'settings' => 'secondary_header_logo_styling_title',
			)
		));

    //Secondary Header Logo Title
    $wp_customize->add_setting(
        'secondary_header_logo_title',
        array(
            'default' => '',
						'sanitize_callback' => 'pe_sanitize_header_title',
        )
    );
    $wp_customize->add_control( new WP_Customize_Title_Area(
        $wp_customize,
        'secondary_header_logo_title',
        array(
            'label'	=> __( 'Logo' ),
            'section' => 'secondary_header_logo',
            'settings' => 'secondary_header_logo_title',
        )
    ));

    //Secondary Header Logo Image
    $wp_customize->add_setting( 'secondary_header_logo_image',
		array(
				'default' => '',
				'sanitize_callback' => 'pe_sanitize_image',
			)
		);
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'secondary_header_logo_image',
            array(
                'label' => 'Logo Image',
								'description'	=> __( 'Upload image to display as logo in header' ),
                'section' => 'secondary_header_logo',
                'settings' => 'secondary_header_logo_image'
            )
        )
    );

		//Secondary Header Logo Layout Title
    $wp_customize->add_setting(
        'secondary_header_logo_layout_title',
        array(
            'default' => '',
						'sanitize_callback' => 'pe_sanitize_header_title',
        )
    );
    $wp_customize->add_control( new WP_Customize_Title_Area(
        $wp_customize,
        'secondary_header_logo_layout_title',
        array(
            'label'	=> __( 'Layout' ),
            'section' => 'secondary_header_logo',
            'settings' => 'secondary_header_logo_layout_title',
        )
    ));

		//Secondary Header Logo Alignment
		$wp_customize->add_setting(
			'secondary_header_logo_alignment',
			array(
				'default' => 'left',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_select',
			)
		);
		$wp_customize->add_control(
			new WP_button_select(
				$wp_customize,
				'secondary_header_logo_alignment',
				array(
					'settings'		=> 'secondary_header_logo_alignment',
					'section'		=> 'secondary_header_logo',
					'label' => 'Logo Alignment',
					'choices'		=> array(
						'left' => 'Left',
						'center' => 'Center',
						'right' => 'Right',
					)
				)
			)
		);

	//Secondary Header Logo Title Styling title
	$wp_customize->add_setting(
		'secondary_header_logo_title_styling_title',
		array(
			'default' => '',
			'sanitize_callback' => 'pe_sanitize_header_title',
		)
	);
	$wp_customize->add_control( new WP_Customize_Title_Area(
		$wp_customize,
		'secondary_header_logo_title_styling_title',
		array(
			'label'	=> __( 'Title' ),
			'section' => 'secondary_header_logo',
			'settings' => 'secondary_header_logo_title_styling_title',
		)
	));

	//Secondary Header Logo Site Title
	$wp_customize->add_setting(
			'secondary_header_sitetitle',
			array(
					'default' => 'Page Express',
					'transport' => 'postMessage',
					'sanitize_callback' => 'sanitize_text_field',
			)
	);
	$wp_customize->add_control(
			'secondary_header_sitetitle',
			array(
					'label' => 'Title',
					'description'	=> __( 'Display written text as logo' ),
					'section' => 'secondary_header_logo',
					'type' => 'text',
			)
	);

	//Line Space
	$wp_customize->add_setting(
		'secondary_header_layout_space_six',
		array(
			'default' => '',
			'sanitize_callback' => 'pe_sanitize_line_space',
		)
	);
	$wp_customize->add_control( new WP_Line_Space(
		$wp_customize,
		'secondary_header_layout_space_six',
		array(
			'section' => 'secondary_header_logo',
			'settings' => 'secondary_header_layout_space_six',
		)
	));

	//Secondary Header Logo Title Text Color
	$wp_customize->add_setting(
		'secondary_header_logo_title_text_color',
		array(
			'default' => '#FFF',
			'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'secondary_header_logo_title_text_color',
			array(
				'label' => 'Font Color',
				'section' => 'secondary_header_logo',
				'settings' => 'secondary_header_logo_title_text_color',
			)
		)
	);

	//Secondary Header Logo Title text font
	$wp_customize->add_setting(
		'secondary_header_logo_title_fonts',
		array(
			'default' => '"Helvetica Neue",Helvetica,Arial,sans-serif',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'secondary_header_logo_title_fonts',
		array(
			'type' => 'select',
			'label' => 'Font Style',
			'section' => 'secondary_header_logo',
			'choices' => array(
				'Arial,"Helvetica Neue",Helvetica,sans-serif' => 'Arial',
				'"Arial Narrow",Arial,sans-serif' => 'Arial Narrow',
				'Calibri,Candara,Segoe,"Segoe UI",Optima,Arial,sans-serif' => 'Calibri',
				'Candara,Calibri,Segoe,"Segoe UI",Optima,Arial,sans-serif' => 'Candara',
				'Futura,"Trebuchet MS",Arial,sans-serif' => 'Futura',
				'Geneva,Tahoma,Verdana,sans-serif' => 'Geneva',
				'"Gill Sans","Gill Sans MT",Calibri,sans-serif' => 'Gill Sans',
				'"Helvetica Neue",Helvetica,Arial,sans-serif' => 'Helvetica Neue',
				'Tahoma,Verdana,Segoe,sans-serif' => 'Tahoma',
				'"Segoe UI",Frutiger,"Frutiger Linotype","Dejavu Sans","Helvetica Neue",Arial,sans-serif' => 'Segoe UI',
				'"Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif' => 'Trebuchet MS',
				'Verdana,Geneva,sans-serif' => 'Verdana,Geneva,sans-serif',
				'"Big Caslon","Book Antiqua","Palatino Linotype",Georgia,serif' => 'Big Caslon',
				'"Book Antiqua",Palatino,"Palatino Linotype","Palatino LT STD",Georgia,serif' => 'Book Antiqua',
				'"Calisto MT","Bookman Old Style",Bookman,"Goudy Old Style",Garamond,"Hoefler Text","Bitstream Charter",Georgia,serif' => 'Calisto MT',
				'Cambria,Georgia,serif' => 'Cambria',
				'Georgia,Times,"Times New Roman",serif' => 'Georgia',
				'"Lucida Bright",Georgia,serif' => 'Lucida Bright',
				'Palatino,"Palatino Linotype","Palatino LT STD","Book Antiqua",Georgia,serif' => 'Palatino',
				'Perpetua,Baskerville,"Big Caslon","Palatino Linotype",Palatino,"URW Palladio L","Nimbus Roman No9 L",serif' => 'Perpetua',
				'TimesNewRoman,"Times New Roman",Times,Baskerville,Georgia,serif' => 'Times New Roman',
			),
		)
	);

	//Secondary Header Logo Title Font Size
	$wp_customize->add_setting(
		'secondary_header_logo_title_font_size',
		array(
			'default' => '36',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_range',
		)
	);
	$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'secondary_header_logo_title_font_size', array(
		'type'        => 'range',
		'priority'    => 10,
		'section'     => 'secondary_header_logo',
		'label'       => 'Font Size',
		'type' => __(" pixels"),
		'input_attrs' => array(
			'min'   => 8,
			'max'   => 70,
			'step'  => 2,
		),
	)
	) );

	//Secondary Header Logo Title Font Weight
	$wp_customize->add_setting(
		'secondary_header_logo_title_font_weight',
		array(
			'default' => 'bold',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_select',
		)
	);
	$wp_customize->add_control(
		new WP_button_select(
			$wp_customize,
			'secondary_header_logo_title_font_weight',
			array(
				'settings'		=> 'secondary_header_logo_title_font_weight',
				'section'		=> 'secondary_header_logo',
				'label' => 'Font Weight',
				'choices'		=> array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'lighter' => 'Light',
				)
			)
		)
	);

	//Secondary Header Logo Title Font Transformation
	$wp_customize->add_setting(
		'secondary_header_logo_title_font_transformation',
		array(
			'default' => 'capitalize',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'secondary_header_logo_title_font_transformation',
		array(
			'type' => 'select',
			'label' => 'Font Transformation',
			'section' => 'secondary_header_logo',
			'choices' => array(
				'none' => 'None',
				'uppercase' => 'Uppercase',
				'lowercase' => 'Lowercase',
				'capitalize' => 'Capitalize',
			),
		)
	);

	//Secondary Header Logo Tagline Styling title
	$wp_customize->add_setting(
		'secondary_header_logo_tagline_styling_title',
		array(
			'default' => '',
			'sanitize_callback' => 'pe_sanitize_header_title',
		)
	);
	$wp_customize->add_control( new WP_Customize_Title_Area(
		$wp_customize,
		'secondary_header_logo_tagline_styling_title',
		array(
			'label'	=> __( 'Tagline' ),
			'section' => 'secondary_header_logo',
			'settings' => 'secondary_header_logo_tagline_styling_title',
		)
	));

	//Secondary Header Logo Site Tagline
	$wp_customize->add_setting(
			'secondary_header_tagline',
			array(
					'default' => 'Craft a beautiful Wordpress Website',
					'transport' => 'postMessage',
					'sanitize_callback' => 'sanitize_text_field',
			)
	);
	$wp_customize->add_control(
			'secondary_header_tagline',
			array(
					'label' => 'Tagline',
					'description'	=> __( 'Include written tagline below text logo' ),
					'section' => 'secondary_header_logo',
					'type' => 'text',
			)
	);

	//Line Space
	$wp_customize->add_setting(
		'secondary_header_layout_space_seven',
		array(
			'default' => '',
			'sanitize_callback' => 'pe_sanitize_line_space',
		)
	);
	$wp_customize->add_control( new WP_Line_Space(
		$wp_customize,
		'secondary_header_layout_space_seven',
		array(
			'section' => 'secondary_header_logo',
			'settings' => 'secondary_header_layout_space_seven',
		)
	));

	//Secondary Header Logo Tagline Text Color
	$wp_customize->add_setting(
		'secondary_header_logo_tagline_text_color',
		array(
			'default' => '#FFF',
			'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'secondary_header_logo_tagline_text_color',
			array(
				'label' => 'Font Color',
				'section' => 'secondary_header_logo',
				'settings' => 'secondary_header_logo_tagline_text_color',
			)
		)
	);

	//Secondary Header Logo Tagline text font
	$wp_customize->add_setting(
		'secondary_header_logo_tagline_fonts',
		array(
			'default' => '"Helvetica Neue",Helvetica,Arial,sans-serif',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'secondary_header_logo_tagline_fonts',
		array(
			'type' => 'select',
			'label' => 'Font Style',
			'section' => 'secondary_header_logo',
			'choices' => array(
				'Arial,"Helvetica Neue",Helvetica,sans-serif' => 'Arial',
				'"Arial Narrow",Arial,sans-serif' => 'Arial Narrow',
				'Calibri,Candara,Segoe,"Segoe UI",Optima,Arial,sans-serif' => 'Calibri',
				'Candara,Calibri,Segoe,"Segoe UI",Optima,Arial,sans-serif' => 'Candara',
				'Futura,"Trebuchet MS",Arial,sans-serif' => 'Futura',
				'Geneva,Tahoma,Verdana,sans-serif' => 'Geneva',
				'"Gill Sans","Gill Sans MT",Calibri,sans-serif' => 'Gill Sans',
				'"Helvetica Neue",Helvetica,Arial,sans-serif' => 'Helvetica Neue',
				'Tahoma,Verdana,Segoe,sans-serif' => 'Tahoma',
				'"Segoe UI",Frutiger,"Frutiger Linotype","Dejavu Sans","Helvetica Neue",Arial,sans-serif' => 'Segoe UI',
				'"Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif' => 'Trebuchet MS',
				'Verdana,Geneva,sans-serif' => 'Verdana,Geneva,sans-serif',
				'"Big Caslon","Book Antiqua","Palatino Linotype",Georgia,serif' => 'Big Caslon',
				'"Book Antiqua",Palatino,"Palatino Linotype","Palatino LT STD",Georgia,serif' => 'Book Antiqua',
				'"Calisto MT","Bookman Old Style",Bookman,"Goudy Old Style",Garamond,"Hoefler Text","Bitstream Charter",Georgia,serif' => 'Calisto MT',
				'Cambria,Georgia,serif' => 'Cambria',
				'Georgia,Times,"Times New Roman",serif' => 'Georgia',
				'"Lucida Bright",Georgia,serif' => 'Lucida Bright',
				'Palatino,"Palatino Linotype","Palatino LT STD","Book Antiqua",Georgia,serif' => 'Palatino',
				'Perpetua,Baskerville,"Big Caslon","Palatino Linotype",Palatino,"URW Palladio L","Nimbus Roman No9 L",serif' => 'Perpetua',
				'TimesNewRoman,"Times New Roman",Times,Baskerville,Georgia,serif' => 'Times New Roman',
			),
		)
	);

	//Secondary Header Logo Tagline Font Size
	$wp_customize->add_setting(
		'secondary_header_logo_tagline_font_size',
		array(
			'default' => '14',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_range',
		)
	);
	$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'secondary_header_logo_tagline_font_size', array(
		'type'        => 'range',
		'priority'    => 10,
		'section'     => 'secondary_header_logo',
		'label'       => 'Font Size',
		'type' => __(" pixels"),
		'input_attrs' => array(
			'min'   => 0,
			'max'   => 50,
			'step'  => 2,
		),
		)
	) );

	//Secondary Header Logo Tagline Font Weight
	$wp_customize->add_setting(
		'secondary_header_logo_tagline_font_weight',
		array(
			'default' => 'normal',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_select',
		)
	);
	$wp_customize->add_control(
		new WP_button_select(
			$wp_customize,
			'secondary_header_logo_tagline_font_weight',
			array(
				'settings'		=> 'secondary_header_logo_tagline_font_weight',
				'section'		=> 'secondary_header_logo',
				'label' => 'Font Weight',
				'choices'		=> array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'lighter' => 'Light',
				)
			)
		)
	);

	//Secondary Header Logo Tagline Font Transformation
	$wp_customize->add_setting(
		'secondary_header_logo_tagline_font_transformation',
		array(
			'default' => 'none',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'secondary_header_logo_tagline_font_transformation',
		array(
			'type' => 'select',
			'label' => 'Font Transformation',
			'section' => 'secondary_header_logo',
			'choices' => array(
				'none' => 'None',
				'uppercase' => 'Uppercase',
				'lowercase' => 'Lowercase',
				'capitalize' => 'Capitalize',
			),
		)
	);

	//Secondary Header Logo Tagline Position
	$wp_customize->add_setting(
		'secondary_header_logo_tagline_position',
			array(
					'default' => '1',
					'transport' => 'postMessage',
					'sanitize_callback' => 'pe_sanitize_checkbox',
			)
	);
	$wp_customize->add_control(
		'secondary_header_logo_tagline_position',
		array(
			'type' => 'checkbox',
			'label' => 'Display tagline on same line as title text',
			'section' => 'secondary_header_logo',
			'settings' => 'secondary_header_logo_tagline_position',
		)
	);

	$wp_customize->add_section('secondary_header_menu_styling', array('title' => 'Menu Styling','panel' => 'header_two','priority' => 30,));

	//Secondary Header Menu Styling Title
	$wp_customize->add_setting(
		'secondary_header_menu_options_title',
		array(
			'default' => '',
			'sanitize_callback' => 'pe_sanitize_header_title',
		)
	);
	$wp_customize->add_control( new WP_Customize_Grand_Title_Area(
		$wp_customize,
		'secondary_header_menu_options_title',
		array(
			'label'	=> __( 'Menu Styling' ),
			'section' => 'secondary_header_menu_styling',
			'settings' => 'secondary_header_menu_options_title',
		)
	));

	//Secondary Header Menu Layout Title
	$wp_customize->add_setting(
		'secondary_header_menu_layout',
		array(
			'default' => '',
			'sanitize_callback' => 'pe_sanitize_header_title',
		)
	);
	$wp_customize->add_control( new WP_Customize_Title_Area(
		$wp_customize,
		'secondary_header_menu_layout',
		array(
			'label'	=> __( 'Layout' ),
			'section' => 'secondary_header_menu_styling',
			'settings' => 'secondary_header_menu_layout',
		)
	));

	//Secondary Header Menu Height
	$wp_customize->add_setting(
		'secondary_header_menu_height',
		array(
			'default' => '14',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_range',
		)
	);
	$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'secondary_header_menu_height', array(
		'type'        => 'range',
		'priority'    => 10,
		'section'     => 'secondary_header_menu_styling',
		'label'       => 'Vertical Button Height',
		'description'	=> __( 'Adjust height of menu buttons' ),
		'type' => __(" pixels"),
		'input_attrs' => array(
			'min'   => 0,
			'max'   => 50,
			'step'  => 1,
		),
		)
	) );

	//Secondary Header Menu Spacing
	$wp_customize->add_setting(
		'secondary_header_menu_spacing',
		array(
			'default' => '14',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_range',
		)
	);
	$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'secondary_header_menu_spacing', array(
		'type'        => 'range',
		'priority'    => 10,
		'section'     => 'secondary_header_menu_styling',
		'label'       => 'Horizontal Button Spacing',
		'description'	=> __( 'Adjust width of menu buttons' ),
		'type' => __(" pixels"),
		'input_attrs' => array(
			'min'   => 0,
			'max'   => 25,
			'step'  => 1,
		),
		)
	) );

	//Secondary Header Menu Spacing
	$wp_customize->add_setting(
		'secondary_header_menu_separation',
		array(
			'default' => '0',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_range',
		)
	);
	$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'secondary_header_menu_separation', array(
		'type'        => 'range',
		'priority'    => 10,
		'section'     => 'secondary_header_menu_styling',
		'label'       => 'Horizontal Button Separation',
		'description'	=> __( 'Add horizontal spacing between menu buttons' ),
		'type' => __(" pixels"),
		'input_attrs' => array(
			'min'   => 0,
			'max'   => 25,
			'step'  => 1,
		),
		)
	) );

	//Secondary Header Menu Alignment
	$wp_customize->add_setting(
		'secondary_header_menu_alignment',
		array(
			'default' => 'left',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_select',
		)
	);
	$wp_customize->add_control(
		new WP_button_select(
			$wp_customize,
			'secondary_header_menu_alignment',
			array(
				'settings'		=> 'secondary_header_menu_alignment',
				'section'		=> 'secondary_header_menu_styling',
				'label' => 'Menu Alignment',
				'choices'		=> array(
					'left' => 'Left',
					'center' => 'Center',
					'right' => 'Right',
				)
			)
		)
	);

	//Secondary Header Menu Font Styling Title
	$wp_customize->add_setting(
		'secondary_header_menu_styling_title',
		array(
			'default' => '',
			'sanitize_callback' => 'pe_sanitize_header_title',
		)
	);
	$wp_customize->add_control( new WP_Customize_Title_Area(
		$wp_customize,
		'secondary_header_menu_styling_title',
		array(
			'label'	=> __( 'Font Styling' ),
			'section' => 'secondary_header_menu_styling',
			'settings' => 'secondary_header_menu_styling_title',
		)
	));

	//Secondary Header Menu Link Color
	$wp_customize->add_setting(
		'secondary_header_menu_link_color',
		array(
			'default' => '#FFF',
			'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'secondary_header_menu_link_color',
			array(
				'label' => 'Font Color',
				'section' => 'secondary_header_menu_styling',
				'settings' => 'secondary_header_menu_link_color',
			)
		)
	);

	//Secondary Header Menu Link font
	$wp_customize->add_setting(
		'secondary_header_menu_fonts',
		array(
			'default' => '"Helvetica Neue",Helvetica,Arial,sans-serif',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'secondary_header_menu_fonts',
		array(
			'type' => 'select',
			'label' => 'Font Style',
			'section' => 'secondary_header_menu_styling',
			'choices' => array(
				'Arial,"Helvetica Neue",Helvetica,sans-serif' => 'Arial',
				'"Arial Narrow",Arial,sans-serif' => 'Arial Narrow',
				'Calibri,Candara,Segoe,"Segoe UI",Optima,Arial,sans-serif' => 'Calibri',
				'Candara,Calibri,Segoe,"Segoe UI",Optima,Arial,sans-serif' => 'Candara',
				'Futura,"Trebuchet MS",Arial,sans-serif' => 'Futura',
				'Geneva,Tahoma,Verdana,sans-serif' => 'Geneva',
				'"Gill Sans","Gill Sans MT",Calibri,sans-serif' => 'Gill Sans',
				'"Helvetica Neue",Helvetica,Arial,sans-serif' => 'Helvetica Neue',
				'Tahoma,Verdana,Segoe,sans-serif' => 'Tahoma',
				'"Segoe UI",Frutiger,"Frutiger Linotype","Dejavu Sans","Helvetica Neue",Arial,sans-serif' => 'Segoe UI',
				'"Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif' => 'Trebuchet MS',
				'Verdana,Geneva,sans-serif' => 'Verdana,Geneva,sans-serif',
				'"Big Caslon","Book Antiqua","Palatino Linotype",Georgia,serif' => 'Big Caslon',
				'"Book Antiqua",Palatino,"Palatino Linotype","Palatino LT STD",Georgia,serif' => 'Book Antiqua',
				'"Calisto MT","Bookman Old Style",Bookman,"Goudy Old Style",Garamond,"Hoefler Text","Bitstream Charter",Georgia,serif' => 'Calisto MT',
				'Cambria,Georgia,serif' => 'Cambria',
				'Georgia,Times,"Times New Roman",serif' => 'Georgia',
				'"Lucida Bright",Georgia,serif' => 'Lucida Bright',
				'Palatino,"Palatino Linotype","Palatino LT STD","Book Antiqua",Georgia,serif' => 'Palatino',
				'Perpetua,Baskerville,"Big Caslon","Palatino Linotype",Palatino,"URW Palladio L","Nimbus Roman No9 L",serif' => 'Perpetua',
				'TimesNewRoman,"Times New Roman",Times,Baskerville,Georgia,serif' => 'Times New Roman',
			),
		)
	);

	//Secondary Header Menu Font Size
	$wp_customize->add_setting(
		'secondary_header_menu_font_size',
		array(
			'default' => '14',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_range',
		)
	);
	$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'secondary_header_menu_font_size', array(
		'type'        => 'range',
		'priority'    => 10,
		'section'     => 'secondary_header_menu_styling',
		'label'       => 'Font Size',
		'type' => __(" pixels"),
		'input_attrs' => array(
			'min'   => 8,
			'max'   => 50,
			'step'  => 1,
		),
		)
	) );

	//Secondary Header Menu Font Weight
	$wp_customize->add_setting(
		'secondary_header_menu_font_weight',
		array(
			'default' => 'normal',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_select',
		)
	);
	$wp_customize->add_control(
		new WP_button_select(
			$wp_customize,
			'secondary_header_menu_font_weight',
			array(
				'settings'		=> 'secondary_header_menu_font_weight',
				'section'		=> 'secondary_header_menu_styling',
				'label' => 'Font Weight',
				'choices'		=> array(
					'normal' => 'Normal',
					'bold' => 'Bold',
					'lighter' => 'Light',
				)
			)
		)
	);

    //Secondary Header Menu Font Transformation
    $wp_customize->add_setting(
        'secondary_header_menu_font_transformation',
        array(
            'default' => 'capitalize',
						'transport' => 'postMessage',
						'sanitize_callback' => 'pe_sanitize_select',
        )
    );
    $wp_customize->add_control(
        'secondary_header_menu_font_transformation',
        array(
            'type' => 'select',
            'label' => 'Font Transformation',
            'section' => 'secondary_header_menu_styling',
            'choices' => array(
                'none' => 'None',
                'uppercase' => 'Uppercase',
                'lowercase' => 'Lowercase',
                'capitalize' => 'Capitalize',
            ),
        )
    );

		//Secondary Header Menu Link Decoration
		$wp_customize->add_setting(
			'secondary_header_menu_link_decoration',
			array(
				'default' => 'none',
				'transport' => 'postMessage',
				'sanitize_callback' => 'pe_sanitize_select',
			)
		);
		$wp_customize->add_control(
			'secondary_header_menu_link_decoration',
			array(
				'type' => 'select',
				'label' => 'Font Decoration',
				'section' => 'secondary_header_menu_styling',
				'choices' => array(
					'none' => 'None',
					'underline' => 'Underline',
					'overline' => 'Overline',
					'line-through' => 'Line-through',
				),
			)
		);

		//Line Space
		$wp_customize->add_setting(
			'secondary_header_layout_space_eight',
			array(
				'default' => '',
				'sanitize_callback' => 'pe_sanitize_line_space',
			)
		);
		$wp_customize->add_control( new WP_Line_Space(
			$wp_customize,
			'secondary_header_layout_space_eight',
			array(
				'section' => 'secondary_header_menu_styling',
				'settings' => 'secondary_header_layout_space_eight',
			)
		));

	//Secondary Header Menu Link Hover Color
	$wp_customize->add_setting(
		'secondary_header_menu_link_hover_color',
		array(
			'default' => '#ba2a2a',
			'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'secondary_header_menu_link_hover_color',
			array(
				'label' => 'Button Hover Text Color',
				'description'	=> __( 'Assign new font color when user hovers on link' ),
				'section' => 'secondary_header_menu_styling',
				'settings' => 'secondary_header_menu_link_hover_color',
			)
		)
	);

	//Secondary Header Menu Link Alignment
	$wp_customize->add_setting(
		'secondary_header_menu_link_alignment',
		array(
			'default' => 'left',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_select',
		)
	);
	$wp_customize->add_control(
		new WP_button_select(
			$wp_customize,
			'secondary_header_menu_link_alignment',
			array(
				'settings'		=> 'secondary_header_menu_link_alignment',
				'section'		=> 'secondary_header_menu_styling',
				'label' => 'Drop-down Menu Text Alignment',
				'description'	=> __( 'Adjust the alignment of links in drop-down menus' ),
				'choices'		=> array(
					'left' => 'Left',
					'center' => 'Center',
					'right' => 'Right',
				)
			)
		)
	);

	//Secondary Header Menu Sub-Menu Vertical spacing
	$wp_customize->add_setting(
		'secondary_header_menu_sub_vertical_spacing',
		array(
			'default' => '10',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_range',
		)
	);
	$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'secondary_header_menu_sub_vertical_spacing', array(
		'type'        => 'range',
		'priority'    => 10,
		'section'     => 'secondary_header_menu_styling',
		'label'       => 'Drop-down Menu Vertical Spacing',
		'type' => __(" pixels"),
		'input_attrs' => array(
			'min'   => 0,
			'max'   => 30,
			'step'  => 1,
		),
		)
	) );

	//Secondary Header Background Title
	$wp_customize->add_setting(
		'secondary_header_menu_background_title',
		array(
			'default' => '',
			'sanitize_callback' => 'pe_sanitize_header_title',
		)
	);
	$wp_customize->add_control( new WP_Customize_Title_Area(
		$wp_customize,
		'secondary_header_menu_background_title',
		array(
			'label'	=> __( 'Background' ),
			'section' => 'secondary_header_menu_styling',
			'settings' => 'secondary_header_menu_background_title',
		)
	));

	//Secondary Header Menu Background Visibility
	$wp_customize->add_setting(
		'secondary_header_menu_background_visible',
		array(
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'secondary_header_menu_background_visible',
		array(
			'type' => 'checkbox',
			'label' => 'Disable Background Visibility',
			'description'	=> __( 'Remove background from buttons and make transparent' ),
			'section' => 'secondary_header_menu_styling',
			'settings' => 'secondary_header_menu_background_visible',
		)
	);

	//Line Space
	$wp_customize->add_setting(
		'secondary_header_layout_space_nine',
		array(
			'default' => '',
			'sanitize_callback' => 'pe_sanitize_line_space',
		)
	);
	$wp_customize->add_control( new WP_Line_Space(
		$wp_customize,
		'secondary_header_layout_space_nine',
		array(
			'section' => 'secondary_header_menu_styling',
			'settings' => 'secondary_header_layout_space_nine',
		)
	));

	//Secondary Header Menu Background Color
	$wp_customize->add_setting(
		'secondary_header_menu_background_color',
		array(
			'default' => '#333',
			'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'secondary_header_menu_background_color',
			array(
				'label' => 'Button Background Color',
				'section' => 'secondary_header_menu_styling',
			)
		)
	);

	//Secondary Header Menu Background Image
	$wp_customize->add_setting( 'secondary_header_menu_background_image',
	array(
		'transport' => 'postMessage',
		'sanitize_callback' => 'pe_sanitize_image',
	)
 );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'secondary_header_menu_background_image',
			array(
				'label' => 'Button Background image',
				'section' => 'secondary_header_menu_styling',
			)
		)
	);

	//Secondary Header Hover Background Color
	$wp_customize->add_setting(
		'secondary_header_menu_hover_background_color',
		array(
			'default' => '#444',
			'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'secondary_header_menu_hover_background_color',
			array(
				'label' => 'Button Hover Background Color',
				'description'	=> __( 'Assign new background color when user hovers on button' ),
				'section' => 'secondary_header_menu_styling',
			)
		)
	);

	//Secondary Header Hover Background Image
	$wp_customize->add_setting( 'secondary_header_menu_hover_background_image',
	array(
		'transport' => 'postMessage',
		'sanitize_callback' => 'pe_sanitize_image',
	)
 );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'secondary_header_menu_hover_background_image',
			array(
				'label' => 'Button Hover Background Image',
				'description'	=> __( 'Add background image to display when user hovers on button' ),
				'section' => 'secondary_header_menu_styling',
			)
		)
	);

	//Secondary Header Menu Background Image position
	$wp_customize->add_setting(
		'secondary_header_menu_background_image_position',
		array(
			'default' => 'left top',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'secondary_header_menu_background_image_position',
		array(
			'type' => 'select',
			'label' => 'Background Image Position',
			'section' => 'secondary_header_menu_styling',
			'choices' => array(
				'left top' => 'Top Left',
				'left center' => 'Center Left',
				'left bottom' => 'Bottom Left',
				'right top' => 'Top Right',
				'right center' => 'Center Right',
				'right bottom' => 'Bottom Right',
				'center top' => 'Top Center',
				'center center' => 'Center Center',
				'center bottom' => 'Bottom Center',
			),
		)
	);

	//Secondary Header Menu Background Image repeat
	$wp_customize->add_setting(
		'secondary_header_menu_background_image_repeat',
		array(
			'default' => 'no-repeat',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'secondary_header_menu_background_image_repeat',
		array(
			'type' => 'select',
			'label' => 'Background Image Repetition',
			'section' => 'secondary_header_menu_styling',
			'choices' => array(
				'no-repeat' => 'No Repeat',
				'repeat' => 'Repeat',
				'repeat-x' => 'Repeat Horizontally',
				'repeat-y' => 'Repeat Vertically',
			),
		)
	);

	//Secondary Header Menu Borders Title
	$wp_customize->add_setting(
		'secondary_header_menu_borders_title',
		array(
			'default' => '',
			'sanitize_callback' => 'pe_sanitize_header_title',
		)
	);
	$wp_customize->add_control( new WP_Customize_Title_Area(
		$wp_customize,
		'secondary_header_menu_borders_title',
		array(
			'label'	=> __( 'Borders' ),
			'section' => 'secondary_header_menu_styling',
			'settings' => 'secondary_header_menu_borders_title',
		)
	));

	//Secondary Header Menu Border Style
	$wp_customize->add_setting(
		'secondary_header_menu_border_style',
		array(
			'default' => 'none',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'secondary_header_menu_border_style',
		array(
			'type' => 'select',
			'label' => 'Border',
			'section' => 'secondary_header_menu_styling',
			'choices' => array(
				'none' => 'None',
				'dotted' => 'Dotted',
				'dashed' => 'Dashed',
				'solid' => 'Solid',
				'double' => 'Double',
				'groove' => 'Groove',
			),
		)
	);

	//Secondary Header Menu Border Color
	$wp_customize->add_setting(
		'secondary_header_menu_border_color',
		array(
			'default' => '#444',
			'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'secondary_header_menu_border_color',
			array(
				'label' => 'Border Color',
				'section' => 'secondary_header_menu_styling',
				'settings' => 'secondary_header_menu_border_color',
			)
		)
	);

	//Secondary Header Menu Border Top
	$wp_customize->add_setting(
		'secondary_header_menu_border_top',
		array(
			'default' => '0',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_range',
		)
	);
	$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'secondary_header_menu_border_top', array(
		'type'        => 'range',
		'priority'    => 10,
		'section'     => 'secondary_header_menu_styling',
		'label'       => 'Top Border',
		'type' => __(" pixels"),
		'input_attrs' => array(
			'min'   => 0,
			'max'   => 50,
			'step'  => 1,
		),
		)
	) );

	//Secondary Header Menu Border Bottom
	$wp_customize->add_setting(
		'secondary_header_menu_border_bottom',
		array(
			'default' => '0',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_range',
		)
	);
	$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'secondary_header_menu_border_bottom', array(
		'type'        => 'range',
		'priority'    => 10,
		'section'     => 'secondary_header_menu_styling',
		'label'       => 'Bottom Border',
		'type' => __(" pixels"),
		'input_attrs' => array(
			'min'   => 0,
			'max'   => 50,
			'step'  => 1,
		),
		)
	) );

	//Secondary Header Menu Border Left
	$wp_customize->add_setting(
		'secondary_header_menu_border_left',
		array(
			'default' => '0',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_range',
		)
	);
	$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'secondary_header_menu_border_left', array(
		'type'        => 'range',
		'priority'    => 10,
		'section'     => 'secondary_header_menu_styling',
		'label'       => 'Left Border',
		'type' => __(" pixels"),
		'input_attrs' => array(
			'min'   => 0,
			'max'   => 50,
			'step'  => 1,
		),
		)
	) );

	//Secondary Header Menu Border Right
	$wp_customize->add_setting(
		'secondary_header_menu_border_right',
		array(
			'default' => '0',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_range',
		)
	);
	$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'secondary_header_menu_border_right', array(
		'type'        => 'range',
		'priority'    => 10,
		'section'     => 'secondary_header_menu_styling',
		'label'       => 'Right Border',
		'type' => __(" pixels"),
		'input_attrs' => array(
			'min'   => 0,
			'max'   => 50,
			'step'  => 1,
		),
		)
	) );

	//Secondary Header Menu Border Radius
	$wp_customize->add_setting(
		'secondary_header_menu_border_radius',
		array(
			'default' => '0',
			'transport' => 'postMessage',
			'sanitize_callback' => 'pe_sanitize_range',
		)
	);
	$wp_customize->add_control(
			new WP_range(
				$wp_customize, 'secondary_header_menu_border_radius', array(
		'type'        => 'range',
		'priority'    => 10,
		'section'     => 'secondary_header_menu_styling',
		'label'       => 'Border Rounding',
		'type' => __(" pixels"),
		'input_attrs' => array(
			'min'   => 0,
			'max'   => 50,
			'step'  => 2,
		),
		)
	) );
?>
