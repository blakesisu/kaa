<section class="press-details">
    <!-- Image Block -->
    <!-- use php boolean logic here to determine whether to show placeholder or hero -->

    <!-- placeholder -->
    <div class="press-details-placeholder">
      <div class="press-details-placeholder-wrapper">
        <picture class="press-details-picture">
          <source srcset="<?php bloginfo('template_url'); ?>/images/press-details/press-details-placeholder.png">
          <img class="press-details-img" srcset="<?php bloginfo('template_url'); ?>/images/press-details/press-details-placeholder.png" alt="">
        </picture>
      </div>
    </div>

    <!-- hero -->
    <!-- <div class="press&#45;details&#45;hero"> -->
    <!--   <div class="press&#45;details&#45;hero&#45;wrapper"> -->
    <!--     <picture class="press&#45;details&#45;picture"> -->
    <!--       <source srcset="<?php bloginfo('template_url'); ?>/images/about/hero/about&#45;hero&#45;lg.jpg"> -->
    <!--       <img class="press&#45;details&#45;img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/Book.jpg" alt=""> -->
    <!--     </picture> -->
    <!--   </div> -->
    <!-- </div> -->

    <!-- Content date, title, links -->
    <div class="press-details-item press-details-feature-meta press-details-dual">
      <div class="press-details-feature-wrapper">
        <p class="press-details-feature-date">APR 5, 2015</h2>
        <h2 class="press-details-feature-header">CALIFORNIA CONTEMPORARY: A Book Over 30 Years in the Making</h2>
        <div class="press-details-actions">
          <!-- php boolean for actions if exist -->
          <a href="#" class="press-details-read-button">DOWNLOAD ARTICLE</a>
          <a href="#" class="press-details-read-button">READ ONLINE</a>
        </div>
      </div>
    </div>

    <!-- Content optional picture -->
    <div class="press-details-item press-details-dual">
      <div class="press-details-img-wrapper">
        <picture class="press-details-picture">
          <source srcset="<?php bloginfo('template_url'); ?>/images/press/mobile/dtran-sm.jpg" media="(max-width: 700px)">
          <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/dtran.jpg">
          <img class="press-details-img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/Book.jpg" alt="">
        </picture>
      </div>
    </div>

    <!-- Content description -->
    <!-- php boolean for feature content: give either dual or single&#45;feature -->
    <!-- <div class="press&#45;details&#45;item press&#45;details&#45;feature&#45;content press&#45;details&#45;dual"> -->
    <div class="press-details-item press-details-feature-content press-details-single-feature">
      <p>Situated on a hillside property on a southern flank of the Santa Monica Mountains, Tower Grove rises high above to capture breathtaking and privileged views of Los Angeles and the Pacific Ocean beyond.Explore the houses of founder Grant C. Kirkpatrick and KAA Design, and our love for nature, design and storytelling Situated on a hillside property on a southern flank of the Santa Monica Mountains, Tower Grove rises high above to capture breathtaking and privileged views of Los Angeles and the Pacific Ocean beyond.Explore the houses of founder Grant C. Kirkpatrick and KAA Design, and our love for nature, design and storytelling Situated on a hillside property on a southern flank of the Santa Monica Mountains, Tower Grove rises high above to capture breathtaking and privileged views of Los Angeles and the Pacific Ocean beyond.Explore the houses of founder Grant C. Kirkpatrick and KAA Design, and our love for nature, design and storytelling</p>

      <!-- php boolean for share link display -->
      <!-- <a href="#" class="press&#45;details&#45;share&#45;button"> -->
      <!--   <?php include(__DIR__ ."/../svgs/share.svg"); ?> Share -->
      <!-- </a> -->
    </div>

    <!-- Additional narrative (light) -->
    <div class="press-details-item press-details-text-aside press-details-single">
      <p>Situated on a hillside property on a southern flank of the Santa Monica Mountains, Tower Grove rises high above to capture breathtaking and privileged views of Los Angeles and the Pacific Ocean beyond.Explore the houses of founder Grant C. Kirkpatrick and KAA Design, and our love for nature, design and storytelling Situated on a hillside property on a southern flank of the Santa Monica Mountains, Tower Grove rises high above to capture breathtaking and privileged views of Los Angeles and the Pacific Ocean beyond.Explore the houses of founder Grant C. Kirkpatrick and KAA Design, and our love for nature, design and storytelling Situated on a hillside property on a southern flank of the Santa Monica Mountains, Tower Grove rises high above to capture breathtaking and privileged views of Los Angeles and the Pacific Ocean beyond.Explore the houses of founder Grant C. Kirkpatrick and KAA Design, and our love for nature, design and storytelling</p>
      <!-- php boolean for share link display -->
      <!-- <a href="#" class="press&#45;details&#45;share&#45;button"> -->
      <!--   <?php include(__DIR__ ."/../svgs/share.svg"); ?> Share -->
      <!-- </a> -->
    </div>

    <!-- Additional narrative (dark) -->
    <div class="press-details-item press-details-text-aside press-details-single press-details-dark">
      <p>Situated on a hillside property on a southern flank of the Santa Monica Mountains, Tower Grove rises high above to capture breathtaking and privileged views of Los Angeles and the Pacific Ocean beyond.Explore the houses of founder Grant C. Kirkpatrick and KAA Design, and our love for nature, design and storytelling Situated on a hillside property on a southern flank of the Santa Monica Mountains, Tower Grove rises high above to capture breathtaking and privileged views of Los Angeles and the Pacific Ocean beyond.Explore the houses of founder Grant C. Kirkpatrick and KAA Design, and our love for nature, design and storytelling Situated on a hillside property on a southern flank of the Santa Monica Mountains, Tower Grove rises high above to capture breathtaking and privileged views of Los Angeles and the Pacific Ocean beyond.Explore the houses of founder Grant C. Kirkpatrick and KAA Design, and our love for nature, design and storytelling</p>

    </div>


    <div class="press-details-item press-details-single press-details-medium">
      <div class="press-details-advert-wrapper">
        <picture class="press-details-picture">
          <source srcset="<?php bloginfo('template_url'); ?>/images/press-details/press-detail-test-advert.png">
          <img class="press-details-img" srcset="<?php bloginfo('template_url'); ?>/images/press-details/press-detail-test-advert.png" alt="">
        </picture>
      </div>
    </div>

    <div class="press-details-item press-details-single press-details-medium">
      <div class="press-details-advert-wrapper">
        <picture class="press-details-picture">
          <source srcset="<?php bloginfo('template_url'); ?>/images/press-details/press-details-test-advert2.png">
          <img class="press-details-img" srcset="<?php bloginfo('template_url'); ?>/images/press-details/press-details-test-advert2.png" alt="">
        </picture>
      </div>
    </div>


