<?php if( have_rows('project_rows') ): ?>
  <?php while ( have_rows('project_rows') ) : the_row(); ?>
    <!-- IMAGE -->
    <!-- - - - - - - - - - - - - - - - - - - - - - -->
    <?php if( get_row_layout() == 'project_row_image' ): ?>
      <?php
        $projectRowImageType = get_sub_field('project_row_image_type');
        $projectRowImage = get_sub_field('project_row_image');
        $projectRowImageVideo = get_sub_field('project_row_image_video');
        $projectRowImageVideoSrc = getBackgroundVideoSrc($projectRowImageVideo);
      ?>
      <section class="pd-grid pd-grid--full">
        <?php if ($projectRowImageType === 'video'): ?>
          <?php if ($videoSrc): ?>
            <div class="pd-grid__video-wrapper">
              <iframe
                src="<?php echo $projectRowImageVideoSrc; ?>"
                width="640"
                height="360"
                frameborder="0"
                webkitallowfullscreen
                mozallowfullscreen
                allowfullscreen
              ></iframe>
            </div>
          <?php endif; ?>
        <?php else: ?>
          <div class="pd-grid__block pd-grid__block--image">
            <picture class="pd-grid__picture">
              <source srcset="<?php echo $projectRowImage['mobile']; ?>" media="(max-width: 700px)">
              <source srcset="<?php echo $projectRowImage['desktop']; ?>">
              <img class="pd-grid__img" srcset="<?php echo $projectRowImage['desktop']; ?>" alt="">
            </picture>
          </div>
        <?php endif; ?>
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
            <?php echo 'pd-grid__block--'.$projectTextDarkBackground; ?>
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
        $projectImageTextImageType = get_sub_field('project_row_image_and_text_type');
        $projectImageTextImage = get_sub_field('project_row_image_and_text_image');
        $projectImageTextImageWidth = get_sub_field('project_row_image_and_text_image_width');
        $projectImageTextImagePosition = get_sub_field('project_row_image_and_text_image_position');
        $projectImageTextImageVideo = get_sub_field('project_row_image_and_text_video');
        $projectImageTextImageVideoSrc = getBackgroundVideoSrc($projectImageTextImageVideo);
      ?>
      <section
        class="
          pd-grid pd-grid--<?php echo $projectImageTextImageWidth; ?>
          pd-grid--image-<?php echo $projectImageTextImagePosition; ?>
        ">
        <?php if ($projectImageTextImageType === 'video'): ?>
          <!-- Video -->
          <div class="pd-grid__block pd-grid__block--video">
            <?php if ($projectImageTextImageVideoSrc): ?>
              <div class="pd-grid__video-wrapper">
                <iframe
                  src="<?php echo $projectImageTextImageVideoSrc; ?>"
                  width="640"
                  height="360"
                  frameborder="0"
                  webkitallowfullscreen
                  mozallowfullscreen
                  allowfullscreen
                ></iframe>
              </div>
            <?php endif; ?>
          </div>
        <?php else: ?>
          <!-- Image -->
          <div class="pd-grid__block pd-grid__block--image">
            <picture class="pd-grid__picture">
              <source srcset="<?php echo $projectImageTextImage; ?>">
              <img class="pd-grid__img" srcset="<?php echo $projectImageTextImage; ?>" alt="">
            </picture>
          </div>
        <?php endif; ?>
        <!-- Text -->
        <div
          class="
            pd-grid__block pd-grid__block--text
            <?php echo 'pd-grid__block--'.$projectImageTextDarkBackground; ?>
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
