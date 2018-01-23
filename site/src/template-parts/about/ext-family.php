<section class="about-grid about-ext-family">
  <div class="about-header-container">
    <h1 class="about-family-header"><?php the_field('family_headline'); ?></h1>
  </div>

  <ul class="about-ext-family-members">
    <?php if( have_rows('family_members') ): ?>
      <?php while( have_rows('family_members') ): the_row(); ?>
      <li class="about-ext-family-container">
        <h3 class="about-ext-family-name"><?php the_sub_field('name'); ?></h3>
        <span class="about-ext-family-title"><?php the_sub_field('title'); ?></span>
      </li>
      <?php endwhile; ?>
    <?php endif; ?>
  </ul>
</section>
