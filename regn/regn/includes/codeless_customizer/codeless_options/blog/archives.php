<?php

Kirki::add_section('cl_blog_archives', array(
	'title' => esc_attr__('Archives', 'regn') ,
	'panel' => 'cl_blog',
	'type' => '',
	'priority' => 11,
	'capability' => 'edit_theme_options'
));

Kirki::add_field( 'cl_regn', array(
    'settings' => 'blog_style',
    'label'    => esc_attr__( 'Archives Style', 'regn' ),
    'tooltip' => esc_attr__( 'Categories, archives etc', 'regn' ),
    'section'  => 'cl_blog_archives',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'default',
    'choices'     => array(
        'default'  => esc_attr__( 'Default', 'regn' ),
        'media'     => esc_attr__('Media', 'regn'),
        'media-alt' => esc_attr__('Media ALT', 'regn'),
        'modern'     => esc_attr__('Modern', 'regn'),
        'noimage'   => esc_attr__('No Image', 'regn')
    ),
) );


Kirki::add_field( 'cl_regn', array(
    'settings' => 'blog_module',
    'label'    => esc_attr__( 'Archives Module', 'regn' ),
    'tooltip' => esc_attr__( 'Categories, archives etc', 'regn' ),
    'section'  => 'cl_blog_archives',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'isotope',
    'choices'     => array(
        'isotope'  => esc_attr__( 'Isotope', 'regn' ),
        'carousel'  => esc_attr__( 'Carousel', 'regn' ),
        'grid-blocks'  => esc_attr__( 'Grid Blocks', 'regn' ),
    ),
) );

Kirki::add_field( 'cl_regn', array(
    'settings' => 'blog_grid_block',
    'description'    => esc_attr__( 'Archives Grid Blocks', 'regn' ),
    'section'  => 'cl_blog_archives',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'grid-1',
    'choices'     => array(
        'grid-1'  => esc_attr__( 'Grid Block 1', 'regn' ),
        'grid-2'  => esc_attr__( 'Grid Block 2', 'regn' ),
        'grid-3'  => esc_attr__( 'Grid Block 3', 'regn' ),
        'grid-6'  => esc_attr__( 'Grid Block 6', 'regn' ),
        'grid-8'  => esc_attr__( 'Grid Block 8', 'regn' ),
        'grid-9'  => esc_attr__( 'Grid Block 9', 'regn' ),
        'grid-10'  => esc_attr__( 'Grid Block 10', 'regn' ),
        'grid-11'  => esc_attr__( 'Grid Block 11', 'regn' ),
        'grid-14'  => esc_attr__( 'Grid Block 14', 'regn' ),
    ),
    'required' => array(
        array(
			'setting' => 'blog_module',
			'operator' => '==',
			'value' => 'grid-blocks'
        )
    )
) );

Kirki::add_field( 'cl_regn', array(
    'settings' => 'blog_isotope_type',
    'description'    => esc_attr__( 'Archives Isotope Type', 'regn' ),
    'section'  => 'cl_blog_archives',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'masonry',
    'choices'     => array(
        'masonry'  => esc_attr__( 'Masonry', 'regn' ),
        'fitRows'  => esc_attr__( 'Fit Rows', 'regn' ),
        'vertical'  => esc_attr__( 'Vertical', 'regn' ),
        'packery'  => esc_attr__( 'Packery', 'regn' ),
    ),
    'required' => array(
        array(
			'setting' => 'blog_module',
			'operator' => '==',
			'value' => 'isotope'
        )
    )
) );

Kirki::add_field( 'cl_regn', array(
    'settings' => 'blog_columns',
    'description'    => esc_attr__( 'Archives Columns', 'regn' ),
    'section'  => 'cl_blog_archives',
    'type'     => 'select',
    'priority' => 10,
    'default'  => '1',
    'choices'     => array(
        '1'  => esc_attr__( '1 Column', 'regn' ),
        '2'  => esc_attr__( '2 Columns', 'regn' ),
        '3'  => esc_attr__( '3 Columns', 'regn' ),
        '4'  => esc_attr__( '4 Columns', 'regn' ),
        '5'  => esc_attr__( '5 Columns', 'regn' ),
    ),
    'required' => array(
        array(
			'setting' => 'blog_module',
			'operator' => '!=',
			'value' => 'grid-blocks'
        )
    )
) );

Kirki::add_field( 'cl_regn', array(
		    
    'settings' => 'blog_anim_start',
    'label'    => '',
    'section'  => 'cl_blog_archives',
    'type'     => 'groupdivider',

));


