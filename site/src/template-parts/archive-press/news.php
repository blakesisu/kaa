<section class="press-section press-news">
  <?php
    $feature_query = new WP_Query(
        array(
          'post_type' => 'press',
          'meta_key' => 'press_article_feature',
          'meta_value' => 1
        )
    );

    $posts = $feature_query->posts;

    if ($posts) : ?>
    <div class="press-flex-container">
        <?php
          $post = array_pop($posts);
          setup_postdata($post)
        ?>
        <div class="press-column-item">
          <div class="press-img-wrapper">
            <?php
              $image = get_field('press_article_image');
              $title = get_the_title();
              $content = get_field('press_article_content');
            ?>
            <picture class="press-picture"><source srcset="<?php echo $image; ?>" media="(max-width: 700px)">
              <source srcset="<?php echo $image; ?>">
              <img class="press-book-img" srcset="<?php echo $image; ?>" alt="">
            </picture>
          </div>
        </div>

        <!-- Text Block TODO: check landing for layout inspiration on text blocks-->
        <div class="press-column-item press-text-feature">
          <div class="press-text-wrapper">
            <div class="press-text-header">
              <h2><?php echo $title; ?></h2>
            </div>
            <div class="press-text-description">
              <p><?php echo $content; ?></p>
            </div>
            <a href="#" class="press-read-button">READ MORE</a>
          </div>
        </div>

      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>

  <div class="press-news-container">
    <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $article_query = new WP_Query(
        array(
          'post_type' => 'press',
          'paged' => $paged,
          'posts_per_page' => 3,
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
          <?php
            // endif;
          ?>
          <?php endforeach; ?>
      </div>
    </div>

    <div class="press-news-paginator">
      <!-- <div class="press&#45;news&#45;pages"> -->
      <!--   <a href="#">1</a> -->
      <!--   <a href="#">2</a> -->
      <!--   <a href="#">3</a> -->
      <!--   <a href="#">4</a> -->
      <!--   <a href="#">5</a> -->
      <!--   <a href="#">6</a> -->
      <!--   <a href="#">7</a> -->
      <!--   <a href="#">8</a> -->
      <!--   <a href="#">9</a> -->
      <!--   <a href="#">10</a> -->
      <!-- </div> -->
      <div class="press-news-pages">
        <?php
          pagination_bar();
        ?>
      </div>
    </div>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>

</section>
