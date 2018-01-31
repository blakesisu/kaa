<section class="press-section press-news">
  <div class="press-news-container">
<?php if( have_posts() ) : ?>
      <div class="proj">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php
            $image = get_field('news_article_image');
            $date = get_field('news_article_date');
            $title = get_field('news_article_title');
            $content = get_field('news_article_content');
          ?>
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
    <?php endif; ?>

  <!--   <div href="#" class="press&#45;news&#45;item"> -->
  <!--     <a href="#"> -->
  <!--       <picture class="press&#45;news&#45;picture"> -->
  <!--         <source srcset="<?php bloginfo('template_url'); ?>/images/press/mobile/margolis&#45;sm.jpg" media="(max&#45;width: 700px)"> -->
  <!--         <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/margolis.jpg"> -->
  <!--         <img class="press&#45;news&#45;img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/margolis.jpg" alt="margolis"> -->
  <!--       </picture> -->
  <!--     </a> -->
  <!--     <div class="press&#45;news&#45;article"> -->
  <!--       <p class="press&#45;news&#45;article&#45;date">DEC 14, 2017</p> -->
  <!--       <a href="#" class="press&#45;news&#45;article&#45;title"><h3>Congratulations John Margolis</h3></a> -->
  <!--       <p class="press&#45;news&#45;article&#45;content">Congratulations to our very own <a href="#" class="press&#45;highlight">John Margolis</a> as the newly elected Vice&#45;President of the <a href="#" class="press&#45;highlight">ICAA Southern California</a> Chapter Board!</p> -->
  <!--     </div> -->
  <!--   </div> -->
  <!--  -->
  <!--   <div href="#" class="press&#45;news&#45;item"> -->
  <!--     <a href="#"> -->
  <!--       <picture class="press&#45;news&#45;picture"> -->
  <!--         <source srcset="<?php bloginfo('template_url'); ?>/images/press/mobile/million&#45;deco&#45;sm.jpg" media="(max&#45;width: 700px)"> -->
  <!--         <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/million&#45;deco.jpg"> -->
  <!--         <img class="press&#45;news&#45;img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/million&#45;deco.jpg" alt="deco"> -->
  <!--       </picture> -->
  <!--     </a> -->
  <!--     <div class="press&#45;news&#45;article"> -->
  <!--       <p class="press&#45;news&#45;article&#45;date">SEP 22, 2017</p> -->
  <!--       <a href="#" class="press&#45;news&#45;article&#45;title"><h3>Interview with Million Dollar Decorating</h3></a> -->
  <!--       <p class="press&#45;news&#45;article&#45;content">KAA Design Partner Duan Tran was recently interviewed by James Swan of Million Dollar Decorating. Listen to the podcast here</p> -->
  <!--     </div> -->
  <!--   </div> -->
  <!--  -->
  <!--   <div href="#" class="press&#45;news&#45;item"> -->
  <!--     <a href="#"> -->
  <!--       <picture class="press&#45;news&#45;picture"> -->
  <!--         <source srcset="<?php bloginfo('template_url'); ?>/images/press/mobile/milk&#45;sm.jpg" media="(max&#45;width: 700px)"> -->
  <!--         <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/milk.jpg"> -->
  <!--         <img class="press&#45;news&#45;img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/milk.jpg" alt="milk"> -->
  <!--       </picture> -->
  <!--     </a> -->
  <!--     <div class="press&#45;news&#45;article"> -->
  <!--       <p class="press&#45;news&#45;article&#45;date">AUG 29, 2017</p> -->
  <!--       <a href="#" class="press&#45;news&#45;article&#45;title"><h3>Design Milk spills on KAA founder Grant Kirkpatrick's 5 Favorite Things</h3></a> -->
  <!--       <p class="press&#45;news&#45;article&#45;content">Friday Five is Design Milk's ultimate run down of tastemakers and designers on the five things they simply cannot live without.</p> -->
  <!--     </div> -->
  <!--   </div> -->
  <!--  -->
  <!--   <div href="#" class="press&#45;news&#45;item"> -->
  <!--     <a href="#"> -->
  <!--       <picture class="press&#45;news&#45;picture"> -->
  <!--         <source srcset="<?php bloginfo('template_url'); ?>/images/press/mobile/curbed&#45;sm.jpg" media="(max&#45;width: 700px)"> -->
  <!--         <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/curbed.jpg"> -->
  <!--         <img class="press&#45;news&#45;img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/curbed.jpg" alt="curbed"> -->
  <!--       </picture> -->
  <!--     </a> -->
  <!--     <div class="press&#45;news&#45;article"> -->
  <!--       <p class="press&#45;news&#45;article&#45;date">JUL 18, 2017</p> -->
  <!--       <a href="#" class="press&#45;news&#45;article&#45;title"><h3>Curbed.Com Interviews KAA Partner Duan Tran</h3></a> -->
  <!--       <p class="press&#45;news&#45;article&#45;content">For their column show and Tell, curbed editors wanted to speak with architect Duan Tran, on his love for&#45;and collection of&#45;Lego Architecture sets.</p> -->
  <!--     </div> -->
  <!--   </div> -->
  <!--  -->
  <!--   <div href="#" class="press&#45;news&#45;item"> -->
  <!--     <a href="#"> -->
  <!--       <picture class="press&#45;news&#45;picture"> -->
  <!--         <source srcset="<?php bloginfo('template_url'); ?>/images/press/mobile/journal&#45;sm.jpg" media="(max&#45;width: 700px)"> -->
  <!--         <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/journal.jpg"> -->
  <!--         <img class="press&#45;news&#45;img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/journal.jpg" alt="journal"> -->
  <!--       </picture> -->
  <!--     </a> -->
  <!--     <div class="press&#45;news&#45;article"> -->
  <!--       <p class="press&#45;news&#45;article&#45;date">MAR 20, 2017</p> -->
  <!--       <a href="#" class="press&#45;news&#45;article&#45;title"><h3>Los Angeles Business Journal announces KAA Design's Newest Associates</h3></a> -->
  <!--       <p class="press&#45;news&#45;article&#45;content">Lisa Copeland, company CFO has been appointed to Senior Associate; Michael McGowan, Landscape Studio Director, and Meghan Beckmann, Project Manager have appointed Associates.</p> -->
  <!--     </div> -->
  <!--   </div> -->
  <!--  -->
  <!--   <div href="#" class="press&#45;news&#45;item"> -->
  <!--     <a href="#"> -->
  <!--       <picture class="press&#45;news&#45;picture"> -->
  <!--         <source srcset="<?php bloginfo('template_url'); ?>/images/press/mobile/emerald&#45;sm.jpg" media="(max&#45;width: 700px)"> -->
  <!--         <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/emerald.jpg"> -->
  <!--         <img class="press&#45;news&#45;img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/emerald.jpg" alt="emerald"> -->
  <!--       </picture> -->
  <!--     </a> -->
  <!--     <div class="press&#45;news&#45;article"> -->
  <!--       <p class="press&#45;news&#45;article&#45;date">FEB 22, 2017</p> -->
  <!--       <a href="#" class="press&#45;news&#45;article&#45;title"><h3>Emerald Bay Residence Featured on ArchitecturalDigest.com</h3></a> -->
  <!--       <p class="press&#45;news&#45;article&#45;content">We're proud to have stunning oceanside residence, <a href="#" class="press&#45;highlight">Emerald Bay</a>, make Architectural Digest's list "12 California Homes Designed for Indoor&#45;Outdoor Living".</p> -->
  <!--     </div> -->
  <!--   </div> -->
  <!--  -->
  <!--   <div href="#" class="press&#45;news&#45;item"> -->
  <!--     <a href="#"> -->
  <!--       <picture class="press&#45;news&#45;picture"> -->
  <!--         <source srcset="<?php bloginfo('template_url'); ?>/images/press/mobile/dtran&#45;sm.jpg" media="(max&#45;width: 700px)"> -->
  <!--         <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/dtran.jpg"> -->
  <!--         <img class="press&#45;news&#45;img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/dtran.jpg" alt="duantran"> -->
  <!--       </picture> -->
  <!--     </a> -->
  <!--     <div class="press&#45;news&#45;article"> -->
  <!--       <p class="press&#45;news&#45;article&#45;date">JAN 3, 2017</p> -->
  <!--       <a href="#" class="press&#45;news&#45;article&#45;title"><h3>KAA Design Promotes Duan Tran, AIA to Partner</h3></a> -->
  <!--       <p class="press&#45;news&#45;article&#45;content">KAA Design is excited to announce the promotion of Duan H.M. Tran, AIA to Partner, effective January 1, 2017.</p> -->
  <!--     </div> -->
  <!--   </div> -->
  <!--  -->
  <!--   <div href="#" class="press&#45;news&#45;item"> -->
  <!--     <a href="#"> -->
  <!--       <picture class="press&#45;news&#45;picture"> -->
  <!--         <source srcset="<?php bloginfo('template_url'); ?>/images/press/mobile/wrapup&#45;sm.jpg" media="(max&#45;width: 700px)"> -->
  <!--         <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/wrapup.jpg"> -->
  <!--         <img class="press&#45;news&#45;img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/wrapup.jpg" alt="wrapup"> -->
  <!--       </picture> -->
  <!--     </a> -->
  <!--     <div class="press&#45;news&#45;article"> -->
  <!--       <p class="press&#45;news&#45;article&#45;date">DEC 23, 2016</p> -->
  <!--       <a href="#" class="press&#45;news&#45;article&#45;title"><h3>Event Wrap&#45;Up: 2016 Art Exhibit &#38; Sale</h3></a> -->
  <!--       <p class="press&#45;news&#45;article&#45;content">The 2016 Art Exhibit and Sale was a huge success and we are proud to report that this year's event raised over $35,000 for <a href="#" class="press&#45;highlight">artworxLA</a>.</p> -->
  <!--     </div> -->
  <!--   </div> -->
  <!--  -->
  <!--   <div href="#" class="press&#45;news&#45;item"> -->
  <!--     <a href="#"> -->
  <!--       <picture class="press&#45;news&#45;picture"> -->
  <!--         <source srcset="<?php bloginfo('template_url'); ?>/images/press/mobile/exhibit&#45;sm.jpg" media="(max&#45;width: 700px)"> -->
  <!--         <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/exhibit.jpg"> -->
  <!--         <img class="press&#45;news&#45;img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/exhibit.jpg" alt="exhibit"> -->
  <!--       </picture> -->
  <!--     </a> -->
  <!--     <div class="press&#45;news&#45;article"> -->
  <!--       <p class="press&#45;news&#45;article&#45;date">NOV 4, 2017</p> -->
  <!--       <a href="#" class="press&#45;news&#45;article&#45;title"><h3>2016 KAA Art Exhibit &#38; Sale</h3></a> -->
  <!--       <p class="press&#45;news&#45;article&#45;content">You're invited! We hope you will join us on December 1st and enjoy a wonderful evening filled with friends, food, and artistic expression including paintings, photography, jewelry, culinary... delights and much more.</p> -->
  <!--     </div> -->
  <!--   </div> -->
  <!-- </div> -->

  <div class="press-news-paginator">
    <div class="press-news-pages">
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">5</a>
      <a href="#">6</a>
      <a href="#">7</a>
      <a href="#">8</a>
      <a href="#">9</a>
      <a href="#">10</a>
    </div>
    <a href="#" class="press-news-next">
        <?php include(__DIR__ ."/../svgs/chevron-right.svg"); ?>
    </a>
  </div>
</section>
