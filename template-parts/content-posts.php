<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

<div id="content_row" class="row">
    <header class="entry-header">

        <?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
    
        <div class="byline">
          <?php esc_html_e( 'Author:' ); ?> <?php the_author_posts_link(); ?>
        </div>

    </header>
    
    <div class="entry-content">
        <div class="flex-container" style="flex-direction: row;display: flex;">
            <div class="flex-item-img" style="margin-left: 20px; ">
                <?php the_post_thumbnail(); ?>
            </div>

            <div class="flex-item-excerpt">
                <?php the_excerpt(); ?>
            </div>

        </div>
        
    </div>
</div>
    

</article>
