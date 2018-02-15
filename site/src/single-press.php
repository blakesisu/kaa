<?php
/**
 * press-detail page template
 * Template Name: single-press
 */
get_header(); ?>

<section class="press-details">
  <?php include("template-parts/press-detail/hero.php"); ?>

  <!-- Content date, title, links -->
  <?php
    $title = get_the_title();
    $date = get_the_date();
  ?>
  <div class="press-details-feature-meta press-details-dual">
    <div class="press-details-feature-wrapper">
      <p class="press-details-feature-date"><?php echo $date ?></h2>
      <h2 class="press-details-feature-header"><?php echo $title ?></h2>
      <?php include("template-parts/common/share.php"); ?>
    </div>
  </div>

  <!-- Main Content and optional picture -->
  <?php
    $thumb_toggle = get_field('press_article_thumbnail_toggle');
    $main_content = get_field('press_article_main_content');
    $last_row = 'light';
  ?>
  <?php if ($thumb_toggle) : ?>
    <?php $thumbnail = get_field('press_article_thumbnail'); ?>
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
      <?php echo $main_content ?>
    </div>
  <?php else : ?>
    <div class="press-details-item press-details-feature-content press-details-dual">
      <?php echo $main_content ?>
    </div>
  <?php endif; ?>

  <?php include("template-parts/common/page-content.php"); ?>

  <?php include("template-parts/press-detail/related-articles.php"); ?>
</section>

<?php get_footer(); ?>
