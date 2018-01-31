<section class="press-section press-media">
  <div class="press-media-header">
    <div class="press-media-header-placeholder"></div>
    <div class="press-media-headline">
      <h1>KAA DESIGN IN THE MEDIA</h1>
    </div>
    <div class="press-media-dynamos">
      <div class="press-media-dropdown">
        <!-- dropdown header -->
        <button class="press-media-dropdown-header">
          <p>ALL PUBLICATIONS</p>
          <!-- TODO: give me a down chevron! -->
          <?php include(__DIR__ ."/../svgs/right-chev.svg"); ?>
        </button>
        <!-- dropdown options -->
        <div class="press-media-dropdown-container">
          <ul class="press-media-dropdown-list">
            <li><button class="press-media-mag-filter" data-mag="all">ALL PUBLICATIONS</button></li>
            <li><button class="press-media-mag-filter" data-mag="digs">Digs</button></li>
            <li><button class="press-media-mag-filter" data-mag="living">Living</button></li>
            <li><button class="press-media-mag-filter" data-mag="coastal">Coastal Living</button></li>
            <li><button class="press-media-mag-filter" data-mag="ocean">Ocean Home</button></li>
            <li><button class="press-media-mag-filter" data-mag="luxe">luxe.</button></li>
            <li><button class="press-media-mag-filter" data-mag="sunset">Sunset</button></li>
            <li><button class="press-media-mag-filter" data-mag="tester2">tester2</button></li>
            <li><button class="press-media-mag-filter" data-mag="tester3">tester3</button></li>
            <li><button class="press-media-mag-filter" data-mag="tester4">tester4</button></li>
            <li><button class="press-media-mag-filter" data-mag="tester5">tester5</button></li>
          </ul>
        </div>
      </div>
      <div class="press-media-nav-arrows">
        <!-- TODO: obtain correct chevrons from psd -->
        <button class="press-media-back">
            <?php include(__DIR__ ."/../svgs/left-chev.svg"); ?>
        </button>
        <button class="press-media-next">
            <?php include(__DIR__ ."/../svgs/right-chev.svg"); ?>
        </button>
      </div>
    </div>
  </div>

  <div class="press-media-mags swiper-container">
    <ul class="press-media-mags-wrapper swiper-wrapper">

      <li class="press-media-mag-item swiper-slide" data-magitem="digs">
        <div class="press-media-mag-content">
          <picture class="press-picture">
            <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/digs-mag.jpg">
            <img class="press-img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/digs-mag.jpg" alt="exhibit">
          </picture>
          <div class="press-media-article">
            <p class="press-media-article-date">DEC 2017</p>
            <h3 class="press-media-article-title">South Bay DIGS</h3>
            <p class="press-media-article-content">Featuring <a href="#" class="press-highlight">Tower Grove Drive</a></p>
          </div>
          <div class="press-media-actions">
            <a href="#" class="press-media-pdf"><?php include(__DIR__ ."/../svgs/down-chev.svg"); ?> <span>PDF</span></a>
          </div>
        </div>
      </li>

      <li class="press-media-mag-item swiper-slide" data-magitem="living">
        <div class="press-media-mag-content">
          <picture class="press-picture">
            <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/living-mag.jpg">
            <img class="press-img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/exhibit.jpg" alt="exhibit">
          </picture>
          <div class="press-media-article">
            <p class="press-media-article-date">DEC 2017</p>
            <h3 class="press-media-article-title">LIVING | Brazil</h3>
            <p class="press-media-article-content">Featuring <a href="#" class="press-highlight">Tower Grove Drive</a></p>
          </div>
          <div class="press-media-actions">
            <a href="#" class="press-media-pdf"><?php include(__DIR__ ."/../svgs/down-chev.svg"); ?> <span>PDF</span></a>
          </div>
        </div>
      </li>

      <li class="press-media-mag-item swiper-slide" data-magitem="coastal">
        <div class="press-media-mag-content">
          <picture class="press-picture">
            <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/coastal-mag.jpg">
            <img class="press-img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/coastal-mag.jpg" alt="exhibit">
          </picture>
          <div class="press-media-article">
            <p class="press-media-article-date">OCT 2017</p>
            <h3 class="press-media-article-title">Coastal Living</h3>
          </div>
          <div class="press-media-actions">
            <a href="#" class="press-media-pdf"><?php include(__DIR__ ."/../svgs/down-chev.svg"); ?> <span>PDF</span></a>
          </div>
        </div>
      </li>

      <li class="press-media-mag-item swiper-slide" data-magitem="ocean">
        <div class="press-media-mag-content">
          <picture class="press-picture">
            <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/ocean-mag.jpg">
            <img class="press-img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/ocean-mag.jpg" alt="exhibit">
          </picture>
          <div class="press-media-article">
            <p class="press-media-article-date">AUG/SEP 2017</p>
            <h3 class="press-media-article-title">Ocean Home</h3>
            <p class="press-media-article-content">Featuring <a href="#" class="press-highlight">3rd Street & The Strand Residence</a></p>
          </div>
          <div class="press-media-actions">
            <a href="#" class="press-media-pdf"><?php include(__DIR__ ."/../svgs/down-chev.svg"); ?> <span>PDF</span></a>
            <a href="#" class="press-media-read"><span>READ</span></a>
          </div>
        </div>
      </li>

      <li class="press-media-mag-item swiper-slide" data-magitem="luxe">
        <div class="press-media-mag-content">
          <picture class="press-picture">
            <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/luxe-mag.jpg">
            <img class="press-img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/luxe-mag.jpg" alt="exhibit">
          </picture>
          <div class="press-media-article">
            <p class="press-media-article-date">MAY 2017</p>
            <h3 class="press-media-article-title">LUXE Interiors + Design</h3>
            <p class="press-media-article-content">Featuring <a href="#" class="press-highlight">Tower Grove Drive</a></p>
          </div>
          <div class="press-media-actions">
            <a href="#" class="press-media-pdf"><?php include(__DIR__ ."/../svgs/down-chev.svg"); ?> <span>PDF</span></a>
          </div>
        </div>
      </li>

      <li class="press-media-mag-item swiper-slide" data-magitem="sunset">
        <div class="press-media-mag-content">
          <picture class="press-picture">
            <source srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/sunset-mag.jpg">
            <img class="press-img" srcset="<?php bloginfo('template_url'); ?>/images/press/desktop/sunset-mag.jpg" alt="exhibit">
          </picture>
          <div class="press-media-article">
            <p class="press-media-article-date">MAR 2017</p>
            <h3 class="press-media-article-title">Sunset</h3>
            <p class="press-media-article-content">Featuring <a href="#" class="press-highlight">Split Rock Ranch</a></p>
          </div>
          <div class="press-media-actions">
            <a href="#" class="press-media-pdf"><?php include(__DIR__ ."/../svgs/down-chev.svg"); ?> <span>PDF</span></a>
          </div>
        </div>
      </li>
    </ul>

  </div>
</section>
