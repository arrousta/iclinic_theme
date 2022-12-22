<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

    <div class="container text-center">

      <div class="flex-container" id="blog_content_flex">
        <div class="flex-item-img">
          <?php the_post_thumbnail(); ?>
        </div>

        <div class="flex-item-title">
          <?php the_title( '<h2>', '</h2>' ); ?>
        </div>

        <div class="flex-item-text">
          <div class="entry-content">
                <div class="container">
                    <div class="row">
                        <?php the_content(); ?>
                    </div>
                </div>
          </div>
        </div>

        <div class="container">
            <?php if( comments_open() ) : ?>
          
              <?php comments_template(); ?>
          
            <?php endif; ?>
        </div>
        
      </div>
    </div>

  </header>


  <!-- *********************************************************************************** -->
  <section>

            <?php
            // Define our WP Query Parameters
            $the_query = new WP_Query( 'posts_per_page=3' ); 
            ?>

      <div class="flex-container wrap" id="section9_flex_container">

            <?php
              // Start our WP Query
                while ($the_query -> have_posts()) : $the_query -> the_post();
              // Display the Post Title with Hyperlink
              ?>

                <div class="flex-item" id="section9_flex-item1">
                    
                    <div class="flex-container" id="blog-flex-container">
                        <div class="flex-item-top">

                        <div class="flex-container" id="flex-blog-img"> 
                          <div >
                            
                            <?php the_post_thumbnail(); ?>

                          </div>

                        </div>

                    
                        </div>

                        <div class="flex-item-btm">
                            <div class="s9h">
                              <a href="<?php the_permalink() ?>"><?php the_title('<h6>', '</h6>' ); ?></a>
                            </div>

                            <div class="s9pt">
                              <?php
                              // Display the Post Excerpt
                              the_excerpt(__('(more…)')); ?>
                            </div>

                            <a href="<?php echo get_permalink(get_theme_mod('iclinic-blog-callout-link1')); ?>">
                                <p>بیشتر بخوانید <span class="material-symbols-outlined">arrow_back</span></p>
                            </a>
                            
                        </div>
                    </div>

                </div>
                
                
                <?php
              // Repeat the process and reset once it hits the limit
            endwhile;
            wp_reset_postdata();
            ?>

      </div>
  </section>


        <!-- *************************************************************************************************** -->

        
  <!-- <ul>
  
  <?php
  // Define our WP Query Parameters
  $the_query = new WP_Query( 'posts_per_page=3' ); 
  ?>
    
  <?php
  // Start our WP Query
    while ($the_query -> have_posts()) : $the_query -> the_post();
  // Display the Post Title with Hyperlink
  ?>

  <li>
    <?php the_post_thumbnail(); ?>
  </li>
    
  <li>
    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
  </li>
    
  <li>
    <?php
    // Display the Post Excerpt
    the_excerpt(__('(more…)')); ?>
  </li>
    
  <?php
  // Repeat the process and reset once it hits the limit
    endwhile;
    wp_reset_postdata();
  ?>
  </ul> -->

</article>