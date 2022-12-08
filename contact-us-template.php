<?php 
/**
 * Template Name: contact us page
 */
?>

<?php get_header(); ?>

<body>
    <main>
        <section id="contact_section1">
            <div class="row text-center" id="cu_main_title">
                <h2 class="prefix_iclinic-contactus-callout-headline">
                    <?php echo get_theme_mod('iclinic-contactus-callout-headline');?>
                </h2>
            </div>
           
            <div class="flex-container" id="cu_flex_container">
                <div class="prefix_iclinic-contactus-callout-image1 flex-item ">

                    <?php if(wp_get_attachment_url(get_theme_mod('iclinic-contactus-callout-image1'))): { ?>
                        <img src="<?php echo wp_get_attachment_url(get_theme_mod('iclinic-contactus-callout-image1'));?>" alt="person1">
                    <?php } else: { ?>
                        <img src="<?php bloginfo('template_url')?>/assets/images/Frame107.png" alt="person1"> 
                    <?php } endif; ?>

                    <div class="overlay row">
                        <p id="P_name"><?php echo get_theme_mod('iclinic-contactus-callout-name1');?></p>
                        <p id="P_role"><?php echo get_theme_mod('iclinic-contactus-callout-role1');?></p>

                    </div>
                </div>
                <div class="prefix_iclinic-contactus-callout-image2 flex-item">

                    <?php if(wp_get_attachment_url(get_theme_mod('iclinic-contactus-callout-image2'))): { ?>
                        <img src="<?php echo wp_get_attachment_url(get_theme_mod('iclinic-contactus-callout-image2'));?>" alt="person2">
                    <?php } else: { ?>
                        <img src="<?php bloginfo('template_url')?>/assets/images/Frame107.png" alt="person1"> 
                    <?php } endif; ?>

                    <div class="overlay row">
                        <p id="P_name"><?php echo get_theme_mod('iclinic-contactus-callout-name2');?></p>
                        <p id="P_role"><?php echo get_theme_mod('iclinic-contactus-callout-role2');?></p>

                    </div>
                </div>

                <div class="prefix_iclinic-contactus-callout-image3 flex-item">

                    <?php if(wp_get_attachment_url(get_theme_mod('iclinic-contactus-callout-image3'))): { ?>
                        <img src="<?php echo wp_get_attachment_url(get_theme_mod('iclinic-contactus-callout-image3'));?>" alt="person3">
                    <?php } else: { ?>
                        <img src="<?php bloginfo('template_url')?>/assets/images/Frame107.png" alt="person1"> 
                    <?php } endif; ?>

                    <div class="overlay row">
                        <p id="P_name"><?php echo get_theme_mod('iclinic-contactus-callout-name3');?></p>
                        <p id="P_role"><?php echo get_theme_mod('iclinic-contactus-callout-role3');?></p>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="prefix_iclinic-contactus-callout-txttitle1" id="cu_text1">
                        <h6><?php echo get_theme_mod('iclinic-contactus-callout-txttitle1');?></h6>
                        <p><?php echo get_theme_mod('iclinic-contactus-callout-text1');?></p>
                    </div>
                    
                    <div id="cu_text2">
                        <div class="flex-container">
                            <div class="row">
                                <details>
                                    <summary class="prefix_iclinic-contactus-callout-txttitle2"><?php echo get_theme_mod('iclinic-contactus-callout-txttitle2');?></summary>
                                    <p id="cu_text2_p"><?php echo get_theme_mod('iclinic-contactus-callout-text2');?></p>
                                 </details>
                            </div>
                        </div>

                        <div class="flex-container">
                            <div class="row">
                                <details>
                                    <summary class="prefix_iclinic-contactus-callout-txttitle3"><?php echo get_theme_mod('iclinic-contactus-callout-txttitle3');?></summary>
                                    <p id="cu_text2_p"><?php echo get_theme_mod('iclinic-contactus-callout-text3');?></p>
                                 </details>
                            </div>
                        </div>

                        <div class="flex-container">
                            <div class="prefix_iclinic-contactus-callout-txttitle4 row">
                                <details>
                                    <summary class="prefix_iclinic-contactus-callout-txttitle4"><?php echo get_theme_mod('iclinic-contactus-callout-txttitle4');?></summary>
                                    <p id="cu_text2_p"><?php echo get_theme_mod('iclinic-contactus-callout-text4');?></p>
                                 </details>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

                <!-- <div class="scrolling-wrapper row flex-row flex-nowrap mt-4 pb-4 pt-2"> -->
                <!--
                    <div class="flex-container" style="justify-content: start;display: flex;flex-direction: column;">
                    <div class="card card-block card-1" id="section1_div">
                            <button id="s1btn">
                                <img src="/assets/images/MN643.png" alt="iphone1">
                                <p>لوازم جانبی اپل</p>
                            </button>
                        </div>
                        <div class="card card-block card-2">dasd</div>
                    </div>
                    <div class="flex-container">
                        <div class="card card-block card-3">asff</div>
                    </div> -->
                    
                <!-- </div> -->
            
        </section>
    </main>
</body>

<?php get_footer(); ?>