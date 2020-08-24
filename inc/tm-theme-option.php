<?php
define( 'CS_ACTIVE_FRAMEWORK', true ); // default true
define( 'CS_ACTIVE_METABOX', false ); // default true
define( 'CS_ACTIVE_TAXONOMY', true ); // default true
define( 'CS_ACTIVE_SHORTCODE', true ); // default true
define( 'CS_ACTIVE_CUSTOMIZE', false ); // default true


function philosophy_csf_metabox() {
    CSFramework_Taxonomy::instance(array());
    CSFramework_Metabox::instance( array() );
    CSFramework_Shortcode_Manager::instance( array() );
}

add_action( "init", "philosophy_csf_metabox" );





function philosophy_theme_option_init(){

    $settings = array(
        'menu_title'=>__('Theme Options','octarine'),
        'menu_type'=>'menu',
        // 'menu_parent'=>'themes.php',
        'menu_slug'=>'octarine_option_panel',
        'framework_title'=>__('Octarine Options','octarine'),
        'menu_icon'=>'dashicons-dashboard',
        'menu_position'=>20,
        'ajax_save'=>false,
        'show_reset_all'=>true
    );

    $options = philosophy_theme_options();
    new CSFramework($settings,$options);
}
add_action("init","philosophy_theme_option_init");

function philosophy_theme_options(){
    $options = array();



    $options[] = array(
        'name'   => 'pdf_control',
        'title'  => 'Header',
        'icon'   => 'fa fa-edit',
        'fields' => array(

            // a product PDF
            array(
                'id'    => 'logo_img',
                'type'  => 'image',
                'title' => 'Uplaod logo',
            ),

            // a product PDF
            array(
                'id'    => 'product_pdf',
                'type'  => 'text',
                'title' => 'Phone Number',
            ),

            
            // Kafka Security Download Form
            array(
                'id'    => 'kafka_securirty_pdf',
                'type'  => 'text',
                'title' => 'Email Address',
            ),
            
        ),
    );



    $options[] = array(
        'name'=>'footer_options',
        'title'=>__('Footer','Octarine'),
        'icon'=>'fa fa-edit',
        'fields'=>array(

            array(
                'id'    => 'social_facebook',
                'type'  => 'text',
                'title' => __('Facebook URL','Octarine')
            ),
            array(
                'id'    => 'social_linkedin',
                'type'  => 'text',
                'title' => __('Linkedin URL','Octarine')
            ),
            array(
                'id'    => 'social_twitter',
                'type'  => 'text',
                'title' => __('Twitter URL','Octarine')
            ),
        )
    );


    // begin section

    return $options;
}
//add_filter('cs_framework_options','philosophy_theme_options');