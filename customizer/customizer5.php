<?php

//------------------------------------------------------------
//---------customize Blog Text and Image (section 9)---------
//------------------------------------------------------------

function iclinic_blog_callout($wp_customize){
    $wp_customize -> add_section('iclinic-blog-callout-secction',
    array( 
      'title' => 'ویرایش پیشنهادهای بلاگ'
    ));
  
    //Display Section or Not ?
  
    $wp_customize -> add_setting('iclinic-blog-callout-display',
    array(
      'default' => 'Yes'
    ));
  
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-blog-callout-display-control',
    array(
      'label'    => 'Display this Section?',
      'section'  => 'iclinic-blog-callout-secction',
      'settings' => 'iclinic-blog-callout-display',
      'type'     => 'select',
      'choices'  => array('Yes' => 'Yes' , 'No' => 'No')
    )));
  
    // customize Image Blog 1 : 
    $wp_customize -> add_setting('iclinic-blog-callout-image1');
  
    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize ,
     'iclinic-blog-callout-image1-control',
    array(
      'label'    => 'Banner Image 1',
      'section'  => 'iclinic-blog-callout-secction',
      'settings' => 'iclinic-blog-callout-image1',
      'width'    => '424',
      'height'   => '256'
    )));
  
    // customize Headline1 : 
    $wp_customize -> add_setting('iclinic-blog-callout-headline1',
    array(
      'default' => 'عنوان پست بلاگ شماره یک'
    ));
  
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-blog-callout-headline1-control',
    array(
      'label'    => 'Banner Headline 1',
      'section'  => 'iclinic-blog-callout-secction',
      'settings' => 'iclinic-blog-callout-headline1'
    ))); 
  
    // customize Text 1: 
    $wp_customize -> add_setting('iclinic-blog-callout-text1',
    array(
      'default' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت'
    ));
  
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-blog-callout-text1-control',
    array(
      'label'    => 'Text 1',
      'section'  => 'iclinic-blog-callout-secction',
      'settings' => 'iclinic-blog-callout-text1',
      'type'     => 'textarea' 
    )));
  
    //link 1
    $wp_customize -> add_setting('iclinic-blog-callout-link1');
  
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-blog-callout-link1-control',
    array(
      'label'    => 'Link 1',
      'section'  => 'iclinic-blog-callout-secction',
      'settings' => 'iclinic-blog-callout-link1',
      'type'     => 'dropdown-pages' 
    )));
  
    // customize Image Blog 2 : 
    $wp_customize -> add_setting('iclinic-blog-callout-image2');
  
    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize ,
     'iclinic-blog-callout-image2-control',
    array(
      'label'    => 'Banner Image 2',
      'section'  => 'iclinic-blog-callout-secction',
      'settings' => 'iclinic-blog-callout-image2',
      'width'    => '424',
      'height'   => '256'
    )));
  
    // customize Headline2 : 
    $wp_customize -> add_setting('iclinic-blog-callout-headline2',
    array(
      'default' => 'عنوان پست بلاگ شماره دو'
    ));
  
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-blog-callout-headline2-control',
    array(
      'label'    => 'Banner Headline 2',
      'section'  => 'iclinic-blog-callout-secction',
      'settings' => 'iclinic-blog-callout-headline2'
    ))); 
  
    // customize Text 2: 
    $wp_customize -> add_setting('iclinic-blog-callout-text2',
    array(
      'default' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت'
    ));
  
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-blog-callout-text2-control',
    array(
      'label'    => 'Text 2',
      'section'  => 'iclinic-blog-callout-secction',
      'settings' => 'iclinic-blog-callout-text2',
      'type'     => 'textarea' 
    )));
  
    //link 2
    $wp_customize -> add_setting('iclinic-blog-callout-link2');
  
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-blog-callout-link2-control',
    array(
      'label'    => 'Link 2',
      'section'  => 'iclinic-blog-callout-secction',
      'settings' => 'iclinic-blog-callout-link2',
      'type'     => 'dropdown-pages' 
    )));
  
    // customize Image Blog 3 : 
    $wp_customize -> add_setting('iclinic-blog-callout-image3');
  
    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize ,
     'iclinic-blog-callout-image3-control',
    array(
      'label'    => 'Banner Image 3',
      'section'  => 'iclinic-blog-callout-secction',
      'settings' => 'iclinic-blog-callout-image3',
      'width'    => '424',
      'height'   => '256'
    )));
  
    // customize Headline3 : 
    $wp_customize -> add_setting('iclinic-blog-callout-headline3',
    array(
      'default' => 'عنوان پست بلاگ شماره سه'
    ));
  
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-blog-callout-headline3-control',
    array(
      'label'    => 'Banner Headline 3',
      'section'  => 'iclinic-blog-callout-secction',
      'settings' => 'iclinic-blog-callout-headline3'
    ))); 
  
      // customize Text 3: 
    $wp_customize -> add_setting('iclinic-blog-callout-text3',
    array(
      'default' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت'
    ));
  
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-blog-callout-text3-control',
    array(
      'label'    => 'Text 3',
      'section'  => 'iclinic-blog-callout-secction',
      'settings' => 'iclinic-blog-callout-text3',
      'type'     => 'textarea' 
    )));
  
    //link 3
    $wp_customize -> add_setting('iclinic-blog-callout-link3');
  
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-blog-callout-link3-control',
    array(
      'label'    => 'Link 3',
      'section'  => 'iclinic-blog-callout-secction',
      'settings' => 'iclinic-blog-callout-link3',
      'type'     => 'dropdown-pages' 
    )));
  
  }
  add_action('customize_register' , 'iclinic_blog_callout');
  
?>