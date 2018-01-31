<section class="press-section press-feature">
  <div class="press-flex-container">
    <!-- Image Block -->
    <?php if( have_posts() ) : ?>
      <div class="press-column-item">
        <div class="press-img-wrapper">
          <?php
            $image = get_field('press_feature_image');
            $title = get_field('press_feature_content_title');
            $info = get_field('press_feature_content_info');
          ?>
          <picture class="press-picture">
            <source srcset="<?php echo $image; ?>" media="(max-width: 700px)">
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
            <p><?php echo $info; ?></p>
          </div>
          <a href="#" class="press-read-button">READ MORE</a>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>
