<?php

function mytheme_customize_register( $wp_customize ) {
    //All our sections, settings, and controls will be added here

    $wp_customize->add_setting( '1902_backgroundColour' , array(
        'default'   => '#28ede0',
        'transport' => 'refresh',
    ) );

    // $wp_customize->add_section( 'mytheme_new_section_name' , array(
    //     'title'      => __( 'Visible Section Name', 'mytheme' ),
    //     'priority'   => 30,
    // ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_backgroundColourControl', array(
        'label'      => __( 'Background Colour', '1902Custom' ),
        'description' => 'Change the background colour',
        'section'    => 'colors',
        'settings'   => '1902_backgroundColour',
    ) ) );

    $wp_customize->add_setting( '1902_headerFooterColour' , array(
        'default'   => '#17b4ee',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_headerFooterColour', array(
        'label'      => __( 'Header and Footer Colour', '1902Custom' ),
        'description' => 'Change the header and footer colour',
        'section'    => 'colors',
        'settings'   => '1902_headerFooterColour',
    ) ) );

    $wp_customize->add_section( 'footerTextArea' , array(
        'title'      => __( 'Footer Text', '1902Custom' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( '1902_footerText' , array(
        'default'   => 'hello',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            '1902_footerText',
            array(
                'label'          => __( 'Enter in text for the footer', '1902Custom' ),
                'section'        => 'footerTextArea',
                'settings'       => '1902_footerText',
                'type'           => 'text'

            )
            )
        );



}
add_action( 'customize_register', 'mytheme_customize_register' );

function mytheme_customize_css()
{
    ?>
    <style type="text/css">
    body {
        background-color: <?php echo get_theme_mod('1902_backgroundColour', '#28ede0'); ?>;
    }
    .header {
        background-color: <?php echo get_theme_mod('1902_headerFooterColour', '#17b4ee'); ?>;
    }
    .footer {
        background-color: <?php echo get_theme_mod('1902_headerFooterColour', '#17b4ee'); ?>;
    }
    </style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');
