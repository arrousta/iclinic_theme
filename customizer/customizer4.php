<?php
//------------------------------------------------------------
//---------customize offer Text and Image (section 6)---------
//------------------------------------------------------------

function iclinic_offer_callout($wp_customize){
    $wp_customize -> add_section('iclinic-offer-callout-secction',
    array( 
      'title' => 'ویرایش پر فروش‌ترین کالاها'
    ));
  
    //Display Section or Not ?
  
    $wp_customize -> add_setting('iclinic-offer-callout-display',
    array(
      'default' => 'Yes'
    ));
  
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-offer-callout-display-control',
    array(
      'label'    => 'Display this Section?',
      'section'  => 'iclinic-offer-callout-secction',
      'settings' => 'iclinic-offer-callout-display',
      'type'     => 'select',
      'choices'  => array('Yes' => 'Yes' , 'No' => 'No')
    )));
  
    // customize Headline : 
    $wp_customize -> add_setting('iclinic-offer-callout-headline',
    array(
      'default' => 'پر فروش‌ترین کالاهای آی‌کلینیک'
    ));
  
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-offer-callout-headline-control',
    array(
      'label'    => 'Banner Headline',
      'section'  => 'iclinic-offer-callout-secction',
      'settings' => 'iclinic-offer-callout-headline'
    ))); 
  
  }
  add_action('customize_register' , 'iclinic_offer_callout');

?>