<?php $type = get_field('about_hero_type'); ?>

<?php if ($type === 'image'): ?>
  <?php $image = get_field('about_hero'); ?>
  <?php if ($image['desktop']): ?>
  <section class="about-grid about-hello-hero">
    <div class="about-hero">
      <picture class="about-image-block__picture">
        <source srcset="<?php echo $image['mobile']; ?>" media="(max-width: 700px)">
        <source srcset="<?php echo $image['desktop']; ?>">
        <img class="about-image-block__img" srcset="<?php echo $image['desktop']; ?>" alt="">
      </picture>
    </div>
  </section>
  <?php else: ?>
  <div class="press-details-placeholder">
    <div class="press-details-placeholder-wrapper">
      <picture class="press-details-picture">
        <source srcset="<?php bloginfo('template_url'); ?>/images/press-placeholder-hero.jpg">
        <img class="press-details-img" srcset="<?php bloginfo('template_url'); ?>/images/press-details/press-details-placeholder.png" alt="">
        </picture>
    </div>
  </div>
  <?php endif; ?>
<?php else: ?>
  <?php
    $video = get_field('about_hero_video');
    $controls = get_field('about_hero_controls');

    if ($controls === true) {
      $videoSrc = getForegroundVideoSrc($video);
    } else {
      $videoSrc = getBackgroundVideoSrc($video);
    }
  ?>
  <?php if ($videoSrc): ?>
  <section class="about-grid about-hello-hero">
    <div class="about-hero">
      <div class="about__video-wrapper">
        <iframe
          src="<?php echo $videoSrc; ?>"
          width="640"
          height="360"
          frameborder="0"
          webkitallowfullscreen
          mozallowfullscreen
          allowfullscreen
        ></iframe>
      </div>
    </div>
    </section>
  <?php endif; ?>
<?php endif; ?>