<?php
  // $relatedProject1 = get_field('related_project_1');
  // $relatedProject2 = get_field('related_project_2');
  // $relatedArray = [$relatedProject1, $relatedProject2];
?>

<?php
  // if ($relatedProject1) :
?>

  <div class="pd-related-articles__container">
    <h1 class="pd-related-projects__header">Related Articles</h1>
    <div class="pd-related-projects__dash"></div>

    <div class="pd-related-projects__projects">
      <?php
        // foreach($relatedArray as $project) :
      ?>
        <?php
          // override $post

          // $post = $project;
          // setup_postdata( $post );
          // $hero = get_field('project_detail_hero');
        ?>
        <div class="pd-related-projects__project pd-related-project">
          <?php
            // echo the_permalink($post->ID);
          ?>
          <a href="#" class="pd-related-project__link">
            <div class="pd-related-project__copy">
              <?php
                // echo the_title();
              ?>
              <h2 class="pd-related-project__header">Emerald Bay</h2>
            </div>
            <p class="pd-related-project__more">More <?php include(__DIR__ ."/../svgs/chevron-right.svg"); ?></p>
            <picture class="pd-related-project__picture">
              <?php
                // echo $hero['thumbnail'];
              ?>
              <source srcset="<?php bloginfo('template_url'); ?>/images/projects/desktop/emeraldbay-lg.jpg">
              <img class="pd-related-project__img" srcset="<?php bloginfo('template_url'); ?>/images/projects/desktop/emeraldbay-lg.jpg" alt="">
            </picture>
          </a>
        </div>

        <div class="pd-related-projects__project pd-related-project">
          <?php
            // echo the_permalink($post->ID);
          ?>
          <a href="#" class="pd-related-project__link">
            <div class="pd-related-project__copy">
              <?php
                // echo the_title();
              ?>
              <h2 class="pd-related-project__header">18th Walkthrough</h2>
            </div>
            <p class="pd-related-project__more">More <?php include(__DIR__ ."/../svgs/chevron-right.svg"); ?></p>
            <picture class="pd-related-project__picture">
              <?php
                // echo $hero['thumbnail'];
              ?>
              <source srcset="<?php bloginfo('template_url'); ?>/images/projects/desktop/18thwalk-lg.jpg">
              <img class="pd-related-project__img" srcset="<?php bloginfo('template_url'); ?>/images/projects/desktop/18thwalk-lg.jpg" alt="">
            </picture>
          </a>
        </div>


        <?php
          // wp_reset_postdata();
        ?>
      <?php
        // endforeach;
        ?>
    </div>
  </div>
  <?php
  // endif;
  ?>
</section>
