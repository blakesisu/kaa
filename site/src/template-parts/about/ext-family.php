<section class="about-grid about-ext-family">
  <div class="about-header-container">
    <h1 class="about-family-header"><?php the_field('family_headline'); ?></h1>
  </div>

  <ul class="about-ext-family__list">
    <?php if( have_rows('family_members') ): ?>
      <?php while( have_rows('family_members') ): the_row(); ?>
      <?php
        $name = get_sub_field('name');
        $title = get_sub_field('title');
        $image = get_sub_field('image');
      ?>
      <li class="about-ext-family__item">
        <div class="about-ext-family__text-container">
          <h3 class="about-ext-family__name"><?php echo $name; ?></h3>
          <span class="about-ext-family__title"><?php echo $title; ?></span>
        </div>
        <img class="about-ext-family__img" srcset="<?php echo $image; ?>" alt="">
      </li>
      <?php endwhile; ?>
    <?php endif; ?>
  </ul>
</section>
