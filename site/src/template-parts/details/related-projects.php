<?php
  $relatedProject1 = get_field('related_project_1');
  $relatedProject2 = get_field('related_project_2');
  $relatedArray = [$relatedProject1, $relatedProject2];
?>

<?php if ($relatedProject1) : ?>
<section class="pd-related-projects">
  <div class="pd-related-projects__container">
    <h1 class="pd-related-projects__header">Related Projects</h1>
    <div class="pd-related-projects__dash"></div>

    <div class="pd-related-projects__projects">
      <?php foreach($relatedArray as $project) : ?>
        <?php
          // override $post
          $post = $project;
          setup_postdata( $post );
          $hero = get_field('project_detail_hero');
        ?>
        <div class="pd-related-projects__project pd-related-project">
          <a href="<?php echo the_permalink($post->ID); ?>" class="pd-related-project__link">
            <div class="pd-related-project__copy">
              <h2 class="pd-related-project__header"><?php echo the_title(); ?></h2>
            </div>
            <p class="pd-related-project__more">More <?php include(__DIR__ ."/../svgs/chevron-right.svg"); ?></p>
            <picture class="pd-related-project__picture">
              <source srcset="<?php echo $hero['thumbnail']; ?>">
              <img class="pd-related-project__img" srcset="<?php echo $hero['thumbnail']; ?>" alt="">
            </picture>
          </a>
        </div>
        <?php wp_reset_postdata(); ?>
      <?php endforeach;?>
    </div>
  </div>
</section>
<?php endif; ?>
