<!-- related articles -->
<?php
  $relatedArticle1 = get_field('related_article_1');
  $relatedArticle2 = get_field('related_article_2');
  $articleArray = [$relatedArticle1, $relatedArticle2];
?>
<?php if ($relatedArticle1) : ?>
<div class="pd-related-articles__container">
  <h1 class="pd-related-projects__header">Related Articles</h1>
  <div class="pd-related-projects__dash"></div>

  <div class="pd-related-projects__projects">
    <?php
      foreach($articleArray as $article) :
    ?>
      <?php
        // override $post (as long as last post type)
        $post = $article;
        setup_postdata( $post );
        $thumbnail = get_field('press_article_thumbnail');
      ?>
      <div class="pd-related-projects__project pd-related-project">
        <a href="<?php echo the_permalink($post->ID); ?>" class="pd-related-project__link">
          <div class="pd-related-project__copy">
            <h2 class="pd-related-project__header"><?php echo the_title(); ?></h2>
          </div>
          <p class="pd-related-project__more">More <?php include(__DIR__ ."/../svgs/chevron-right.svg"); ?></p>
          <?php if ($thumbnail): ?>
            <picture class="pd-related-project__picture">
              <source srcset="<?php echo $thumbnail; ?>">
              <img class="pd-related-project__img" src="<?php echo $thumbnail; ?>" alt="">
            </picture>
          <?php else: ?>
            <picture class="pd-related-project__picture">
              <source srcset="<?php bloginfo('template_url'); ?>/images/press-placeholder.jpg">
              <img class="pd-related-project__img" src="<?php bloginfo('template_url'); ?>/images/press-placeholder.jpg" alt="">
            </picture>
          <?php endif; ?>
        </a>
      </div>
      <?php wp_reset_postdata(); ?>
    <?php endforeach; ?>
  </div>
</div>
<?php endif; ?>
