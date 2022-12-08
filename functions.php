<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5',array('search-form') );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

// Load in our CSS
function iclinic_enqueue_styles() {

    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );
  
  }
  add_action( 'wp_enqueue_scripts', 'iclinic_enqueue_styles' );

  // Register Menu Locations
// register_nav_menus( [
//   'main-menu' => esc_html__( 'Main Menu', 'iclinic' ),
// ]);

/**
 * Register Custom Navigation Walker
 */

 register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'iclinic' ),
) );


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
	add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

//-----------------------------------------------------------------
// -------------customize Header costomizer image and text------------
//-----------------------------------------------------------------

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

//------------------------------------------------------------
//-----------------customize Site LOGO :------------------------
//------------------------------------------------------------

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

//------------------------------------------------------------
// -------------------- Contact Us Page --------------------------
//------------------------------------------------------------

function iclinic_contactus_callout($wp_customize){
  $wp_customize -> add_section('iclinic-contactus-callout-secction',
  array( 
    'title' => 'Contact Us page'
  ));

  // customize Headline : 
  $wp_customize -> add_setting('iclinic-contactus-callout-headline',
  array(
    'default' => 'تیم حرفه ای اپل آی کلینیک'
  ));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-contactus-callout-headline-control',
  array(
    'label'    => 'Page Headline',
    'section'  => 'iclinic-contactus-callout-secction',
    'settings' => 'iclinic-contactus-callout-headline'
  )));

  // Image customize :
  $item_arr = array('1','2','3');

  foreach($item_arr as $item ){
    $wp_customize -> add_setting('iclinic-contactus-callout-image'.$item);

    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize , 'iclinic-contactus-callout-image'. $item .'-control',
    array(
      'label'    => 'Banner Image '. $item,
      'section'  => 'iclinic-contactus-callout-secction',
      'settings' => 'iclinic-contactus-callout-image'.$item,
      'width'    => '376',
      'height'   => '376'
    )));

    // Name customize :

    $wp_customize -> add_setting('iclinic-contactus-callout-name' . $item ,
    array( 'default' => 'احسان جمال الدینی')
   );

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-contactus-callout-name' . $item .'-control',
    array(
      'label'    => 'Name '. $item,
      'section'  => 'iclinic-contactus-callout-secction',
      'settings' => 'iclinic-contactus-callout-name' . $item
    )));

    //  Role customize :
    $wp_customize -> add_setting('iclinic-contactus-callout-role' . $item ,
      array( 'default' => 'مدیریت')
    );

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-contactus-callout-role' . $item .'-control',
    array(
      'label'    => 'Role '. $item,
      'section'  => 'iclinic-contactus-callout-secction',
      'settings' => 'iclinic-contactus-callout-role' . $item
    )));
  }

  // customize Title1 : 
  $wp_customize -> add_setting('iclinic-contactus-callout-txttitle1',
  array(
    'default' => 'درباره اپل آی کلینیک'
  ));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-contactus-callout-txttitle1-control',
  array(
    'label'    => 'Title 1',
    'section'  => 'iclinic-contactus-callout-secction',
    'settings' => 'iclinic-contactus-callout-txttitle1'
  )));

  // customize Text 1: 
  $wp_customize -> add_setting('iclinic-contactus-callout-text1',
  array(
    'default' => 'اپل آی کلینیک در ابتدا کار خود را از یک فروشگاه حضوری در شهر شیراز آغاز کرد. این فروشگاه که همچنان فعالیتش پابرجا است که محصولات خود را برای طیف وسیعی از مشتریان عرضه می‌کند. با گذشت زمان و افزایش تقاضا برای خرید محصولات از ان آی سی، فرایند ارائه محصولات در سراسر ایران از طریق بسترها و راهکارهای مبتنی بر تجارت الکترونیک نیز فراهم شد و ما اکنون تحت شرکت نیکان اندیشه خلاق رایان فعالیت می کنیم.'
  ));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-contactus-callout-text1-control',
  array(
    'label'    => 'Text 1',
    'section'  => 'iclinic-contactus-callout-secction',
    'settings' => 'iclinic-contactus-callout-text1',
    'type'     => 'textarea' 
  )));

  // customize Title 2 : 
  $wp_customize -> add_setting('iclinic-contactus-callout-txttitle2',
  array(
    'default' => 'چرا فروشگاه محصولات اپل آی کلینیک؟'
  ));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-contactus-callout-txttitle2-control',
  array(
    'label'    => 'Title 2',
    'section'  => 'iclinic-contactus-callout-secction',
    'settings' => 'iclinic-contactus-callout-txttitle2'
  )));

  // customize Text 2: 
  $wp_customize -> add_setting('iclinic-contactus-callout-text2',
  array(
    'default' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.'
  ));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-contactus-callout-text2-control',
  array(
    'label'    => 'Text 2',
    'section'  => 'iclinic-contactus-callout-secction',
    'settings' => 'iclinic-contactus-callout-text2',
    'type'     => 'textarea' 
  )));

  // customize Title 3 : 
  $wp_customize -> add_setting('iclinic-contactus-callout-txttitle3',
  array(
    'default' => 'دیدگاه اپل آی کلینیک چیست؟'
  ));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-contactus-callout-txttitle3-control',
  array(
    'label'    => 'Title 3',
    'section'  => 'iclinic-contactus-callout-secction',
    'settings' => 'iclinic-contactus-callout-txttitle3'
  )));

  // customize Text 3: 
  $wp_customize -> add_setting('iclinic-contactus-callout-text3',
  array(
    'default' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.'
  ));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-contactus-callout-text3-control',
  array(
    'label'    => 'Text 3',
    'section'  => 'iclinic-contactus-callout-secction',
    'settings' => 'iclinic-contactus-callout-text3',
    'type'     => 'textarea' 
  )));

  // customize Title 4 : 
  $wp_customize -> add_setting('iclinic-contactus-callout-txttitle4',
  array(
    'default' => 'چرا از خدمات اپل آی کلینیک استفاده کنیم؟'
  ));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-contactus-callout-txttitle4-control',
  array(
    'label'    => 'Title 4',
    'section'  => 'iclinic-contactus-callout-secction',
    'settings' => 'iclinic-contactus-callout-txttitle4'
  )));

  // customize Text 4: 
  $wp_customize -> add_setting('iclinic-contactus-callout-text4',
  array(
    'default' => 'ما در فروشگاه اینترنتی ان آی سی، یک توسعه دهنده یا نماینده شرکتی دیگر نیستیم، بلکه ما صرفا فروشنده محصولات با کیفیت هستیم و تمام تلاش خود را کرده‌ایم تا بهترین خدمات فروش و عرضه محصولات با کیفیت را برای شما فراهم آوریم! همچنین ما تبلیغات نرم افزارها و محصولات خاصی را در این وب‌سایت اینترنتی انجام نمی‌دهیم، اما اعتقاد داریم که بهترین خدمات در این حوزه را ارائه می‌کنیم! ما تمام سعی خود را برای کسب رضایت مشتریان انجام می‌دهیم و تلاش کنیم تا علیرغم محدودیت‌های موجود برای شرکت‌های فعال در حوزه تجارت الکترونیک، بدون هیچ محدودیتی در این زمینه، خدماتمان را ارائه کنیم!'
  ));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize , 'iclinic-contactus-callout-text4-control',
  array(
    'label'    => 'Text 4',
    'section'  => 'iclinic-contactus-callout-secction',
    'settings' => 'iclinic-contactus-callout-text4',
    'type'     => 'textarea' 
  )));
}
add_action('customize_register' , 'iclinic_contactus_callout');

//----------------------------------------------------------------------------------------
function _theme_customize_register($wp_customize){
  $prefix = ".prefix_";
  $classes = array(
    "iclinic-header-callout-image",
    "iclinic-header-callout-headline",
    "iclinic-header-callout-title",
    "iclinic-header-callout-text",
    "iclinic-banner1-callout-image",
    "iclinic-blog-callout-image1",
    "iclinic-blog-callout-image2",
    "iclinic-blog-callout-image3",
    "iclinic-contactus-callout-headline",
    "iclinic-contactus-callout-image1",
    "iclinic-contactus-callout-image2",
    "iclinic-contactus-callout-image3",
    "iclinic-contactus-callout-txttitle1",
    "iclinic-contactus-callout-txttitle2",
    "iclinic-contactus-callout-txttitle3",
    "iclinic-contactus-callout-txttitle4",
    
  );
  
  foreach ($classes as $class) {
    $wp_customize->selective_refresh->add_partial($class, array(
      "setting"=>array($class),
      "selector" => $prefix.$class,
      "container_inclusive"=>false,
      "render_callback" => function() use ($class){
        echo get_theme_mod($class);
      }
    ));
  }
}

add_action("customize_register", "_theme_customize_register");

?>