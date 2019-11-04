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
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control ($wp_customize, '1902_footerTextControl', array(
        'label'          => __( 'Enter in text for the footer', '1902Custom' ),
        'section'        => 'footerTextArea',
        'settings'       => '1902_footerText',
        'type'           => 'text'

    )
    )
);


$wp_customize->add_setting( '1902_headerImageTextColour' , array(
    'default'   => '#d8aff0',
    'transport' => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_headerImageTextColourControl', array(
    'label'      => __( 'Header Image Text Colour', '1902Custom' ),
    'description' => 'Change the header image text colour',
    'section'    => 'colors',
    'settings'   => '1902_headerImageTextColour',
) ) );


$wp_customize->add_setting( '1902_cardTitleBackgroundColor' , array(
    'default'   => '#40edb6',
    'transport' => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_cardTitleBackgroundColorControl', array(
    'label'      => __( 'Header Image Text Colour', '1902Custom' ),
    'description' => 'Change the header of the cards background colour',
    'section'    => 'colors',
    'settings'   => '1902_cardTitleBackgroundColor',
) ) );


$wp_customize->add_setting( '1902_bottomImage' , array(
    'default' => '',
    'transport' => 'refresh',
) );

$wp_customize->add_section( '1902_bottomImageSection' , array(
    'title'      => __('Bottom Image','1902Custom'),
    'priority'   => 31,
) );

$wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize, '1902_bottomImageControl', array(
        'label'      => __( 'Upload a bottom image', '1902Custom' ),
        'section'    => '1902_bottomImageSection',
        'settings'   => '1902_bottomImage',
    )
    )
);

$wp_customize->add_setting( '1902_bottomImageText' , array(
    'default'   => '',
    'transport' => 'refresh',
) );

$wp_customize->add_control(
    new WP_Customize_Control( $wp_customize, '1902_footerTextControl', array(
        'label'          => __( 'Enter in text for under the bottom image', '1902Custom' ),
        'section'        => '1902_bottomImageSection',
        'settings'       => '1902_bottomImageText',
        'type'           => 'text'

    )
    )
);


$wp_customize->add_setting( '1902_sidebarLocation' , array(
    'default' => 'left',
    'transport' => 'refresh',
) );

$wp_customize->add_section( '1902_sidebarLocationSection' , array(
    'title'      => __('Sidebar Location','1902Custom'),
    'priority'   => 32,
) );

$wp_customize->add_control(
    new WP_Customize_Control( $wp_customize, '1902_sidebarLocationControl', array(
        'label'    => __( 'Control Label', '1902Custom' ),
        'section'  => '1902_sidebarLocationSection',
        'settings' => '1902_sidebarLocation',
        'type'     => 'radio',
        'choices'  => array(
            'left'  => 'left',
            'right' => 'right',
        ),
    )
    ) );


    $wp_customize->add_setting( '1902_postLayout' , array(
        'default' => 'grid',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_section( '1902_postLayoutSection' , array(
        'title'      => __('Post Layout','1902Custom'),
        'priority'   => 32,
    ) );

    $wp_customize->add_control(
        new WP_Customize_Control( $wp_customize, '1902_postLayoutControl', array(
            'label'    => __( 'Control Label', '1902Custom' ),
            'section'  => '1902_postLayoutSection',
            'settings' => '1902_postLayout',
            'type'     => 'radio',
            'choices'  => array(
                'grid'  => 'grid',
                'rows' => 'rows',
            ),
        )
        ) );


        $wp_customize->add_section( '1902_slideshowSection' , array(
       'title'      => __( 'Slideshow', '1902Custom' ),
       'priority'   => 30,
   ) );
   for ($i=1; $i <=3 ; $i++) {
       $wp_customize->add_setting( '1902_slide_'.$i , array(
           'default'   => '',
           'transport' => 'refresh',
       ) );
       $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '1902_slide_'.$i.'Control', array(
         'label'      => __( 'Add Slide ' . $i, '1902Custom' ),
         'section'    => '1902_slideshowSection',
         'settings'   => '1902_slide_'.$i,
       ) ) );
   }


        // $wp_customize->add_setting( '1902_carousel1' , array(
        //     'default' => '',
        //     'transport' => 'refresh',
        // ) );

        // $wp_customize->add_control(
        //     new WP_Customize_Image_Control( $wp_customize, '1902_carousel1Control', array(
        //         'label'      => __( 'Upload a carousel image', '1902Custom' ),
        //         'section'    => '1902_carouselSection',
        //         'settings'   => '1902_carousel1',
        //     )
        //     )
        // );

        // $wp_customize->add_setting( '1902_carousel2' , array(
        //     'default' => '',
        //     'transport' => 'refresh',
        // ) );

        // $wp_customize->add_control(
        //     new WP_Customize_Image_Control( $wp_customize, '1902_carousel2Control', array(
        //         'label'      => __( 'Upload a carousel image', '1902Custom' ),
        //         'section'    => '1902_carouselSection',
        //         'settings'   => '1902_carousel2',
        //     )
        //     )
        // );
        // $wp_customize->add_setting( '1902_carousel3' , array(
        //     'default' => '',
        //     'transport' => 'refresh',
        // ) );

        // $wp_customize->add_control(
        //     new WP_Customize_Image_Control( $wp_customize, '1902_carousel3Control', array(
        //         'label'      => __( 'Upload a carousel image', '1902Custom' ),
        //         'section'    => '1902_carouselSection',
        //         'settings'   => '1902_carousel3',
        //     )
        //     )
        // );


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
        .headerImageText{
            color: <?php echo get_theme_mod('1902_headerImageTextColour', '#d8aff0') ?>;
        }
        .cardTitleBackgroundColor{
            background-color: <?php echo get_theme_mod('1902_cardTitleBackgroundColor', '#40edb6') ?>
        }
        </style>
        <?php
    }
    add_action( 'wp_head', 'mytheme_customize_css');
