<?php get_header(); ?>

  <div id="primary" class="content-area" style="margin-bottom: 80px">

    <div class="container">
    
        <main id="home_main" class="site-main" role="main">
    
            <div id="row_title" class="row">
                <h1><?php wp_title( '' ); ?></h1>
            </div>
    
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
            <?php get_template_part( 'template-parts/content-posts', get_post_format() ); ?>
    
          <?php endwhile; else : ?>
    
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
    
          <?php endif; ?>
    
          <?php echo paginate_links(); ?>
    
          <!-- <p>Template: home.php</p> -->
    
        </main>

    </div>
    

  </div>

<?php get_footer(); ?>
