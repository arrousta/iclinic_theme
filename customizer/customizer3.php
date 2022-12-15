<?php

//------------------------------------------------------------
//---------customize Banner1 Text and Image (section 2)---------
//------------------------------------------------------------

function iclinic_banner1_callout($wp_customize){
  $wp_customize -> add_section('iclinic-banner1-callout-secction',
  array( 
    'title' => 'ویرایش بنر 1'
  ));

  //Display Section or Not ?

  $wp_customize -> add_setting('iclinic-banner1-callout-display',
  array(
    'default' => 'Yes'
  ));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-banner1-callout-display-control',
  array(
    'label'    => 'Display this Section?',
    'section'  => 'iclinic-banner1-callout-secction',
    'settings' => 'iclinic-banner1-callout-display',
    'type'     => 'select',
    'choices'  => array('Yes' => 'Yes' , 'No' => 'No')
  )));

  // customize Image : 
  $wp_customize -> add_setting('iclinic-banner1-callout-image');

  $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize ,
   'iclinic-banner1-callout-image-control',
  array(
    'label'    => 'Banner Image',
    'section'  => 'iclinic-banner1-callout-secction',
    'settings' => 'iclinic-banner1-callout-image',
    'width'    => '1730',
    'height'   => '550'
  )));

  // customize Headline : 
  $wp_customize -> add_setting('iclinic-banner1-callout-headline',
  array(
    'default' => 'آی کلینیک پلاس'
  ));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-banner1-callout-headline-control',
  array(
    'label'    => 'Banner Headline',
    'section'  => 'iclinic-banner1-callout-secction',
    'settings' => 'iclinic-banner1-callout-headline'
  )));

  // customize Title : 
  $wp_customize -> add_setting('iclinic-banner1-callout-title',
  array(
    'default' => 'خدمات ویژه تعمیرات آی کلینیک'
  ));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-banner1-callout-title-control',
  array(
    'label'    => 'Title',
    'section'  => 'iclinic-banner1-callout-secction',
    'settings' => 'iclinic-banner1-callout-title'
  )));

  // customize Text : 
  $wp_customize -> add_setting('iclinic-banner1-callout-text',
  array(
    'default' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد،'
  ));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-banner1-callout-text-control',
  array(
    'label'    => 'Text',
    'section'  => 'iclinic-banner1-callout-secction',
    'settings' => 'iclinic-banner1-callout-text',
    'type'     => 'textarea' 
  )));

  //customize Button Text
  $wp_customize -> add_setting('iclinic-banner1-callout-button',
  array(
    'default' => 'ثبت نام و ثبت ایراد دستگاه  >'
  ));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-banner1-callout-button-control',
  array(
    'label'    => 'Button',
    'section'  => 'iclinic-banner1-callout-secction',
    'settings' => 'iclinic-banner1-callout-button'
  )));

  //link
  $wp_customize -> add_setting('iclinic-banner1-callout-link');

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-banner1-callout-link-control',
  array(
    'label'    => 'Link',
    'section'  => 'iclinic-banner1-callout-secction',
    'settings' => 'iclinic-banner1-callout-link',
    'type'     => 'dropdown-pages' 
  )));
  

}
add_action('customize_register' , 'iclinic_banner1_callout');

?>