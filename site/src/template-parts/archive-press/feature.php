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
