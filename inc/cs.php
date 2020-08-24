<?php 

define( 'CS_ACTIVE_FRAMEWORK', false ); // default true
define( 'CS_ACTIVE_METABOX', true ); // default true
define( 'CS_ACTIVE_TAXONOMY', false ); // default true
define( 'CS_ACTIVE_SHORTCODE', false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE', false ); // default true

function jimmyjames_csf_metabox(){
    CSFramework_Metabox::instance(array());
}
add_action("init", "jimmyjames_csf_metabox");


function jimmyjames_post_metabox($options){

    $options[] = array(
        'id' =>'post-metabox',
        'title' =>__('Event Info','jimmyjames'),
        'post_type' => 'page',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'post-meta',
                'title' => __('Event Settings','jimmyjames'),
                'icon' => 'fa fa-image',
                'fields'=> array(
                    array(
                         'id' => 'date',
                         'type' => 'text',
                         'title' => __('Date', 'jimmyjames'),
                    ),
                    array(
                         'id' => 'time',
                         'type' => 'text',
                         'title' => __('Time', 'jimmyjames'),
                    ),
                )
            )
        )
    );




    return $options;
}
add_filter('cs_metabox_options','jimmyjames_post_metabox');

