<?php
/**
 * Home page template
 * Template Name: Home
 * parts directory: template-parts/home
 */
get_header(); ?>

<?php include("template-parts/home/hero.php"); ?>

<?php if( have_rows('home_content') ): ?>
  <?php while ( have_rows('home_content') ) : the_row(); ?>

    <!-- FULL IMAGE -->
    <!-- - - - - - - - - - - - - - - - - - - - - - -->
    <?php if( get_row_layout() == 'full_image' ): ?>
      <?php
        $fullImage = get_sub_field('full_image_image');
        $fullImageLink = get_sub_field('full_image_link');
        $fullImageTitle = get_sub_field('full_image_title');
        $fullImageBtnLabel = get_sub_field('full_image_button_label');
      ?>
      <section class="hm-grid hm-grid--single hm-grid--2-high">
        <div class="hm-grid__content">

          <!-- Project Block -->
          <div class="hm-project-block hm-grid__item hm-grid__item--full">
            <?php if ( $fullImageLink ) : ?>
            <a href="#" class="hm-project-block__link">
            <?php else: ?>
            <div class="hm-project-block__container">
            <?php endif; ?>
              <div class="hm-project-block__copy">
                <?php if ( $fullImageTitle ) : ?>
                <h2 class="hm-project-block__header"><?php echo $fullImageTitle; ?></h2>
                <?php endif; ?>

                <?php if ( $fullImageBtnLabel ) : ?>
                <p class="hm-project-block__cta">
                  <span class="hm-project-block__cta-btn"><?php echo $fullImageBtnLabel; ?></span>
                </p>
                <?php endif; ?>
              </div>
              <?php if ( $fullImageLink ) : ?>
              <p class="hm-project-block__more">More <?php include(__DIR__ ."/template-parts/svgs/chevron-right.svg"); ?></p>
              <?php endif; ?>
              <picture class="hm-grid__picture hm-project-block__picture">
                <source srcset="<?php echo $fullImage['mobile']; ?>" media="(max-width: 700px)">
                <source srcset="<?php echo $fullImage['desktop']; ?>">
                <img class="hm-grid__img hm-project-block__img" srcset="<?php echo $fullImage['desktop']; ?>" alt="">
              </picture>
            </div>
          <?php if ( $fullImageLink ) : ?>
          </a>
          <?php else: ?>
          </div>
          <?php endif; ?>
        </div>
      </section>

    <!-- TEXT BLOCK AND THREE IMAGES -->
    <!-- - - - - - - - - - - - - - - - - - - - - - - -->
    <?php elseif( get_row_layout() == 'text_block_and_three_images' ): ?>
      <?php
        $textBlockPosition = get_sub_field('text_block_position');
        $textBlockTitle = get_sub_field('text_block_title');
        $textBlockLink = get_sub_field('text_block_link');
        $textBlockCopy = get_sub_field('text_block_copy');
        $textBlockLinkLabel = get_sub_field('text_block_link_label');

        $largeSquareImage = get_sub_field('large_square_image');
        $largeSquareLink = get_sub_field('large_square_link');
        $largeSquareTitle = get_sub_field('large_square_title');
        $largeSquareButtonLabel = get_sub_field('large_square_button_label');

        $verticalRectangleImage = get_sub_field('vertical_rectangle_image');
        $horizontalRectangleImage = get_sub_field('horizontal_rectangle_image');

        $str = $textBlockTitle;
        $newstr = "";
        $notintag = true;

        for ($i = 0; $i < strlen($str); $i++) {
          if (substr($str,$i,1) == "<") {
            $notintag = false;
          }
          if (($notintag) and (substr($str,$i,1) != " ")) {
            $newstr .= "<span>" . substr($str,$i,1) . "</span>";
          } else {
            $newstr .= substr($str,$i,1);
          }

          if (substr($str,$i,1) == ">") {
            $notintag = true;
          }
        }
      ?>
      <section class="hm-grid hm-grid--3-high is-<?php echo $textBlockPosition; ?>">
        <div class="hm-grid__content">

          <!-- Project Block -->
          <div class="hm-project-block hm-grid__item hm-grid__item--square-lrg">
            <?php if ($largeSquareLink) : ?>
            <a href="#" class="hm-project-block__link">
            <?php else: ?>
            <div href="#" class="hm-project-block__container">
            <?php endif; ?>
              <div class="hm-project-block__copy">
                <?php if ($largeSquareTitle) : ?>
                <h2 class="hm-project-block__header"><?php echo $largeSquareTitle; ?></h2>
                <?php endif; ?>
                <?php if ($largeSquareButtonLabel) : ?>
                <p class="hm-project-block__cta">
                  <span class="hm-project-block__cta-btn"><?php echo $largeSquareButtonLabel; ?></span>
                </p>
                <?php endif; ?>
              </div>
              <?php if ($largeSquareLink) : ?>
              <p class="hm-project-block__more">More <?php include(__DIR__ ."/template-parts/svgs/chevron-right.svg"); ?></p>
              <?php endif; ?>
              <picture class="hm-grid__picture hm-project-block__picture">
                <source srcset="<?php echo $largeSquareImage['mobile']; ?>" media="(max-width: 700px)">
                <source srcset="<?php echo $largeSquareImage['desktop']; ?>">
                <img class="hm-grid__img hm-project-block__img" srcset="<?php echo $largeSquareImage['desktop']; ?>" alt="">
              </picture>
            <?php if ($largeSquareLink) : ?>
            </a>
            <?php else: ?>
            </div>
            <?php endif; ?>
          </div>

          <!-- Image Block -->
          <div class="hm-image-block hm-grid__item hm-grid__item--horizontal">
            <picture class="hm-grid__picture hm-image-block__picture">
              <source srcset="<?php echo $horizontalRectangleImage['mobile']; ?>" media="(max-width: 700px)">
              <source srcset="<?php echo $horizontalRectangleImage['desktop']; ?>">
              <img class="hm-grid__img hm-image-block__img" srcset="<?php echo $horizontalRectangleImage['desktop']; ?>" alt="">
            </picture>
          </div>

          <!-- Text Block -->
          <div class="hm-text-block hm-grid__item hm-grid__item--text">
            <div class="hm-text-block__content">
              <?php if ($textBlockTitle) : ?>
              <h1 class="hm-text-block__header"><?php echo $newstr; ?></h1>
              <div class="hm-text-block__dash"></div>
              <?php endif; ?>
              <?php if ($textBlockCopy) : ?>
              <div class="hm-text-block__description-container">
                <p class="hm-text-block__description">
                  <?php echo $textBlockCopy; ?>
                  <?php if ($textBlockLink) : ?>
                  <a class="hm-text-block__inline-cta" href="<?php echo $textBlockLink; ?>"><?php echo $textBlockLinkLabel; ?></a>
                  <?php endif; ?>
                </p>
              </div>
              <?php endif; ?>
              <?php if ($textBlockLink) : ?>
              <p class="hm-text-block__cta">
                <a class="hm-text-block__cta-btn" href="<?php echo $textBlockLink; ?>"><?php echo $textBlockLinkLabel; ?></a>
              </p>
              <?php endif; ?>
            </div>
          </div>

          <!-- Image Block -->
          <div class="hm-image-block hm-grid__item hm-grid__item--vertical">
            <picture class="hm-grid__picture hm-image-block__picture">
              <source srcset="<?php echo $verticalRectangleImage['mobile']; ?>" media="(max-width: 700px)">
              <source srcset="<?php echo $verticalRectangleImage['desktop']; ?>">
              <img class="hm-grid__img hm-image-block__img" srcset="<?php echo $verticalRectangleImage['desktop']; ?>" alt="">
            </picture>
          </div>

        </div>
      </section>

    <!-- TEXT BLOCK AND TWO IMAGES -->
    <!-- - - - - - - - - - - - - - - - - - - - - - - -->
    <?php elseif( get_row_layout() == 'text_block_and_two_images' ): ?>
      <?php
        $textBlockPosition2 = get_sub_field('text_block_position');
        $textBlockTitle2 = get_sub_field('text_block_title');
        $textBlockLink2 = get_sub_field('text_block_link');
        $textBlockCopy2 = get_sub_field('text_block_copy');
        $textBlockLinkLabel2 = get_sub_field('text_block_link_label');

        $largeSquareImage2 = get_sub_field('large_square_image');
        $largeSquareLink2 = get_sub_field('large_square_link');
        $largeSquareTitle2 = get_sub_field('large_square_title');
        $largeSquareButtonLabel2 = get_sub_field('large_square_button_label');

        $smallSquareImage = get_sub_field('small_square_image');

        $str2 = $textBlockTitle2;
        $newstr2 = "";
        $notintag2 = true;

        for ($i = 0; $i < strlen($str2); $i++) {
          if (substr($str2,$i,1) == "<") {
            $notintag2 = false;
          }
          if (($notintag2) and (substr($str2,$i,1) != " ")) {
            $newstr2 .= "<span>" . substr($str2,$i,1) . "</span>";
          } else {
            $newstr2 .= substr($str2,$i,1);
          }

          if (substr($str,$i,1) == ">") {
            $notintag2 = true;
          }
        }
      ?>
      <section class="hm-grid hm-grid--2-high is-<?php echo $textBlockPosition2; ?>">
        <div class="hm-grid__content">

          <!-- Project Block -->
          <div class="hm-project-block hm-grid__item hm-grid__item--square-lrg">
            <?php if ($largeSquareLink2) : ?>
            <a href="#" class="hm-project-block__link">
            <?php else: ?>
            <div href="#" class="hm-project-block__container">
            <?php endif; ?>
              <div class="hm-project-block__copy">
                <?php if ($largeSquareTitle2) : ?>
                <h2 class="hm-project-block__header"><?php echo $largeSquareTitle2; ?></h2>
                <?php endif; ?>
                <?php if ($largeSquareButtonLabel2) : ?>
                <p class="hm-project-block__cta">
                  <span class="hm-project-block__cta-btn"><?php echo $largeSquareButtonLabel2; ?></span>
                </p>
                <?php endif; ?>
              </div>
              <?php if ($largeSquareLink2) : ?>
              <p class="hm-project-block__more">More <?php include(__DIR__ ."/template-parts/svgs/chevron-right.svg"); ?></p>
              <?php endif; ?>
              <picture class="hm-grid__picture hm-project-block__picture">
                <source srcset="<?php echo $largeSquareImage2['mobile']; ?>" media="(max-width: 700px)">
                <source srcset="<?php echo $largeSquareImage2['desktop']; ?>">
                <img class="hm-grid__img hm-project-block__img" srcset="<?php echo $largeSquareImage2['desktop']; ?>" alt="">
              </picture>
            <?php if ($largeSquareLink2) : ?>
            </a>
            <?php else: ?>
            </div>
            <?php endif; ?>
          </div>

          <!-- Text Block -->
          <div class="hm-text-block hm-grid__item hm-grid__item--text">
            <div class="hm-text-block__content">
              <?php if ($textBlockTitle2) : ?>
              <h1 class="hm-text-block__header"><?php echo $newstr2; ?></h1>
              <div class="hm-text-block__dash"></div>
              <?php endif; ?>
              <?php if ($textBlockCopy2) : ?>
              <div class="hm-text-block__description-container">
                <p class="hm-text-block__description">
                  <?php echo $textBlockCopy2; ?>
                  <?php if ($textBlockLink2) : ?>
                  <a class="hm-text-block__inline-cta" href="<?php echo $textBlockLink2; ?>"><?php echo $textBlockLinkLabel2; ?></a>
                  <?php endif; ?>
                </p>
              </div>
              <?php endif; ?>
              <?php if ($textBlockLink2) : ?>
              <p class="hm-text-block__cta">
                <a class="hm-text-block__cta-btn" href="<?php echo $textBlockLink2; ?>"><?php echo $textBlockLinkLabel2; ?></a>
              </p>
              <?php endif; ?>
            </div>
          </div>

          <!-- Image Block -->
          <div class="hm-image-block hm-grid__item hm-grid__item--square">
            <picture class="hm-grid__picture hm-image-block__picture">
              <source srcset="<?php echo $smallSquareImage['mobile']; ?>" media="(max-width: 700px)">
              <source srcset="<?php echo $smallSquareImage['desktop']; ?>">
              <img class="hm-grid__img hm-image-block__img" srcset="<?php echo $smallSquareImage['desktop']; ?>" alt="">
            </picture>
          </div>

        </div>
      </section>

    <!-- FULL TEXT BLOCK -->
    <!-- - - - - - - - - - - - - - - - - - - - - - - -->
    <?php elseif( get_row_layout() == 'full_text' ): ?>
      <?php
        $textHeader = get_sub_field('full_text_header');
        $textCopy = get_sub_field('full_text_copy');
        $button = get_sub_field('full_text_button');
      ?>
      <section class="hm-follow">
        <div class="hm-follow__container">
          <?php if ($textHeader) : ?>
          <h1 class="hm-follow__header"><?php echo $textHeader; ?></h1>
          <div class="hm-dash hm-follow__dash"></div>
          <?php endif; ?>
          <?php if ($textCopy) : ?>
          <div class="hm-follow__description"><?php echo $textCopy; ?></div>
          <?php endif; ?>
          <?php if ($button) : ?>
          <p class="hm-follow__cta"><a href="<?php echo $button['link']; ?>" class="hm-follow__cta-link"><?php echo $button['label']; ?></a></p>
          <?php endif; ?>
        </div>
      </section>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php include("template-parts/home/instagram.php"); ?>

<?php get_footer(); ?>