Kirki::add_field( 'cl_regn', array(
    'settings' => 'blog_animation',
    'label'    => esc_attr__( 'Archives Items Animation', 'regn' ),
    
    'section'  => 'cl_blog_archives',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'none',
    'choices' => array(
        'none'	=> 'None',
        'top-t-bottom' =>	'Top-Bottom',
        'bottom-t-top' =>	'Bottom-Top',
        'right-t-left' => 'Right-Left',
        'left-t-right' => 'Left-Right',
        'alpha-anim' => 'Fade-In',	
        'zoom-in' => 'Zoom-In',	
        'zoom-out' => 'Zoom-Out',
        'zoom-reverse' => 'Zoom-Reverse',
    ),
    'transport' => 'postMessage'
) );

Kirki::add_field( 'cl_regn', array(
		    
    'settings' => 'blog_excerpt_st',
    'label'    => '',
    'section'  => 'cl_blog_archives',
    'type'     => 'groupdivider',

));

Kirki::add_field( 'cl_regn', array(
    'settings' => 'blog_excerpt',
    'label'    => esc_attr__( 'Archives Auto Excerpt', 'regn' ),
    'tooltip' => esc_attr__( 'If enabled you will see only a small part of content. If disabled all post will show', 'regn' ),
    'section'  => 'cl_blog_archives',
    'type'     => 'switch',
    'priority' => 10,
    'default'  => 1,
    'choices'     => array(
        1  => esc_attr__( 'On', 'regn' ),
        0 => esc_attr__( 'Off', 'regn' ),
    ),
    

) );

Kirki::add_field( 'cl_regn', array(
    'type'        => 'slider',
    'settings'    => 'blog_excerpt_length',
    'label'       => esc_attr__( 'Archives Excerpt Length', 'regn' ),
    'section'     => 'cl_blog_archives',
    'into_group' => true,
    'choices'    => array(
        'min' => 1,
        'max' => 200,
        'step' => 1
    ),
    'default'     => '62',
    'priority'    => 10,
    
));

Kirki::add_field( 'cl_regn', array(
		    
    'settings' => 'blog_pagination_st',
    'label'    => '',
    'section'  => 'cl_blog_archives',
    'type'     => 'groupdivider',

));

Kirki::add_field( 'cl_regn', array(
    'settings' => 'blog_pagination_style',
    'label'    => esc_attr__( 'Archives Pagination', 'regn' ),
    
    'section'  => 'cl_blog_archives',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'numbers',
    'choices'     => array(
        'none'  => esc_attr__( 'No Pagination', 'regn' ),
        'numbers'  => esc_attr__( 'With Page Numbers', 'regn' ),
        'next_prev'  => esc_attr__( 'Next/Prev', 'regn' ),
        'next_prev_ajax'  => esc_attr__( 'Next/Prev Ajax', 'regn' ),
        'load_more'  => esc_attr__( 'Load More Button', 'regn' ),
        'infinite_scroll'  => esc_attr__( 'Infinite Scroll', 'regn' ),
        
    ),
    'transport' => 'postMessage',
    'partial_refresh' => array(
        'blog_pagination_style' => array(
            'selector'            => '.cl-blog-pagination',
            'container_inclusive' => true,
            'render_callback'     => function(){
                codeless_blog_pagination();
            }
        ),
    ),
) );


Kirki::add_field( 'cl_regn', array(
		    
    'settings' => 'blog_filters_st',
    'label'    => '',
    'section'  => 'cl_blog_archives',
    'type'     => 'groupdivider',

));


Kirki::add_field( 'cl_regn', array(
    'settings' => 'blog_filters',
    'label'    => esc_attr__( 'Categories Filter', 'regn' ),
    'tooltip' => esc_attr__( 'Use ajax filter if you are using pagination', 'regn' ),
    'section'  => 'cl_blog_archives',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'disabled',
    'choices'     => array(
        'disabled' => esc_attr__( 'No Filters', 'regn' ),
        'isotope'  => esc_attr__( 'Isotope Filter', 'regn' ),
        'ajax'  => esc_attr__( 'Ajax Filter', 'regn' ),
    ),
) );


Kirki::add_field( 'cl_regn', array(
		    
    'settings' => 'blog_meta_st',
    'label'    => '',
    'section'  => 'cl_blog_archives',
    'type'     => 'groupdivider',

));


Kirki::add_field( 'cl_regn', array(
    'settings' => 'blog_entry_meta_author',
    'label'    => esc_attr__( 'Entry Meta Author', 'regn' ),
    
    'section'  => 'cl_blog_archives',
    'type'     => 'switch',
    'priority' => 10,
    'default'  => 0,
    'choices'     => array(
        1  => esc_attr__( 'On', 'regn' ),
        0 => esc_attr__( 'Off', 'regn' ),
    ),
  
) );

