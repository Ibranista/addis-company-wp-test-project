<?php

function software_taxonomy(){
   $labels=array(
       'name'=>__('software-products',SWDOMAIN),
       'singular_name'=>__('addis-product',SWDOMAIN),
       'add_new_item'=>__('Add new product',SWDOMAIN),
   );

   $args=array(
       'labels'=>$labels,
       'public'=>true,
       'show_admin_column'=>true,
       'show_in_quick_eit'=>true,
       'show_in_rest'=>true,
       'hierarchical'=>true
   );

   $post_types = array(
       'property'
   );

   register_taxonomy('Ibrahim',$post_types,$args);
}