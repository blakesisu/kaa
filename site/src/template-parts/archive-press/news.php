<section class="press-section press-news">
  <!-- featured post -->
  <?php include("feature.php"); ?>

  <div class="press-news-container">
    <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $article_query = new WP_Query(
            array(
              'post_type' => 'press',
              'paged' => $paged,
              'posts_per_page' => 9,
              // 'order' => 'DESC',
              // 'meta_key' => 'press_article_featured',
              // 'meta_compare' => 'NOT EXISTS'
            )
        );

        $posts = $article_query->posts;
        // var_dump($posts);

        if ($posts) : ?>
          <div class="proj">
            <?php foreach ($posts as $post) :
                setup_postdata($post) ?>
            <?php
              $image = get_field('press_article_thumbnail');
              $date = get_the_date();
              $title = get_the_title();
              $content = get_field('press_article_main_content');
            ?>

          <div class="press-news-item">
            <a href="<?php echo the_permalink($post->ID); ?>">
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
    </div>

    <div class="press-news-paginator">
      <div class="press-news-pages">
        <?php
          pagination_bar();
        ?>
      </div>
    </div>
    <?php wp_reset_postdata(); ?>
        <?php endif; ?>
</section>
