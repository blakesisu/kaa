<?php if( have_rows('leadership_leaders') ): ?>
  <?php while( have_rows('leadership_leaders') ): the_row(); ?>
    <?php
      $name = get_sub_field('leader_name');
      $id = preg_replace("/[^\w]+/", "-", $name);
      $title = get_sub_field('leader_title');
      $image = get_sub_field('leader_image');
      $bio = get_sub_field('leader_bio');
    ?>
    <section id="<?php echo $id; ?>" class="ab-bio">
      <button class="ab-bio__close-btn"><?php include(__DIR__ ."/../svgs/close.svg"); ?></button>
      <div class="ab-bio__header ab-bio__header--mobile">
        <h1 class="ab-bio__name"><?php echo $name; ?></h1>
        <h2 class="ab-bio__title"><?php echo $title; ?></h2>
        <div class="ab-bio__dash"></div>
      </div>
      <div class="ab-bio__image-container">
        <picture class="ab-bio__picture">
          <source srcset="<?php echo $image['Grid']; ?>" media="(max-width: 700px)">
          <source srcset="<?php echo $image['bio']; ?>">
          <img class="ab-bio__img" srcset="<?php echo $image['bio']; ?>" alt="">
        </picture>
      </div>
      <div class="ab-bio__text-container">
        <div class="ab-bio__text-wrapper">
          <div class="ab-bio__header ab-bio__header--desktop">
            <h1 class="ab-bio__name"><?php echo $name; ?></h1>
            <h2 class="ab-bio__title"><?php echo $title; ?></h2>
            <div class="ab-bio__dash"></div>
          </div>
          <div class="ab-bio__scroller">
            <div class="ab-bio__copy">
              <?php echo $bio; ?>
            </div>
            <?php if( have_rows('leader_articles') ): ?>
              <div class="ab-bio__articles">
                <h3 class="ab-bio__articles-header">Contributed Articles</h3>
                <?php while( have_rows('leader_articles') ): the_row(); ?>
                  <?php
                    $post = get_sub_field('leader_article');
                    setup_postdata( $post );
                  ?>
                  <div class="ab-bio__article">
                    <h4 class="ab-bio__article-header"><a href="<?php echo the_permalink($post->ID); ?>"><?php echo the_title(); ?> <?php include(__DIR__ ."/../svgs/chevron-right.svg"); ?></a></h4>
                    <p class="ab-bio__article-description">Ken Breisch, former Director of USC's Graduate Program in Historic Preservation, speaks on the history and philosophy of the preservation movement as it has evolved during the past century and its relevance to Southern California's treasures.</p>
                  </div>
                  <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>
