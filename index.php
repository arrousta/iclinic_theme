<?php  get_header(); ?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if(get_theme_mod('iclinic-header-callout-display') == 'Yes') { ?>
            <section id="section1">
                <div class="container" >
                    <div class="row">
                        <div class="col-5" id="image_col">
                             <?php if(get_theme_mod('iclinic-header-callout-image')): { ?>
                             <img src="<?php
                             echo wp_get_attachment_url(get_theme_mod('iclinic-header-callout-image'));
                             ?>" alt="applewatch">
                             <?php } else : { ?>
                                <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Apple_watch-series7-availability_hero_10052021_big.png" 
                             width=536px height=435px alt="applewatch">
                             <?php } endif; ?>
                        </div>
                        <div class="col-7" id="header_title">
                            <!-- <h1>اپل واچ سری ۷</h1> -->
                            <h1><?php echo get_theme_mod('iclinic-header-callout-headline'); ?></h1>
                            <!-- <h6 id="header_title_h6"> دنیای هوشمند در سری جدید ساعت های اپل </h6> -->
                            <h6 id="header_title_h6">
                                <?php echo get_theme_mod('iclinic-header-callout-title'); ?>
                            </h6>
                            <!-- <p id="header_title_p">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد،</p> -->
                            <p id="header_title_p">
                                <?php echo get_theme_mod('iclinic-header-callout-text'); ?>
                            </p>
                            <div class="row">
                                <div class="col" id="header_2">
                                    <button type="button" class="btn btn-light" id="btn1">
                                        <div class="flex-container" id="btn_flex">
                                            <div class="flex-item" id="btn_flex_item1">
                                                <img src="http://localhost/wordpress.developer/wp-content/uploads/2022/11/F07H3_AV1-1.png" alt="applewtch" id="applewtch_img">
                                            </div>
                                            <div class="flex-item" id="btn_flex_item2">
                                                <h6 id="btn_flex_item2_h6">اپل واچ سری ۶</h6>
                                                <p id="btn_flex_item2_p1">رنگ مشکی، ۴۴ سانتی متر</p>
                                                <p id="btn_flex_item2_p2">۸،۷۷۰،۰۰۰ تومان</p>
                                            </div>

                                        </div>
                                    </button>

                                    <button type="button" class="btn btn-light" id="btn1">
                                        <div class="flex-container" id="btn_flex">
                                            <div class="flex-item" id="btn_flex_item1">
                                                <img src="http://localhost/wordpress.developer/wp-content/uploads/2022/11/F07H3_AV1-1.png" alt="applewtch" id="applewtch_img">
                                            </div>

                                            <div class="flex-item" id="btn_flex_item2">
                                                <h6 id="btn_flex_item2_h6">اپل واچ سری ۶</h6>
                                                <p id="btn_flex_item2_p1">رنگ مشکی، ۴۴ سانتی متر</p>
                                                <p id="btn_flex_item2_p2">۸،۷۷۰،۰۰۰ تومان</p>
                                            </div>                                    
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        <?php } ?>

        <?php if(get_theme_mod('iclinic-banner1-callout-display') == 'Yes') { ?>
        <section>
            <div class="container-fluid" id="section2">
                <div class="row" id="s2r">

                    <?php if(wp_get_attachment_url(get_theme_mod('iclinic-banner1-callout-image'))): { ?>
                    <img src="<?php
                             echo wp_get_attachment_url(get_theme_mod('iclinic-banner1-callout-image'));
                             ?>" alt="banner">
                    <?php } else: { ?>
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/img1.png" alt="13256"> 
                    <?php } endif; ?>
                    
                    <div class="overlay row">
                        <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Rectangle-6.png" alt="cover">
                    </div>
                    
                    <div class="overlay">
                        <div class="row text-center" id="overlay_txt">
                            <!-- <h1>آی کلینیک پلاس</h1> -->
                            <h1><?php echo get_theme_mod('iclinic-banner1-callout-headline');?></h1>
                            <!-- <h4>خدمات ویژه تعمیرات آی کلینیک</h4> -->
                            <h4><?php echo get_theme_mod('iclinic-banner1-callout-title');?></h4>
                            <div class="flex-container" id="overlay_flex_container">
                                <!-- <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p> -->
                                <p><?php echo get_theme_mod('iclinic-banner1-callout-text');?></p>
                            </div>
                            <a href="<?php echo get_permalink(get_theme_mod('iclinic-banner1-callout-link')); ?>">
                                <button type="button" onclick="#" class="btn btn-light" id="section_btn">
                                    <?php echo get_theme_mod('iclinic-banner1-callout-button');?>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <?php } ?>


        <section id="section3">
            <div id="search-form">
                <div class="flex-container" id="search_flex-container">
                    <div class="flex_item_search">
                        <?php get_search_form()  ?>
                    </div>
                </div>
            </div>
        </section>
            
        <section>

            <div class="flex-container wrap" id="section4_flex-item1">
                <div id="section1_div">
                    <button id="s1btn">
                        <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/MN643.png" alt="iphone1">
                        <p>لوازم جانبی اپل</p>
                    </button>
                </div>
                <div>
                    <button id="s1btn">
                        <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/compare_mbp14_and_16__f2dhysusb5im_large_2x.png" alt="laptop1">
                        <p>دستگاه‌های‌مک</p>
                    </button>
                </div>
                <div>
                    <button id="s1btn">
                        <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/compare_iphone_13_pro__bpn3x8hs692a_large_2x.png" alt="iphon2">
                        <p>آیفون</p>
                    </button>
                </div>
                <div>
                    <button id="s1btn">
                        <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/compare_ipad_pro__erf9x8mw04sy_large_2x.png" alt="ipad">
                        <p>آی‌پد</p>
                    </button>
                </div>
                <div>
                    <button id="s1btn">
                        <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/compare_s7__dqi9jnwa4sq6_large_2x.png" alt="appw">
                        <p>اپل واچ</p>
                    </button>
                </div>
                <div>
                    <button id="s1btn">
                        <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/compare_airpods_pro__e9uzt0mzviem_large_2x.png" alt="airp">
                        <p>ایرپاد</p>
                    </button>
                </div>
            </div>

        </section>

        <section>
            <div class="flex-container wrap" id="section5_flex-item1">
                <a href="#">
                    <div class="flex-item">
                        <div class="flex-container" id="inner_flex">
                            <div class="flex-item_inner1">
                                <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Apple-Watch.png" alt="airp">
                            </div>
                            <div class="flex-item_inner2">
                                <p id="p11">اپل واچ نایکی پلاس سری SE آلومینیوم نقره ای با بند سیلیکون سفید</p>
                                <p id="p22">۹٬۸۷۰٬۰۰۰ تومان</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="flex-item">
                        <div class="flex-container" id="inner_flex">
                            <div class="flex-item_inner1">
                                 <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/headphon.png" alt="airp">
                            </div>
                            <div class="flex-item_inner2">
                                <p id="p11">اپل واچ نایکی پلاس سری SE آلومینیوم نقره ای با بند سیلیکون سفید</p>
                                <p id="p22">۹٬۸۷۰٬۰۰۰ تومان</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="flex-item">
                        <div class="flex-container" id="inner_flex">
                            <div class="flex-item_inner1">
                                <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/iphone13.png" alt="airp">
                            </div>
                            <div class="flex-item_inner2">
                                <p id="p11">اپل واچ نایکی پلاس سری SE آلومینیوم نقره ای با بند سیلیکون سفید</p>
                                <p id="p22">۹٬۸۷۰٬۰۰۰ تومان</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="flex-item">
                        <div class="flex-container" id="inner_flex">
                            <div class="flex-item_inner1">
                                <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/airpod.png" alt="airp">
                            </div>
                            <div class="flex-item_inner2">
                                <p id="p11">اپل واچ نایکی پلاس سری SE آلومینیوم نقره ای با بند سیلیکون سفید</p>
                                <p id="p22">۹٬۸۷۰٬۰۰۰ تومان</p>
                            </div>
                        </div>
                    </div> 
                </a>
                <a href="#">
                    <div class="flex-item">
                        <div class="flex-container" id="inner_flex">
                            <div class="flex-item_inner1">
                                <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/iphone-13-pro-max-blue-select.png" alt="airp">
                            </div>
                            <div class="flex-item_inner2">
                                <p id="p11">اپل واچ نایکی پلاس سری SE آلومینیوم نقره ای با بند سیلیکون سفید</p>
                                <p id="p22">۹٬۸۷۰٬۰۰۰ تومان</p>
                            </div>
                        </div>
                    </div> 
                </a>
                <a href="#">
                    <div class="flex-item">
                        <div class="flex-container" id="inner_flex">
                            <div class="flex-item_inner1">
                                <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/284147.png" alt="airp">
                            </div>
                            <div class="flex-item_inner2">
                                <p id="p11">اپل واچ نایکی پلاس سری SE آلومینیوم نقره ای با بند سیلیکون سفید</p>
                                <p id="p22">۹٬۸۷۰٬۰۰۰ تومان</p>
                            </div>
                        </div>
                    </div> 
                </a>
                <a href="#">
                    <div class="flex-item">
                        <div class="flex-container" id="inner_flex">
                            <div class="flex-item_inner1">
                            <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/airpod.png" alt="airp">
                        </div>
                            <div class="flex-item_inner2">
                                <p id="p11">اپل واچ نایکی پلاس سری SE آلومینیوم نقره ای با بند سیلیکون سفید</p>
                                <p id="p22">۹٬۸۷۰٬۰۰۰ تومان</p>
                            </div>
                        </div>
                    </div> 
                </a>
                <a href="#">
                    <div class="flex-item">
                        <div class="flex-container" id="inner_flex">
                            <div class="flex-item_inner1">
                                <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/iphone-13-pro-max-blue-select.png" alt="airp">
                            </div>
                            <div class="flex-item_inner2">
                                <p id="p11">اپل واچ نایکی پلاس سری SE آلومینیوم نقره ای با بند سیلیکون سفید</p>
                                <p id="p22">۹٬۸۷۰٬۰۰۰ تومان</p>
                            </div>
                        </div>
                    </div> 
                </a>
                <a href="#">
                    <div class="flex-item">
                        <div class="flex-container" id="inner_flex">
                            <div class="flex-item_inner1">
                                <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/284147.png" alt="airp">
                            </div>
                            <div class="flex-item_inner2">
                                <p id="p11">اپل واچ نایکی پلاس سری SE آلومینیوم نقره ای با بند سیلیکون سفید</p>
                                <p id="p22">۹٬۸۷۰٬۰۰۰ تومان</p>
                            </div>
                        </div>
                    </div> 
                </a>
            </div>

        </section>

        <?php if(get_theme_mod('iclinic-offer-callout-display') == 'Yes') { ?>
        <section>

            <div class="row text-center" id="section6">
                <h2>
                    <?php echo get_theme_mod('iclinic-offer-callout-headline');?>
                </h2>
            </div>
            
            <div class="container" id="section6_items">
                <div class="row" id="section6_items_row_main">
                    <div class="col" id="section6_items_rcol">
                        <a href="#">
                            <div id="right-flex">
                                <div class="flex-item">
                                        <div class="flex-container" id="inner_flex6">
                                            <div class="flex-item_inner1-6">
                                                <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Apple-MacBook-Pro-16-2021-Gray1.png" alt="airp">
                                            </div>
                                            <div class="flex-item_inner2-6">
                                                <p id="p_title">مک بوک پرو 16 اینچ M1 Pro ظرفیت 1/16 ترابایت مدل 2021</p>
                                                <p id="p_price">۸۲،۰۰۰،۰۰۰ تومان</p>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col" id="section6_items_lcol">
                        <div class="row" id="lcol-row1">
                            <div class="col" id="lcol-col1">
                                <a href="#">
                                    <div id="left-top-flex">
                                        <div class="flex-item">
                                            <div class="flex-container" id="inner_flex6">
                                                <div class="flex-item_inner3-6">
                                                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Apple-iPhone-13-Pro-2022-Family.png" alt="airp">
                                                </div>
                                                <div class="flex-item_inner4-6">
                                                    <p id="p_title">آیفون ۱۳ پرو ظرفیت ۲۵۶ گیگ دوسیم کارت</p>
                                                    <p id="p_price">49،6۰۰،۰۰۰ تومان</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col" id="lcol-col2">
                                <a href="#">
                                    <div id="left-top-flex">
                                        <div class="flex-item">
                                            <div class="flex-container" id="inner_flex6">
                                                <div class="flex-item_inner3-6">
                                                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Apple-Watch-S-7-1.png" alt="airp">
                                                </div>
                                                <div class="flex-item_inner4-6">
                                                    <p id="p_title">اپل واچ سری ۷ آبی با بند اسپرت سیلیکون آبیس بلو</p>
                                                    <p id="p_price">49،6۰۰،۰۰۰ تومان</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row" id="lcol-row2">
                            <a href="#">
                                    <div id="left-bottom-flex">
                                        <div class="flex-item">
                                            <div class="flex-container" id="inner_flex6-2">
                                                <div class="flex-item_inner5-6">
                                                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/airpods-2nd-charging-case-1.png" alt="airp">
                                                </div>
                                                <div class="flex-item_inner6-6">
                                                    <p id="p_title">ایرپاد هندزفری بلوتوث نسل 2 اپل</p>
                                                    <p id="p_price">49،6۰۰،۰۰۰ تومان</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                        </div>
                    </div>
                    
                </div>
            </div>

        </section>
        <?php } ?>


        <section>
            <div class="container" id="section7">
                <div class="row" id="section7_row">
                    <div class="col" >
                        <a href="#">
                            <div id="section7_flex">
                                <div class="flex-item">
                                    <div class="flex-container" id="inner_flex_7">
                                        <div class="flex-item_inner1_7">
                                            <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/airpods_pro_right__fm0wwisa76em_large_2x.png" alt="airpods_pro_right" id="apr_img">
                                            <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/airpods_pro_left__bvanpj0ujnf6_large_2x.png" alt="airpods_pro_left">

                                        </div>
                                        <div class="flex-item_inner2_7">
                                            <p id="p_title1">لذت یک مکالمه باورنکردنی</p>
                                            <div class="flex-container" id="inner_flex_7_img">
                                                <div>
                                                    <p id="p_title2">AirPods Pro</p>
                                                </div>
                                                <div>
                                                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Frame45.png" alt="prc">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </section>

        <section>
            <div class="row text-center" id="section8">
                <h2>
                    لوازم جانبی اورجینال
                </h2>
            </div>

            <div class="flex-container wrap" id="section5_flex-item1">
                <a href="#">
                    <div class="flex-item">
                        <div class="flex-container" id="inner_flex">
                            <div class="flex-item_inner1">
                                <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Apple-Watch.png" alt="airp">
                            </div>
                            <div class="flex-item_inner2">
                                <p id="p11">اپل واچ نایکی پلاس سری SE آلومینیوم نقره ای با بند سیلیکون سفید</p>
                                <p id="p22">۹٬۸۷۰٬۰۰۰ تومان</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="flex-item">
                        <div class="flex-container" id="inner_flex">
                            <div class="flex-item_inner1">
                                 <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/headphon.png" alt="airp">
                            </div>
                            <div class="flex-item_inner2">
                                <p id="p11">اپل واچ نایکی پلاس سری SE آلومینیوم نقره ای با بند سیلیکون سفید</p>
                                <p id="p22">۹٬۸۷۰٬۰۰۰ تومان</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="flex-item">
                        <div class="flex-container" id="inner_flex">
                            <div class="flex-item_inner1">
                                <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/iphone13.png" alt="airp">
                            </div>
                            <div class="flex-item_inner2">
                                <p id="p11">اپل واچ نایکی پلاس سری SE آلومینیوم نقره ای با بند سیلیکون سفید</p>
                                <p id="p22">۹٬۸۷۰٬۰۰۰ تومان</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="flex-item">
                        <div class="flex-container" id="inner_flex">
                            <div class="flex-item_inner1">
                                <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/airpod.png" alt="airp">
                            </div>
                            <div class="flex-item_inner2">
                                <p id="p11">اپل واچ نایکی پلاس سری SE آلومینیوم نقره ای با بند سیلیکون سفید</p>
                                <p id="p22">۹٬۸۷۰٬۰۰۰ تومان</p>
                            </div>
                        </div>
                    </div> 
                </a>
                <a href="#">
                    <div class="flex-item">
                        <div class="flex-container" id="inner_flex">
                            <div class="flex-item_inner1">
                                <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/iphone-13-pro-max-blue-select.png" alt="airp">
                            </div>
                            <div class="flex-item_inner2">
                                <p id="p11">اپل واچ نایکی پلاس سری SE آلومینیوم نقره ای با بند سیلیکون سفید</p>
                                <p id="p22">۹٬۸۷۰٬۰۰۰ تومان</p>
                            </div>
                        </div>
                    </div> 
                </a>
                <a href="#">
                    <div class="flex-item">
                        <div class="flex-container" id="inner_flex">
                            <div class="flex-item_inner1">
                                <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/284147.png" alt="airp">
                            </div>
                            <div class="flex-item_inner2">
                                <p id="p11">اپل واچ نایکی پلاس سری SE آلومینیوم نقره ای با بند سیلیکون سفید</p>
                                <p id="p22">۹٬۸۷۰٬۰۰۰ تومان</p>
                            </div>
                        </div>
                    </div> 
                </a>
            </div>

        </section>

        <?php if(get_theme_mod('iclinic-blog-callout-display') == 'Yes') { ?>
        <section>
            <div class="flex-container wrap" id="section9_flex_container">
                <div class="flex-item" id="section9_flex-item1">
                    
                    <div class="flex-container" style="flex-direction: column;display: flex;">
                        <div class="flex-item-top">

                            <?php if(get_theme_mod('iclinic-blog-callout-image1')): { ?>
                                <img src="<?php
                                echo wp_get_attachment_url(get_theme_mod('iclinic-blog-callout-image1'));
                                ?>" alt="banner">
                            <?php } else: { ?>
                                <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Frame-100.png" alt="frame">
                            <?php } endif; ?>

                        </div>
                        <div class="flex-item-btm">
                            <!-- <h6>عنوان پست بلاگ شماره یک</h6> -->
                            <h6><?php echo get_theme_mod('iclinic-blog-callout-headline1');?></h6>

                            <!-- <p class="s9pt">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت</p> -->
                            <p class="s9pt"><?php echo get_theme_mod('iclinic-blog-callout-text1');?></p>

                            <a href="<?php echo get_permalink(get_theme_mod('iclinic-blog-callout-link1')); ?>">
                                <p>بیشتر بخوانید <span class="material-symbols-outlined">arrow_back</span></p>
                            </a>
                            
                        </div>
                    </div>

                </div>
                <div class="flex-item" id="section9_flex-item2">

                    <div class="flex-container" style="flex-direction: column;display: flex;">
                        <div class="flex-item-top">

                            <?php if(get_theme_mod('iclinic-blog-callout-image2')): { ?>
                                <img src="<?php
                                echo wp_get_attachment_url(get_theme_mod('iclinic-blog-callout-image2'));
                                ?>" alt="banner">
                            <?php } else: { ?>
                                <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Frame-100.png" alt="frame">
                            <?php } endif; ?>

                        </div>
                        <div class="flex-item-btm">
                            <h6><?php echo get_theme_mod('iclinic-blog-callout-headline2');?></h6>

                            <p class="s9pt"><?php echo get_theme_mod('iclinic-blog-callout-text2');?></p>
                            
                            <a href="<?php echo get_permalink(get_theme_mod('iclinic-blog-callout-link2')); ?>">
                                <p>بیشتر بخوانید <span class="material-symbols-outlined">arrow_back</span></p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex-item" id="section9_flex-item3">

                    <div class="flex-container" style="flex-direction: column;display: flex;">
                        <div class="flex-item-top">

                            <?php if(get_theme_mod('iclinic-blog-callout-image3')): { ?>
                                <img src="<?php
                                echo wp_get_attachment_url(get_theme_mod('iclinic-blog-callout-image3'));
                                ?>" alt="banner">
                            <?php } else: { ?>
                                <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Frame-100.png" alt="frame">
                            <?php } endif; ?>

                        </div>
                        <div class="flex-item-btm">
                            <h6><?php echo get_theme_mod('iclinic-blog-callout-headline3');?></h6>

                            <p class="s9pt"><?php echo get_theme_mod('iclinic-blog-callout-text3');?></p>
                            
                            <a href="<?php echo get_permalink(get_theme_mod('iclinic-blog-callout-link3')); ?>">
                                <p>بیشتر بخوانید <span class="material-symbols-outlined">arrow_back</span></p>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="flex-container" style="display: flex;justify-content: center; flex-direction: row;">
                <div class=flex-item id="more9">
                    <a href="#">
                        <P>مطالب بیشتر +</P>
                    </a>

                </div>

            </div>
        </section>
        <?php } ?>

        <section>
            <div class="flex-container wrap" id="section10" style="flex-direction: row;display: flex;">
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Energizer_logo.png" alt="energizer">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Anker-logo.png" alt="Anker">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/SanDisk_Logo_2007.png" alt="SanDisk">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/1200px-Lexar.png" alt="Lexar">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/baseus.png" alt="baseus">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Anker-logo.png" alt="Anker">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/SanDisk_Logo_2007.png" alt="SanDisk">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Energizer_logo.png" alt="energizer">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/baseus.png" alt="baseus">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/1200px-Lexar.png" alt="Lexar">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Energizer_logo.png" alt="energizer">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Anker-logo.png" alt="Anker">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/SanDisk_Logo_2007.png" alt="SanDisk">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/1200px-Lexar.png" alt="Lexar">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/baseus.png" alt="baseus">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Anker-logo.png" alt="Anker">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/SanDisk_Logo_2007.png" alt="SanDisk">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/Energizer_logo.png" alt="energizer">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/baseus.png" alt="baseus">
                </div>
                <div class="s10_flex_item">
                    <img src="http://localhost/wordpress.developer/wp-content/themes/iclinic_theme/assets/images/1200px-Lexar.png" alt="Lexar">
                </div>

            </div>

        </section>

    </main>
</div>

<?php get_footer(); ?>