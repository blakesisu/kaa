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
        </picture>
    </div>
  </div>
<?php else :?>
  <!-- placeholder -->
  <div class="press-details-placeholder">
    <div class="press-details-placeholder-wrapper">
      <picture class="press-details-picture">
        <source srcset="<?php bloginfo('template_url'); ?>/images/press-placeholder-hero.jpg">
        <img class="press-details-img" srcset="<?php bloginfo('template_url'); ?>/images/press-details/press-details-placeholder.png" alt="">
        </picture>
    </div>
  </div>
<?php endif; ?>
