<section class="press-section press-news">
  <div class="press-news-container">
    <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      query_posts(array(
        'post_type' => 'press',
        'paged' => $paged,
        // default should be 10... we think
        // 'posts_per_page' => 10,
        'posts_per_page' => 6,
        'order' => 'DESC'
      ));

      if (have_posts()) : ?>
      <div class="proj">
        <?php while (have_posts()) :
            the_post();
            wp_link_pages();


            $image = get_field('press_article_image');
            $date = get_the_date();
            $title = get_the_title();
            $content = get_field('press_article_content'); ?>

        <div href="#" class="press-news-item">
          <a href="#">
            <picture class="press-news-picture">
              <source srcset="<?php echo $image; ?>" media="(max-width: 700px)">
              <source srcset="<?php echo $image; ?>">
              <img class="press-news-img" srcset="<?php echo $image; ?>" alt="margolis">
            </picture>
          </a>
          <div class="press-news-article">
            <p class="press-news-article-date"><?php echo $date; ?></p>
            <a href="#" class="press-news-article-title"><h3><?php echo $title; ?></h3></a>
            <div class="press-news-article-content"><?php echo $content; ?></div>
          </div>
        </div>
        <?php endwhile; ?>
    </div>
  </div>

  <div class="press-news-paginator">
    <!-- <div class="press&#45;news&#45;pages"> -->
    <!--   <a href="#">1</a> -->
    <!--   <a href="#">2</a> -->
    <!--   <a href="#">3</a> -->
    <!--   <a href="#">4</a> -->
    <!--   <a href="#">5</a> -->
    <!--   <a href="#">6</a> -->
    <!--   <a href="#">7</a> -->
    <!--   <a href="#">8</a> -->
    <!--   <a href="#">9</a> -->
    <!--   <a href="#">10</a> -->
    <!-- </div> -->
    <div class="press-news-pages">

        <?php
          pagination_bar();
        ?>
    </div>

    <!-- <a href="#" class="press&#45;news&#45;next"> -->
    <!--     <?php include(__DIR__ ."/../svgs/chevron&#45;right.svg"); ?> -->
    <!-- </a> -->
  </div>
    <?php endif; ?>

</section>
