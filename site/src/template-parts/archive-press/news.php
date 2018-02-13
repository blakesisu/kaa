<section class="press-section press-news">
  <!-- featured post -->
  <?php include("feature.php"); ?>

  <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $article_query = new WP_Query(
        array(
          'post_type' => 'press',
          'paged' => $paged,
          'posts_per_page' => 9,
          'meta_key' => 'press_article_featured',
          'meta_value' => 0
        )
    );

    $posts = $article_query->posts;
  ?>

  <?php if ($posts) : ?>
    <div class="press-news-container">
      <div class="press-news-list">
        <?php foreach ($posts as $post) : ?>
          <?php
            setup_postdata($post);
            $image = get_field('press_article_thumbnail');
            $date = get_the_date();
            $title = get_the_title();
            $content = get_field('press_article_main_content');
          ?>

          <div class="press-news-item">
            <a href="<?php echo the_permalink($post->ID); ?>" class="press-news-item__link">
              <?php if ($image): ?>
                <img class="press-news-img" src="<?php echo $image; ?>" alt="">
              <?php else: ?>
                <img class="press-news-img" src="<?php bloginfo('template_url'); ?>/images/press-placeholder.jpg" alt="">
              <?php endif; ?>
            </a>
            <div class="press-news-article">
              <p class="press-news-article-date"><?php echo $date; ?></p>
              <a href="<?php echo the_permalink($post->ID); ?>" class="press-news-article-title"><h3><?php echo $title; ?></h3></a>
              <div class="press-news-article-content"><?php echo $content; ?></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <!-- end proj -->
    </div>
    <!-- end press-news-container -->

    <?php include(__DIR__ ."/../common/pagination.php"); ?>

    <?php wp_reset_postdata(); ?>
  <?php endif; ?>
</section>
