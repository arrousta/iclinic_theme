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


</article>
