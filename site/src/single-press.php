<?php
/**
 * press-detail page template
 * Template Name: single-press
 */
get_header(); ?>

<section class="press-details">
  <?php
    $hero = get_field('press_article_hero');
  ?>
  <?php if ($hero['desktop']) : ?>
    <!-- hero -->
    <div class="press-details-hero">
      <div class="press-details-hero-wrapper">
        <picture class="press-details-picture">
          <source srcset="<?php echo $hero['mobile']; ?>" media="(max-width: 700px)">
          <source srcset="<?php echo $hero['desktop']; ?>">
          <img class="press-details-img" srcset="<?php echo $hero['desktop']; ?>" alt="">
  <?php else :?>
    <!-- placeholder -->
    <div class="press-details-placeholder">
      <div class="press-details-placeholder-wrapper">
        <picture class="press-details-picture">
          <source srcset="<?php bloginfo('template_url'); ?>/images/press-details/press-details-placeholder.png">
          <img class="press-details-img" srcset="<?php bloginfo('template_url'); ?>/images/press-details/press-details-placeholder.png" alt="">
  <?php endif; ?>
        </picture>
      </div>
    </div>

  <!-- Content date, title, links -->
  <?php
    $title = get_the_title();
    $date = get_the_date();
  ?>
  <div class="press-details-item press-details-feature-meta press-details-dual">
    <div class="press-details-feature-wrapper">
    <p class="press-details-feature-date"><?php echo $date ?></h2>
      <h2 class="press-details-feature-header"><?php echo $title ?></h2>
      <div class="press-details-actions">

        <?php $buttonArray = [
          get_field('press_article_button_1'),
          get_field('press_article_button_2')
        ]; ?>

        <?php foreach($buttonArray as $button) : ?>

          <?php if( $button['press_article_button_label'] ): ?>

            <a href="<?php echo $button['press_article_button_link'] ?>" class="press-details-read-button"><?php echo $button['press_article_button_label'] ?></a>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <!-- Main Content and optional picture -->
  <?php
    $thumb_toggle = get_field('press_article_thumbnail_toggle');
    $main_content = get_field('press_article_main_content');
    $last_row = 'light';
  ?>
  <?php if ($thumb_toggle) : ?>
    <?php
      $thumbnail = get_field('press_article_thumbnail');
    ?>
    <div class="press-details-item press-details-dual">
      <div class="press-details-img-wrapper">
        <picture class="press-details-picture">
        <source srcset="<?php echo $thumbnail?>" media="(max-width: 700px)">
          <source srcset="<?php echo $thumbnail?>">
          <img class="press-details-img" srcset="<?php echo $thumbnail?>" alt="">
        </picture>
      </div>
    </div>
    <div class="press-details-item press-details-feature-content press-details-single-feature">
  <?php else : ?>
    <div class="press-details-item press-details-feature-content press-details-dual">
  <?php endif; ?>
      <?php echo $main_content ?>
      <?php if (!$thumb_toggle) : ?>
        <a href="#" class="press-details-share-button">
          <?php include(__DIR__ ."/template-parts/svgs/share.svg"); ?> Share
        </a>
      <? endif; ?>
    </div>

    <!-- Additional details -->
  <?php
    $inner_details_total = count( get_field('press_article_inner_details'));
    $inner_details_count = 0;
  ?>
  <?php if( have_rows('press_article_inner_details') ): ?>
    <?php while ( have_rows('press_article_inner_details') ) : the_row(); ?>
      <?php $inner_details_count++; ?>

      <!-- IMAGE -->
      <!-- - - - - - - - - - - - - - - - - - - - - - -->
      <?php if( get_row_layout() == 'press_detail_text' ): ?>
        <?php
          $rowText = get_sub_field('press_detail_text');
          $rowBackground = get_sub_field('press_detail_text_dark_background');
        ?>

        <?php if( $rowBackground ): ?>
          <?php if($inner_details_total == $inner_details_count) : ?>
            <?php $last_row = 'dark'; ?>
          <?php endif; ?>
          <div class="press-details-item press-details-text-aside press-details-single press-details-dark">
        <?php else : ?>
          <?php if($inner_details_total == $inner_details_count) : ?>
            <?php $last_row = 'light'; ?>
          <?php endif; ?>
          <div class="press-details-item press-details-text-aside press-details-single">
        <?php endif ?>
            <p><?php echo $rowText ?></p>
          </div>
      <?php elseif(get_row_layout() == 'press_detail_image') : ?>

        <?php
          $rowImage = get_sub_field('press_detail_image');
        ?>

        <?php if($inner_details_total == $inner_details_count) : ?>
          <?php $last_row = 'medium'; ?>
        <?php endif; ?>

        <div class="press-details-item press-details-single press-details-medium">
          <div class="press-details-advert-wrapper">
            <picture class="press-details-picture">
              <source srcset="<?php echo $rowImage ?>">
              <img class="press-details-img" srcset="<?php echo $rowImage ?>" alt="">
            </picture>
          </div>
        </div>
      <?php endif ; ?>
    <?php endwhile ; ?>
  <?php endif ; ?>

  <?php if ($thumb_toggle) : ?>
    <div class="press-details-item press-details-share-<?php echo $last_row ?>">
      <a href="#" class="press-details-share-button">
        <?php include(__DIR__ ."/template-parts/svgs/share.svg"); ?> Share
      </a>
    </div>
  <? endif; ?>

  <!-- related articles -->
  <?php
    $relatedArticle1 = get_field('related_article_1');
    $relatedArticle2 = get_field('related_article_2');
    $articleArray = [$relatedArticle1, $relatedArticle2];
  ?>
  <?php
    if ($relatedArticle1) :
  ?>
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
            <p class="pd-related-project__more">More <?php include(__DIR__ ."/template-parts/svgs/chevron-right.svg"); ?></p>
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
        <?php
          wp_reset_postdata();
        ?>
      <?php
        endforeach;
        ?>
    </div>
  </div>
  <?php
  endif;
  ?>
</section>

<?php get_footer(); ?>
