<?php
  $type = get_field('project_detail_hero_type');
  $hero = get_field('project_detail_hero');
  $video = get_field('project_detail_hero_video');
  $videoSrc = getForegroundVideoSrc($video);
?>
<?php if ($type === 'video'): ?>
  <section class="pd-grid pd-grid--full">
    <div class="pd-grid__block pd-grid__block--video">
      <?php if ($videoSrc): ?>
        <div class="pd-grid__video-wrapper">
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
    </div>
  </section>
<?php else: ?>
  <?php if ($hero['desktop']) : ?>
    <section class="pd-grid pd-grid--full">
      <div class="pd-grid__block pd-grid__block--image">
        <picture class="pd-grid__picture">
          <source srcset="<?php echo $hero['mobile']; ?>" media="(max-width: 700px)">
          <source srcset="<?php echo $hero['desktop']; ?>">
          <img class="pd-grid__img" srcset="<?php echo $hero['desktop']; ?>" alt="">
        </picture>
      </div>
    </section>
  <? endif; ?>
<?php endif; ?>
