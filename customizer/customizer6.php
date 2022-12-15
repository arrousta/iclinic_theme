<?php

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
  
?>