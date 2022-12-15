<?php

// customize Site LOGO :

function iclinic_logo_callout($wp_customize){
  $wp_customize -> add_section('iclinic-logo-callout-secction',
  array( 
    'title' => 'تغییر لوگو'
  ));

  $wp_customize -> add_setting('iclinic-logo-callout-image');

  $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize ,
   'iclinic-logo-callout-image-control',
  array(
    'label'    => 'Logo Image',
    'section'  => 'iclinic-logo-callout-secction',
    'settings' => 'iclinic-logo-callout-image',
    // 'width'    => '170',
    // 'height'   => '35'
  )));
}
add_action('customize_register' , 'iclinic_logo_callout');

?>