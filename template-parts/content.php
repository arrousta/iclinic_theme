<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

    <div class="container wrap">
        <div class="row">
            <div class="col">
                <?php the_title( '<h1>', '</h1>' ); ?>
            </div>
            <div class="col byline">
                <?php esc_html_e( 'Author:' ); ?> <?php the_author(); ?>
            </div>
        </div>

    </div>

  </header>

  <div class="entry-content">
        <div class="container">
            <div class="row">
                <?php the_content(); ?>
            </div>
        </div>
  </div>

  <div class="container">
      <?php if( comments_open() ) : ?>
    
        <?php comments_template(); ?>
    
      <?php endif; ?>
  </div>




</article>
