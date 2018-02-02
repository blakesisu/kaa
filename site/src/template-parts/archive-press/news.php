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
          'posts_per_page' => 8,
          'order' => 'DESC',
          'meta_key' => 'press_article_feature',
          'meta_compare' => 'NOT EXISTS'
        )
      );

      $posts = $article_query->posts;

      if ($posts): ?>

        <div class="proj">
          <?php foreach($posts as $post):

            setup_postdata($post) ?>

          <?php
            // if( !get_field('press_article_feature')):

            $image = get_field('press_article_image');
            $date = get_the_date();
            $title = get_the_title();
            $content = get_field('press_article_content'); ?>

          <div href="#" class="press-news-item">
            <a href="#">
              <picture class="press-news-picture">
                <source srcset="<?php echo $image; ?>" media="(max-width: 700px)">
                <source srcset="<?php echo $image; ?>">
                <img class="press-news-img" srcset="<?php echo $image; ?>" alt="margolis">
              </picture>
            </a>
            <div class="press-news-article">
              <p class="press-news-article-date"><?php echo $date; ?></p>
              <a href="#" class="press-news-article-title"><h3><?php echo $title; ?></h3></a>
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
