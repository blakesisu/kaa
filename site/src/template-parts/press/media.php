<section class="press-section press-media">
  <div class="press-media-header">
    <div class="press-media-header-placeholder"></div>
    <div class="press-media-headline">
      <h1>KAA DESIGN IN THE MEDIA</h1>
    </div>
    <div class="press-media-dynamos">
      <div class="press-media-dropdown">
        <!-- dropdown header -->
        <div class="press-media-dropdown-header">
          <p>ALL PUBLICATIONS</p>
          <!-- TODO: give me a down chevron! -->
          <?php include(__DIR__ ."/../svgs/right-chev.svg"); ?>
        </div>
        <!-- dropdown options -->
        <div class="press-media-dropdown-container">
          <ul class="press-media-dropdown-list">
            <li class="press-media-all-pubs">ALL PUBLICATIONS</li>
            <li class="press-media-digs-mag">Digs</li>
            <li class="press-media-living-mag">Living</li>
            <li class="press-media-coastal-mag">Coastal Living</li>
            <li class="press-media-ocean-mag">Ocean Home</li>
            <li class="press-media-luxe-mag">luxe.</li>
            <li class="press-media-tester1-mag">tester1</li>
            <li class="press-media-tester2-mag">tester2</li>
            <li class="press-media-tester3-mag">tester3</li>
            <li class="press-media-tester4-mag">tester4</li>
            <li class="press-media-tester5-mag">tester5</li>
          </ul>
        </div>
      </div>
      <div class="press-media-nav-arrows">
        <!-- TODO: obtain correct chevrons from psd -->
        <span class="press-media-back">
            <?php include(__DIR__ ."/../svgs/left-chev.svg"); ?>
        </span>
        <span class="press-media-next">
            <?php include(__DIR__ ."/../svgs/right-chev.svg"); ?>
        </span>
      </div>
    </div>
  </div>

  <div class="press-media-mags swiper-container">
    <div class="press-media-mags-wrapper swiper-wrapper">
      <div class="press-media-mag-item swiper-slide">
        <picture class="press-picture">
          <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/digs-mag.jpg">
          <img class="press-img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/digs-mag.jpg" alt="exhibit">
        </picture>
        <div class="press-media-article">
          <h3 class="press-media-article-date">DEC 2017</h3>
          <h3 class="press-media-article-title">South Bay DIGS</h3>
          <p class="press-media-article-content">Featuring <span class="press-highlight">Tower Grove Drive</span></p>
        </div>
        <div class="press-media-actions">
          <div class="press-media-pdf"><?php include(__DIR__ ."/../svgs/down-chev.svg"); ?> <span>PDF</span></div>
        </div>
      </div>

      <div class="press-media-mag-item swiper-slide">
        <picture class="press-picture">
          <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/living-mag.jpg">
          <img class="press-img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/exhibit.jpg" alt="exhibit">
        </picture>
        <div class="press-media-article">
          <h3 class="press-media-article-date">DEC 2017</h3>
          <h3 class="press-media-article-title">LIVING | Brazil</h3>
          <p class="press-media-article-content">Featuring <span class="press-highlight">Tower Grove Drive</span></p>
        </div>
        <div class="press-media-actions">
          <div class="press-media-pdf"><?php include(__DIR__ ."/../svgs/down-chev.svg"); ?> <span>PDF</span></div>
        </div>
      </div>

      <div class="press-media-mag-item swiper-slide">
        <picture class="press-picture">
          <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/coastal-mag.jpg">
          <img class="press-img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/coastal-mag.jpg" alt="exhibit">
        </picture>
        <div class="press-media-article">
          <h3 class="press-media-article-date">OCT 2017</h3>
          <h3 class="press-media-article-title">Coastal Living</h3>
        </div>
        <div class="press-media-actions">
          <div class="press-media-pdf"><?php include(__DIR__ ."/../svgs/down-chev.svg"); ?> <span>PDF</span></div>
        </div>
      </div>

      <div class="press-media-mag-item swiper-slide">
        <picture class="press-picture">
          <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/ocean-mag.jpg">
          <img class="press-img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/ocean-mag.jpg" alt="exhibit">
        </picture>
        <div class="press-media-article">
          <h3 class="press-media-article-date">AUG/SEP 2017</h3>
          <h3 class="press-media-article-title">Ocean Home</h3>
          <p class="press-media-article-content">Featuring <span class="press-highlight">3rd Street & The Strand Residence</span></p>
        </div>
        <div class="press-media-actions">
          <div class="press-media-pdf"><?php include(__DIR__ ."/../svgs/down-chev.svg"); ?> <span>PDF</span></div>
          <div class="press-media-read"><span>READ</span></div>
        </div>
      </div>

      <div class="press-media-mag-item swiper-slide">
        <picture class="press-picture">
          <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/luxe-mag.jpg">
          <img class="press-img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/luxe-mag.jpg" alt="exhibit">
        </picture>
        <div class="press-media-article">
          <h3 class="press-media-article-date">MAY 2017</h3>
          <h3 class="press-media-article-title">LUXE Interiors + Design</h3>
          <p class="press-media-article-content">Featuring <span class="press-highlight">Tower Grove Drive</span></p>
        </div>
        <div class="press-media-actions">
          <div class="press-media-pdf"><?php include(__DIR__ ."/../svgs/down-chev.svg"); ?> <span>PDF</span></div>
        </div>
      </div>

      <div class="press-media-mag-item swiper-slide">
        <picture class="press-picture">
          <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/sunset-mag.jpg">
          <img class="press-img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/sunset-mag.jpg" alt="exhibit">
        </picture>
        <div class="press-media-article">
          <h3 class="press-media-article-date">MAR 2017</h3>
          <h3 class="press-media-article-title">Sunset</h3>
          <p class="press-media-article-content">Featuring <span class="press-highlight">Split Rock Ranch</span></p>
        </div>
        <div class="press-media-actions">
          <div class="press-media-pdf"><?php include(__DIR__ ."/../svgs/down-chev.svg"); ?> <span>PDF</span></div>
        </div>
      </div>
    </div>

  </div>
</section>
