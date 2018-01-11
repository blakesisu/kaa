<?php
  $str = "Reveal";
  $newstr = "";
  $notintag = true;

  for ($i = 0; $i < strlen($str); $i++) {
    if (substr($str,$i,1) == "<") {
      $notintag = false;
    }
    if (($notintag) and (substr($str,$i,1) != " ")) {
      $newstr .= "<span>" . substr($str,$i,1) . "</span>";
    } else {
      $newstr .= substr($str,$i,1);
    }

    if (substr($str,$i,1) == ">") {
      $notintag = true;
    }
  }
?>

<section class="hm-grid hm-grid--1 hm-grid--3-high">
  <div class="hm-grid__content">

    <!-- Project Block -->
    <div class="hm-project-block hm-grid__item hm-grid__item--square-lrg">
      <a href="#" class="hm-project-block__link">
        <div class="hm-project-block__copy">
          <h2 class="hm-project-block__header">Monaco Gym &amp; Spa</h2>
          <p class="hm-project-block__cta">
            <span class="hm-project-block__cta-btn">Explore More</span>
          </p>
        </div>
        <p class="hm-project-block__more">More <?php include(__DIR__ ."/../svgs/chevron-right.svg"); ?></p>
        <picture class="hm-grid__picture hm-project-block__picture">
          <source srcset="<?php bloginfo('template_url'); ?>/images/home/grid-1/project-sml.jpg" media="(max-width: 700px)">
          <source srcset="<?php bloginfo('template_url'); ?>/images/home/grid-1/project-lrg.jpg">
          <img class="hm-grid__img hm-project-block__img" srcset="<?php bloginfo('template_url'); ?>/images/home/grid-1/project-lrg.jpg" alt="">
        </picture>
      </a>
    </div>

    <!-- Image Block -->
    <div class="hm-image-block hm-grid__item hm-grid__item--horizontal">
      <picture class="hm-grid__picture hm-image-block__picture">
        <source srcset="<?php bloginfo('template_url'); ?>/images/home/grid-1/horizontal-sml.jpg" media="(max-width: 700px)">
        <source srcset="<?php bloginfo('template_url'); ?>/images/home/grid-1/horizontal-lrg.jpg">
        <img class="hm-grid__img hm-image-block__img" srcset="<?php bloginfo('template_url'); ?>/images/home/grid-1/horizontal-lrg.jpg" alt="">
      </picture>
    </div>

    <!-- Text Block -->
    <div class="hm-text-block hm-grid__item hm-grid__item--text">
      <div class="hm-text-block__content">
        <h1 class="hm-text-block__header"><?php echo $newstr; ?></h1>
        <div class="hm-text-block__dash"></div>
        <div class="hm-text-block__description-container">
          <p class="hm-text-block__description">Exposing the elements that support a home and form its structure communicates ‘this place is real’ and reminds us of the endless combinations of textures and materials found in nature. <a class="hm-text-block__inline-cta" href="#">See How</a></p>
        </div>
        <p class="hm-text-block__cta">
          <a class="hm-text-block__cta-btn" href="#">See How</a>
        </p>
      </div>
    </div>

    <!-- Image Block -->
    <div class="hm-image-block hm-grid__item hm-grid__item--vertical">
      <picture class="hm-grid__picture hm-image-block__picture">
        <source srcset="<?php bloginfo('template_url'); ?>/images/home/grid-1/vertical-sml.jpg" media="(max-width: 700px)">
        <source srcset="<?php bloginfo('template_url'); ?>/images/home/grid-1/vertical-lrg.jpg">
        <img class="hm-grid__img hm-image-block__img" srcset="<?php bloginfo('template_url'); ?>/images/home/grid-1/vertical-lrg.jpg" alt="">
      </picture>
    </div>

  </div>
</section>
