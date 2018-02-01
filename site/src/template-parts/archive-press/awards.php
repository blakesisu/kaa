<section class="press-section about-grid press-awards">
  <div class="press-header-container">
    <h1 class="press-awards-header">AWARDS</h1>
  </div>

  <?php
    query_posts(array(
      'post_type' => 'awards',
      'posts_per_page' => 18,
      // default should be DESC
      'order' => 'ASC'
      // 'order' => 'DESC'
    ));

    if (have_posts()) : ?>

    <ul class="press-awards-members">
        <?php while (have_posts()) :
            the_post();

            $title = get_the_title();
            $content = get_field('award_content'); ?>

        <li class="press-awards-container">
          <div class="press-awards-container-header">
            <h3 class="press-awards-name"><?php echo $title; ?></h3>
          </div>
          <div class="press-awards-content">
            <p class="press-awards-title"><?php echo $content; ?>
              <?php
                $relatedProject = get_field('award_project');
                if ($relatedProject) :
                  // override $post
                  $post = $relatedProject;
                  setup_postdata( $post );
              ?>
              <a href="<?php echo the_permalink($post->ID); ?>" class="press-highlight">
                <?php echo the_title(); ?>
              </a>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            </p>
          </div>
        </li>

        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
</section>
