<section class="about-grid about-values">

    <div class="about-header-container item1">
      <h1 class="about-value-headline"><?php the_field('values_header'); ?></h1>
    </div>

    <?php if( have_rows('about_values') ): ?>
      <?php while( have_rows('about_values') ): the_row(); ?>
        <div class="about-value">
          <!-- Image Block -->
          <div class="about-value__img-column">
            <div class="about-value__img-wrapper">
              <picture class="about-value__picture">
                <source srcset="<?php the_sub_field('image'); ?>">
                <img class="about-value__img" srcset="<?php the_sub_field('image'); ?>" alt="">
              </picture>
            </div>
          </div>
          <!-- Text Block -->
          <div class="about-value__text-column">
            <div class="about-value__text-wrapper">
              <h2 class="about-value__header"><?php the_sub_field('about_values_header'); ?></h2>
              <div class="about-value__dash"></div>
              <div class="about-value__description"><?php the_sub_field('about_values_copy'); ?></div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>

</section>
