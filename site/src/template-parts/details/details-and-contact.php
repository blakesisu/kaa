<?php if( have_rows('project_details_repeater') ): ?>
<section class="pd-details-and-contact">
  <div class="pd-details-and-contact__container">

    <!-- Details -->
    <div class='pd-details'>
      <h2 class="pd-details__header">Project Details</h2>
      <div class="pd-details__categories">
        <?php while ( have_rows('project_details_repeater') ) : the_row(); ?>
          <?php
            $label = get_sub_field('project_details_label');
          ?>
          <div class="pd-details__category">
            <?php if ($label) : ?>
              <h3 class="pd-details__category-header"><?php echo $label; ?></h3>
            <?php endif; ?>
            <?php if( have_rows('project_details_repeater_repeater') ): ?>
              <?php while ( have_rows('project_details_repeater_repeater') ) : the_row(); ?>
                <?php
                  $text = get_sub_field('project_details_text');
                  $link = get_sub_field('project_details_link');
                ?>
                <?php if ($link) : ?>
                  <p class="pd-details__item">
                    <a class="pd-details__link" href="<?php echo $link; ?>"><?php echo $text; ?></a>
                  </p>
                <?php else : ?>
                  <p class="pd-details__item"><?php echo $text; ?></p>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>

    <!-- Contact -->
    <div class="pd-contact">
      <?php
        $contactTitle = get_field('contact_block_title', 'option');
        $contactDescription = get_field('contact_block_description', 'option');
        $contactBtn = get_field('contact_block_button', 'option');
      ?>
      <?php if ($contactTitle): ?>
        <h2 class="pd-contact__header"><?php echo $contactTitle; ?></h2>
      <?php endif; ?>
      <?php if ($contactDescription): ?>
        <p class="pd-contact__description"><?php echo $contactDescription; ?></p>
      <?php endif; ?>
      <?php if ($contactBtn['link']): ?>
        <p class="pd-contact__cta">
          <a href="<?php echo $contactBtn['link'] ?>" class="pd-contact__cta-link"><?php echo $contactBtn['label'] ?></a>
        </p>
      <?php endif; ?>
      <?php include(__DIR__ ."/../common/share.php"); ?>
    </div>

  </div>
</section>
<?php endif; ?>
