<?php

//  customize Header, image and text :

function iclinic_header_callout($wp_customize){
    $wp_customize -> add_section('iclinic-header-callout-secction',
    array( 
      'title' => 'تنظیمات Header'
    ));
  
    //Display Section or Not ?
  
    $wp_customize -> add_setting('iclinic-header-callout-display',
    array(
      'default' => 'Yes'
    ));
  
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-header-callout-display-control',
    array(
      'label'    => 'Display this Section?',
      'section'  => 'iclinic-header-callout-secction',
      'settings' => 'iclinic-header-callout-display',
      'type'     => 'select',
      'choices'  => array('Yes' => 'Yes' , 'No' => 'No')
    )));
  
    // customize Headline : 
    $wp_customize -> add_setting('iclinic-header-callout-headline',
    array(
      'default' => 'اپل واچ سری ۷'
    ));
  
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-header-callout-headline-control',
    array(
      'label'    => 'Headline',
      'section'  => 'iclinic-header-callout-secction',
      'settings' => 'iclinic-header-callout-headline'
    )));
  
    // customize Title : 
    $wp_customize -> add_setting('iclinic-header-callout-title',
    array(
      'default' => 'دنیای هوشمند در سری جدید ساعت های اپل'
    ));
  
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-header-callout-title-control',
    array(
      'label'    => 'Title',
      'section'  => 'iclinic-header-callout-secction',
      'settings' => 'iclinic-header-callout-title'
    )));
  
    // customize Text : 
    $wp_customize -> add_setting('iclinic-header-callout-text',
    array(
      'default' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد،'
    ));
  
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-header-callout-text-control',
    array(
      'label'    => 'Text',
      'section'  => 'iclinic-header-callout-secction',
      'settings' => 'iclinic-header-callout-text',
      'type'     => 'textarea' 
    )));
  
    // customize Image : 
    $wp_customize -> add_setting('iclinic-header-callout-image');
  
    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize ,
     'iclinic-header-callout-image-control',
    array(
      'label'    => 'Main Image',
      'section'  => 'iclinic-header-callout-secction',
      'settings' => 'iclinic-header-callout-image',
      'width'    => '600',
      'height'   => '500'
    )));
  
  
  }
  add_action('customize_register' , 'iclinic_header_callout');
  
?>