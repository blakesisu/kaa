<section class="about-grid about-family">

    <div class="about-family-main">
      <div class="about-family-person">
        <div class="about-text-flex-column">
          <h2 class="about-family-headline"><?php the_field('leadership_headline'); ?></h2>
          <div class="about-family__dash"></div>
        </div>
      </div>

      <?php if( have_rows('leadership_repeater') ): ?>
        <?php while( have_rows('leadership_repeater') ): the_row(); ?>
          <?php
            $post = get_sub_field('leadership_leader');
            setup_postdata( $post );
          ?>

          <div class="about-family-person">
            <div class="about-family-link">
              <div class="about-family-copy">
                <div class="about-family-bio" data-popup-open="kirkpatrick">
                  <p class="about-family-bio-text">View Bio</p>
                </div>
              </div>

              <?php $image = get_field('leader_image'); ?>
              <picture class="about-image-block__picture">
                <source srcset="<?php echo $image['Grid']; ?>">
                <img class="about-image-block__img" srcset="<?php echo $image['Grid']; ?>" alt="">
              </picture>
              <div class="about-family-background"></div>
              <div class="about-family-description">
                <h3 class="about-family-name"><?php the_title(); ?></h3>
                <p class="about-family-title"><?php the_field('leader_title'); ?></p>
              </div>
            </div>
          </div>
          <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>
</section>
