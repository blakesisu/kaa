<?php $pageTemplate = basename(get_page_template()); ?>
<header class="site-header">
  <div class="site-header__container">
    <h2 class="site-header__brand">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__brand-link">
        <?php include(__DIR__ ."/../svgs/logo.svg"); ?>
        <span class="site-header__tagline">
          30 Years of <br>
          California <br>
          Contemporary <br>
          Architecture
        </span>
      </a>
    </h2>
    <?php if( $pageTemplate ): ?>
      <h1 class="site-header__page-title"><?php echo get_the_title(); ?></h1>
    <?php endif; ?>

    <div class="site-header__utility-links">
      <a href="#" class="site-header__book-cta">
        <span>Get the book</span>
        <?php include(__DIR__ ."/../svgs/book.svg"); ?>
      </a>
      <button class="site-header__menu-btn">
        <?php include(__DIR__ ."/../svgs/hamburger.svg"); ?>
      </button>
    </div>
  </div>
</header>

<?php include("site-nav.php"); ?>
