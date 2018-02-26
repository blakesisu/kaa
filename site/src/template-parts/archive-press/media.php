<?php
  $taxonomy = get_taxonomy( 'magazine' );
  $terms = get_terms([
    'taxonomy' => 'magazine',
    'hide_empty' => false,
  ]);
?>

<section class="press-section press-media">
  <div class="press-media-header">
    <div class="press-media-header-placeholder"></div>
    <div class="press-media-headline">
      <h1>KAA DESIGN IN THE MEDIA</h1>
    </div>

    <div class="press-media-dynamos">
      <div class="press-media-dropdown">
        <!-- dropdown header -->
        <button>
          <span class="press-media-dropdown-header">
            <p>ALL PUBLICATIONS</p>
            <?php include(__DIR__ ."/../svgs/right-chev.svg"); ?>
          </span>
        </button>
        <!-- dropdown options -->
        <div class="press-media-dropdown-container">
          <ul class="press-media-dropdown-list">
            <li>
              <button
                class="press-media-mag-filter"
                data-mag="all"
              >ALL PUBLICATIONS</button>
            </li>
            <?php foreach ( $terms as $term) : ?>
              <li>
                <button
                  class="press-media-mag-filter"
                  data-mag="<?php echo $term->name; ?>"
                ><?php echo $term->name; ?></button>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="press-media-nav-arrows">
        <button class="press-media-back">
            <?php include(__DIR__ ."/../svgs/left-chev.svg"); ?>
        </button>
        <button class="press-media-next">
            <?php include(__DIR__ ."/../svgs/right-chev.svg"); ?>
        </button>
      </div>
    </div>
  </div>

  <div class="press-media-mags swiper-container">
    <ul class="press-media-mags-wrapper swiper-wrapper">
    <?php
      query_posts(array(
        'post_type' => 'magazines',
        'posts_per_page' => -1
      ));
    ?>
      <?php while (have_posts()) :
          the_post();

          $date = get_the_date();
          $term = get_field('magazine_taxonomy');
          $link = get_field('magazine_read_link');
          $pdf = get_field('magazine_pdf');
          $image = get_field('magazine_image');
          $feature = get_field('magazine_feature'); ?>

        <li class="press-media-mag-item swiper-slide" data-magitem="<?php echo $term->name; ?>">
          <div class="press-media-mag-content">
            <picture class="press-picture">
              <source srcset="<?php echo $image; ?>">
              <img class="press-img" srcset="<?php echo $image; ?>" alt="exhibit">
            </picture>
            <div class="press-media-article">
              <p class="press-media-article-date"><?php echo $date; ?></p>
              <h3 class="press-media-article-title"><?php echo $term->name; ?></h3>
                <?php
                  if ($feature) :
                    // override $post
                    $post = $feature;
                    setup_postdata( $post );
                ?>
                  <p class="press-media-article-content">
                    Featuring
                    <a href="<?php echo the_permalink($post->ID); ?>" class="press-highlight">
                      <?php echo the_title(); ?>
                    </a>
                  </p>
                <?php wp_reset_postdata(); ?>
              <?php endif; ?>
            </div>
            <div class="press-media-actions">
              <?php if ($pdf) : ?>
                <a href="<?php echo $pdf; ?>" class="press-media-pdf"><?php include(__DIR__ ."/../svgs/down-chev.svg"); ?> <span>PDF</span></a>
              <?php endif; ?>
              <?php if ($link) : ?>
                <a href="<?php echo $link; ?>" class="press-media-read"><span>READ</span></a>
              <?php endif; ?>
            </div>
          </div>
        </li>

      <?php endwhile; ?>
    </ul>
  </div>
</section>
