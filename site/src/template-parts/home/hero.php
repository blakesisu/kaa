<?php
  $type = get_field('home_hero_type');
  $image = get_field('home_hero_image');
  $video = get_field('home_hero_video');
  $videoSrc = getBackgroundVideoSrc($video);
?>
<section class="hm-hero">
  <button class="hm-scroll-cta">
    <?php include(__DIR__ ."/../svgs/scroll.svg"); ?>
    <span class="hm-scroll-cta__text">Scroll</span>
  </button>
  <?php if ($type === 'image'): ?>
    <div class="hm-hero__img"></div>
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
  <?php else: ?>
    <?php if ($videoSrc): ?>
      <div class="hm-hero__video-wrapper">
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
    <?php endif; ?>
  <?php endif; ?>
</section>
