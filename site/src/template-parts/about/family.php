<section class="about-grid about-family">
  <div class="about-family-main">
    <div class="about-family-person">
      <div class="about-text-flex-column">
        <h2 class="about-family-headline"><?php the_field('leadership_headline'); ?></h2>
        <div class="about-family__dash"></div>
      </div>
    </div>

    <?php if( have_rows('leadership_leaders') ): ?>
      <?php while( have_rows('leadership_leaders') ): the_row(); ?>
        <?php
          $name = get_sub_field('leader_name');
          $id = preg_replace("/[^\w]+/", "-", $name);
          $title = get_sub_field('leader_title');
          $image = get_sub_field('leader_image');
        ?>

        <div class="about-family-person">
          <a class="about-family-link" href="#<?php echo $id; ?>">
            <div class="about-family-copy">
              <div class="about-family-bio">
                <p class="about-family-bio-text">View Bio</p>
              </div>
            </div>

            <picture class="about-image-block__picture">
              <source srcset="<?php echo $image['Grid']; ?>">
              <img class="about-image-block__img" srcset="<?php echo $image['Grid']; ?>" alt="">
            </picture>
            <div class="about-family-background"></div>
            <div class="about-family-description">
              <h3 class="about-family-name"><?php echo $name; ?></h3>
              <p class="about-family-title"><?php echo $title; ?></p>
            </div>
          </a>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</section>
