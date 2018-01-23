<section class="about-grid about-hello-hero">
  <div class="about-hero">
    <?php $image = get_field('about_hero'); ?>
    <picture class="about-image-block__picture">
      <source srcset="<?php echo $image['mobile']; ?>" media="(max-width: 700px)">
      <source srcset="<?php echo $image['desktop']; ?>">
      <img class="about-image-block__img" srcset="<?php echo $image['desktop']; ?>" alt="">
    </picture>
  </div>

</section>
