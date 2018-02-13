<?php
/**
 * Default page template
 */
get_header(); ?>

<div class="default-content">
  <?php while ( have_posts() ) : the_post();
    the_content();
  endwhile; ?>
</div>

<?php get_footer(); ?>