Kirki::add_field( 'cl_regn', array(
    'settings' => 'blog_entry_meta_categories',
    'label'    => esc_attr__( 'Entry Meta Categories', 'regn' ),
    
    'section'  => 'cl_blog_archives',
    'type'     => 'switch',
    'priority' => 10,
    'default'  => 0,
    'choices'     => array(
        1  => esc_attr__( 'On', 'regn' ),
        0 => esc_attr__( 'Off', 'regn' ),
    ),
  
) );


Kirki::add_field( 'cl_regn', array(
    'settings' => 'blog_entry_meta_date',
    'label'    => esc_attr__( 'Entry Meta Date', 'regn' ),
    
    'section'  => 'cl_blog_archives',
    'type'     => 'switch',
    'priority' => 10,
    'default'  => 1,
    'choices'     => array(
        1  => esc_attr__( 'On', 'regn' ),
        0 => esc_attr__( 'Off', 'regn' ),
    ),
  
) );


Kirki::add_field( 'cl_regn', array(
		    
    'settings' => 'blog_tools_st',
    'label'    => '',
    'section'  => 'cl_blog_archives',
    'type'     => 'groupdivider',

));


Kirki::add_field( 'cl_regn', array(
    'settings' => 'blog_entry_tools_share',
    'label'    => esc_attr__( 'Entry Share', 'regn' ),
    
    'section'  => 'cl_blog_archives',
    'type'     => 'switch',
    'priority' => 10,
    'default'  => 0,
    'choices'     => array(
        1  => esc_attr__( 'On', 'regn' ),
        0 => esc_attr__( 'Off', 'regn' ),
    ),
  
) );


Kirki::add_field( 'cl_regn', array(
    'settings' => 'blog_entry_tools_comments_count',
    'label'    => esc_attr__( 'Entry Comments Count', 'regn' ),
    
    'section'  => 'cl_blog_archives',
    'type'     => 'switch',
    'priority' => 10,
    'default'  => 1,
    'choices'     => array(
        1  => esc_attr__( 'On', 'regn' ),
        0 => esc_attr__( 'Off', 'regn' ),
    ),
  
) );

Kirki::add_field( 'cl_regn', array(
    'settings' => 'blog_entry_tools_likes',
    'label'    => esc_attr__( 'Entry Likes', 'regn' ),
    
    'section'  => 'cl_blog_archives',
    'type'     => 'switch',
    'priority' => 10,
    'default'  => 0,
    'choices'     => array(
        1  => esc_attr__( 'On', 'regn' ),
        0 => esc_attr__( 'Off', 'regn' ),
    ),
) );

Kirki::add_field( 'cl_regn', array(
		    
    'settings' => 'blog_image_st',
    'label'    => '',
    'section'  => 'cl_blog_archives',
    'type'     => 'groupdivider',

));

Kirki::add_field( 'cl_regn', array(
    'settings' => 'blog_image_size',
    'label'    => esc_attr__( 'Archives Image Size', 'regn' ),
    'section'  => 'cl_blog_archives', 
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'theme_default',
    'choices'  => codeless_get_additional_image_sizes()
) );


Kirki::add_field( 'cl_regn', array(
    'settings' => 'blog_image_lazyload',
    'label'    => esc_attr__( 'Archives Image Lazyload', 'regn' ),
    'section'  => 'cl_blog_archives', 
    'type'     => 'switch',
    'priority' => 10,
    'default'  => 0,
    'choices'     => array(
        1  => esc_attr__( 'On', 'regn' ),
        0 => esc_attr__( 'Off', 'regn' ),
    )
) );

Kirki::add_field( 'cl_regn', array(
    'settings' => 'blog_image_filter',
    'label'    => esc_attr__( 'Archives Image Filter', 'regn' ),
    
    'section'  => 'cl_blog_archives',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'normal',
    'choices'     => array(
        'normal' => 'normal',
        'darken' => 'darken',
        '_1977' => '1977',
        'aden' => 'aden',
        'brannan' => 'brannan',
        'brooklyn' => 'brooklyn',
        'clarendon' => 'clarendon',
        'earlybird' => 'earlybird',
        'gingham' => 'gingham',
        'hudson' => 'hudson',
        'inkwell' => 'inkwell',
        'kelvin' => 'kelvin',
        'lark' => 'lark',
        'lofi' => 'lo-Fi',
        'maven' => 'maven',
        'mayfair' => 'mayfair',
        'moon' => 'moon',
        'nashville' => 'nashville',
        'perpetua' => 'perpetua',
        'reyes' => 'reyes',
        'rise' => 'rise',
        'slumber' => 'slumber',
        'stinson' => 'stinson',
        'toaster' => 'toaster',
        'valencia' => 'valencia',
        'walden' => 'walden',
        'willow' => 'willow',
        'xpro2' => 'x-pro II'
    )
) );