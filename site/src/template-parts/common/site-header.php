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
    <?php if(is_post_type_archive('projects')): ?>
      <?php
        $taxonomy = get_taxonomy( 'project_category' );
        $terms = get_terms([
          'taxonomy' => 'project_category',
          'hide_empty' => false,
        ]);
        $currentTerm = single_term_title("", false);
      ?>
      <div class="header-drop-down">
        <button class="header-drop-down__btn">
          <span>
            <?php if (is_tax( 'project_category' )) { echo single_term_title(); } else { echo post_type_archive_title(); } ?>
            <?php include(__DIR__ ."/../svgs/dropdown-down.svg"); ?>
          </span>
        </button>
        <ul class="header-drop-down__list">
          <li class="header-drop-down__item <?php if (is_tax( 'project_category' ) === false) { echo 'is-current'; } ?>">
            <a href="/projects" class="header-drop-down__link">All</a>
          </li>
          <?php foreach ( $terms as $term) : ?>
            <li class="header-drop-down__item <?php if ($term->name == $currentTerm) { echo 'is-current'; } ?>">
              <a href="<?php echo get_term_link($term); ?>" class="header-drop-down__link"><?php echo $term->name; ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php elseif(get_post_type() == 'press'): ?>
      <?php $post_type = get_post_type_object( get_post_type($post) ); ?>
      <h1 class="site-header__page-title"><?php echo $post_type->label; ?></h1>
    <?php else: ?>
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
