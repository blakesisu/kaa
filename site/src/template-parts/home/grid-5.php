<section class="hm-grid hm-grid--5 hm-grid--3-high">
  <div class="hm-grid__content">

    <!-- Image Block -->
    <div class="hm-image-block hm-grid__item hm-grid__item--horizontal">
      <picture class="hm-image-block__picture">
        <source srcset="<?php bloginfo('template_url'); ?>/images/home/grid-5/horizontal-sml.jpg" media="(max-width: 700px)">
        <source srcset="<?php bloginfo('template_url'); ?>/images/home/grid-5/horizontal-lrg.jpg">
        <img class="hm-grid__img hm-image-block__img" srcset="<?php bloginfo('template_url'); ?>/images/home/grid-5/horizontal-lrg.jpg" alt="">
      </picture>
    </div>

    <!-- Project Block -->
    <div class="hm-project-block hm-grid__item hm-grid__item--square-lrg">
      <a href="#" class="hm-project-block__link">
        <div class="hm-project-block__copy">
          <h2 class="hm-project-block__header">TBD</h2>
          <p class="hm-project-block__cta">
            <span class="hm-project-block__cta-btn">Explore More</span>
          </p>
        </div>
        <p class="hm-project-block__more">More <?php include(__DIR__ ."/../svgs/chevron-right.svg"); ?></p>
        <picture class="hm-project-block__picture">
          <source srcset="<?php bloginfo('template_url'); ?>/images/home/grid-5/project-sml.jpg" media="(max-width: 700px)">
          <source srcset="<?php bloginfo('template_url'); ?>/images/home/grid-5/project-lrg.jpg">
          <img class="hm-grid__img hm-project-block__img" srcset="<?php bloginfo('template_url'); ?>/images/home/grid-5/project-lrg.jpg" alt="">
        </picture>
      </a>
    </div>

    <!-- Image Block -->
    <div class="hm-image-block hm-grid__item hm-grid__item--vertical">
      <picture class="hm-image-block__picture">
        <source srcset="<?php bloginfo('template_url'); ?>/images/home/grid-5/vertical-sml.jpg" media="(max-width: 700px)">
        <source srcset="<?php bloginfo('template_url'); ?>/images/home/grid-5/vertical-lrg.jpg">
        <img class="hm-grid__img hm-image-block__img" srcset="<?php bloginfo('template_url'); ?>/images/home/grid-5/vertical-lrg.jpg" alt="">
      </picture>
    </div>

    <!-- Text Block -->
    <div class="hm-text-block hm-grid__item hm-grid__item--text">
      <div class="hm-text-block__content">
        <h1 class="hm-text-block__header">Delight</h1>
        <div class="hm-text-block__dash"></div>
        <div class="hm-text-block__description-container">
          <p class="hm-text-block__description">Incorporating touches of whimsy and purposeful imperfection. The most inviting homes have an unforgettable character and offer us moments of delight and surprise, just like the people we love spending time with. <a class="hm-text-block__inline-cta" href="#">More on Delight</a></p>
        </div>
        <p class="hm-text-block__cta">
          <a class="hm-grid__img hm-text-block__cta-btn" href="#">More on Delight</a>
        </p>
      </div>
    </div>

  </div>
</section>
