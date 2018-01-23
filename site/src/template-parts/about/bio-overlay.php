<?php if( have_rows('leadership_repeater') ): ?>
  <?php while( have_rows('leadership_repeater') ): the_row(); ?>
    <?php
      $post = get_sub_field('leadership_leader');
      setup_postdata( $post );
    ?>
      <section id="<?php the_ID(); ?>" class="ab-bio">
        <button class="ab-bio__close-btn"><?php include(__DIR__ ."/../svgs/close.svg"); ?></button>
        <div class="ab-bio__header ab-bio__header--mobile">
          <h1 class="ab-bio__name"><?php the_title(); ?></h1>
          <h2 class="ab-bio__title"><?php the_field('leader_title'); ?></h2>
          <div class="ab-bio__dash"></div>
        </div>
        <div class="ab-bio__image-container">
          <?php $image = get_field('leader_image'); ?>
          <picture class="ab-bio__picture">
            <source srcset="<?php echo $image['Grid']; ?>" media="(max-width: 700px)">
            <source srcset="<?php echo $image['bio']; ?>">
            <img class="ab-bio__img" srcset="<?php echo $image['bio']; ?>" alt="">
          </picture>
        </div>
        <div class="ab-bio__text-container">
          <div class="ab-bio__header ab-bio__header--desktop">
            <h1 class="ab-bio__name"><?php the_title(); ?></h1>
            <h2 class="ab-bio__title"><?php the_field('leader_title'); ?></h2>
            <div class="ab-bio__dash"></div>
          </div>
          <div class="ab-bio__scroller">
            <div class="ab-bio__copy">
              <?php the_field('leader_bio'); ?>
            </div>
            <!-- <div class="ab-bio__articles">
              <h3 class="ab-bio__articles-header">Contributed Articles</h3>
              <div class="ab-bio__article">
                <h4 class="ab-bio__article-header"><a href="#">Historic Preservation Today <?php include(__DIR__ ."/../svgs/chevron-right.svg"); ?></a></h4>
                <p class="ab-bio__article-description">Ken Breisch, former Director of USC's Graduate Program in Historic Preservation, speaks on the history and philosophy of the preservation movement as it has evolved during the past century and its relevance to Southern California's treasures.</p>
              </div>
            </div> -->
          </div>
        </div>
      </section>
    <?php wp_reset_postdata(); ?>
  <?php endwhile; ?>
<?php endif; ?>
