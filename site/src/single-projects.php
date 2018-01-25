<?php
/**
 * details page template
 * Template Name: Project Details
 * parts directory: template-parts/details
 */
get_header(); ?>

<?php if( have_rows('project_rows') ): ?>
  <?php while ( have_rows('project_rows') ) : the_row(); ?>
    <!-- IMAGE -->
    <!-- - - - - - - - - - - - - - - - - - - - - - -->
    <?php if( get_row_layout() == 'project_row_image' ): ?>
      <?php
        $projectRowImage = get_sub_field('project_row_image');
      ?>
      <section class="pd-grid pd-grid--full">
        <div class="pd-grid__block pd-grid__block--image">
          <picture class="pd-grid__picture">
            <source srcset="<?php echo $projectRowImage['mobile']; ?>" media="(max-width: 700px)">
            <source srcset="<?php echo $projectRowImage['desktop']; ?>">
            <img class="pd-grid__img" srcset="<?php echo $projectRowImage['desktop']; ?>" alt="">
          </picture>
        </div>
      </section>

    <!-- TEXT -->
    <!-- - - - - - - - - - - - - - - - - - - - - - -->
    <?php elseif( get_row_layout() == 'project_row_text' ): ?>
      <?php
        $projectTextText = get_sub_field('project_row_text_text');
        $projectTextDarkBackground = get_sub_field('project_row_text_dark_background');
      ?>
      <section class="pd-grid pd-grid--full">
        <div
          class="
            pd-grid__block pd-grid__block--text
            <?php if ($projectTextDarkBackground) { echo 'pd-grid__block--brown'; } ?>
          ">
          <div class="pd-grid__block-text-container">
            <?php echo $projectTextText; ?>
          </div>
        </div>
      </section>

    <!-- IMAGE AND TEXT -->
    <!-- - - - - - - - - - - - - - - - - - - - - - -->
    <?php elseif( get_row_layout() == 'project_row_image_and_text' ): ?>
      <?php
        $projectImageTextText = get_sub_field('project_row_image_and_text_text');
        $projectImageTextLargeText = get_sub_field('project_row_image_and_text_large_text');
        $projectImageTextDarkBackground = get_sub_field('project_row_image_and_text_dark_background');
        $projectImageTextImage = get_sub_field('project_row_image_and_text_image');
        $projectImageTextImageWidth = get_sub_field('project_row_image_and_text_image_width');
        $projectImageTextImagePosition = get_sub_field('project_row_image_and_text_image_position');
      ?>
      <section
        class="
          pd-grid pd-grid--<?php echo $projectImageTextImageWidth; ?>
          pd-grid--image-<?php echo $projectImageTextImagePosition; ?>
        ">
        <!-- Image -->
        <div class="pd-grid__block pd-grid__block--image">
          <picture class="pd-grid__picture">
            <source srcset="<?php echo $projectImageTextImage; ?>">
            <img class="pd-grid__img" srcset="<?php echo $projectImageTextImage; ?>" alt="">
          </picture>
        </div>
        <!-- Text -->
        <div
          class="
            pd-grid__block pd-grid__block--text
            <?php if ($projectImageTextDarkBackground) { echo 'pd-grid__block--brown'; } ?>
            <?php if ($projectImageTextLargeText) { echo 'pd-grid__block--large'; } ?>
          ">
          <div class="pd-grid__block-text-container">
            <?php echo $projectImageTextText; ?>
          </div>
        </div>

      </section>

    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php include("template-parts/details/details-and-contact.php"); ?>

<?php include("template-parts/details/related-projects.php"); ?>

<?php get_footer(); ?>
