<?php

function property_registry(){
    $labels = array(
        'name'=>'properties',
        'singular_name'=>__('property',PROPDOMAIN),
        'featured_image'=>__('company_logo',PROPDOMAIN),
        'set_featured_image'=>__('set company_logo',PROPDOMAIN),
        'remove_featured_image'=>__('Remove company_logo',PROPDOMAIN),
        'archives'=>__('property directory',PROPDOMAIN),
        'add_new'=>__('add new property',PROPDOMAIN),
        'add_new_item'=>__('add new property',PROPDOMAIN),
    );
    $args = array(
        'labels'=>$labels,
             'public'=>true,
             'has_archive'=>'props',
             'rewrite'=>array(
                 'has_front'=>true
             ),
             'menu_icon'=>'dashicons-building',
             'supports' => array ( 'title','excerpt','content','post-formats', 'editor', 'custom-fields', 'page-attributes', 'thumbnail' ),
             'show_in_rest'=>true
    );
    register_post_type('property',$args);
}