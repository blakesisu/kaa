<?php
  $inner_details_total = count( get_field('press_article_inner_details'));
  $inner_details_count = 0;
?>
<?php if( have_rows('press_article_inner_details') ): ?>
  <?php while ( have_rows('press_article_inner_details') ) : the_row(); ?>
    <?php $inner_details_count++; ?>

    <!-- IMAGE -->
    <!-- - - - - - - - - - - - - - - - - - - - - - -->
    <?php if( get_row_layout() == 'press_detail_text' ): ?>
      <?php
        $rowText = get_sub_field('press_detail_text');
        $rowBackground = get_sub_field('press_detail_text_dark_background');
      ?>
        <div
          class="
            press-details-item
            press-details-text-aside
            press-details-single
            <?php if( $rowBackground ) { echo 'press-details-dark'; } ?>
          "
        >
          <p><?php echo $rowText ?></p>
        </div>
    <?php elseif(get_row_layout() == 'press_detail_image') : ?>

      <?php
        $rowImage = get_sub_field('press_detail_image');
      ?>

      <div class="press-details-item press-details-single press-details-medium">
        <div class="press-details-advert-wrapper">
          <picture class="press-details-picture">
            <source srcset="<?php echo $rowImage ?>">
            <img class="press-details-img" srcset="<?php echo $rowImage ?>" alt="">
          </picture>
        </div>
      </div>
    <?php endif ; ?>
  <?php endwhile ; ?>
<?php endif ; ?>
