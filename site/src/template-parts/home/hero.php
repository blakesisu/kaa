<?php $image = get_field('home_hero_image'); ?>
<section class="hm-hero">
  <button class="hm-scroll-cta">
    <?php include(__DIR__ ."/../svgs/scroll.svg"); ?>
    <span class="hm-scroll-cta__text">Scroll</span>
  </button>
  <!-- <div class="hm-hero__video-wrapper">
    <iframe
      src="https://player.vimeo.com/video/76979871?background=1"
      width="640"
      height="360"
      frameborder="0"
      webkitallowfullscreen
      mozallowfullscreen
      allowfullscreen
    ></iframe>
  </div> -->
  <div class="hm-hero__img"></div>
</section>
<style>
  .hm-hero__img {
    background-image: url(<?php echo $image['desktop']; ?>);
  }
  @media (max-width: 700px) {
    .hm-hero__img {
      background-image: url(<?php echo $image['mobile']; ?>);
    }
  }
</style>
