<?php
/**
 * projects landing page template
 */
get_header(); ?>

<?php if( have_posts() ) : ?>
  <div class="proj">
    <?php $index = 1; ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php
        $postIndex = $wp_query->current_post + 1;
        $type = get_field('project_detail_hero_type');
        $hero = get_field('project_detail_hero');
        $video = get_field('project_detail_hero_video');
        $videoSrc = getBackgroundVideoSrc($video);
        $width = 'tri';

        // This is kind of ghetto, but using it to resize the rows
        // So 1 and 2 are big
        // 3, 4, 5 are small
        // 6 and 7 are big
        // etc...
        if ($index == 1 || $index == 2) {
          $width = 'dual';
        }

        // Increment the index
        $index = $index + 1;

        // Reset the index after 5 items
        if ($index > 5) {
          $index = 1;
        }
      ?>
      <a href="<?php echo the_permalink($post->ID); ?>" class="proj-projects__project proj-project__<?php echo $width; ?>">
        <?php if ($type === 'video'): ?>
          <div class="proj-project__video">
            <div class="proj-project__video-wrapper">
              <iframe
                src="<?php echo $videoSrc; ?>"
                width="640"
                height="360"
                frameborder="0"
                webkitallowfullscreen
                mozallowfullscreen
                allowfullscreen
              ></iframe>
            </div>
          </div>
        <?php else: ?>
          <picture class="proj-project__picture">
            <source srcset="<?php echo $hero['thumbnail']; ?>">
            <img class="proj-project__img" srcset="<?php echo $hero['thumbnail']; ?>" alt="">
          </picture>
        <?php endif; ?>
        <div class="proj-project__description">
          <h3 class="proj-text-mini__header"><?php echo the_title(); ?></h3>
        </div>
      </a>
    <?php endwhile; ?>
  </div>
<?php endif; ?>

<?php include("template-parts/common/pagination.php"); ?>

<?php get_footer(); ?>
