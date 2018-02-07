<nav class="site-nav">
  <button class="site-nav__close">
    <?php include(__DIR__ ."/../svgs/close.svg"); ?>
  </button>
  <ul class="site-nav__list">
  <?php if( have_rows('site_navigation', 'option') ): ?>
    <?php while( have_rows('site_navigation', 'option') ): the_row(); ?>
      <?php
        $id = get_sub_field('site_navigation_link', false, false);
        $label = get_sub_field('site_navigation_label');
        $link = get_sub_field('site_navigation_link');
        $uri = explode('/', $_SERVER['REQUEST_URI']);
        $isCurrent = false;

        if (count($uri) >= 3) {
          if (strpos($link, $uri[1]) !== false) {
            $isCurrent = true;
          };
        } else if ($label === 'Home') {
          $isCurrent = true;
        }
      ?>
      <li class="site-nav__item">
        <a
          href="<?php echo $link; ?>"
          class="site-nav__link <?php if ($isCurrent === true) { echo 'is-current'; } ?>">
            <?php echo $label; ?>
          </a>
      </li>
    <?php endwhile; ?>
  <?php endif; ?>
  </ul>
  <div class="site-nav__utilities">
    <div class="site-nav__contact">
      <?php if( have_rows('footer_social', 'option') ): ?>
        <ul class="site-nav__social">
        <?php while( have_rows('footer_social', 'option') ): the_row(); ?>
          <?php
            $link = get_sub_field('link');
            $icon = get_sub_field('icon');
          ?>
          <li class="site-nav__social-item site-nav__social-item--<?php echo $icon; ?>">
            <a class="site-nav__social-link" href="<?php echo $link; ?>" target="_blank">
              <?php include(__DIR__ ."/../svgs/".$icon.".svg"); ?>
            </a>
          </li>
        <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </div>
    <div class="site-nav__info">
      <?php
        $address = get_field('footer_address', 'option');
      ?>
      <?php if ($address) : ?>
        <div class="site-nav__section site-nav__section--address">
          <p class="site-nav__text">
            <a class="site-nav__text-link" href="<?php echo $address['address_link']; ?>" target="_blank">
            <?php echo $address['address_text']; ?>
            </a>
          </p>
        </div>
      <?php endif; ?>
      <?php if( have_rows('footer_contact', 'option') ): ?>
        <div class="site-nav__section site-nav__section--contact">
        <?php while( have_rows('footer_contact', 'option') ): the_row(); ?>
          <?php
            $text = get_sub_field('text');
            $link = get_sub_field('link');
          ?>
          <p class="site-nav__text">
            <?php if ($link): ?>
            <a class="site-nav__text-link" href="<?php echo $link; ?>" target="_blank">
            <?php endif; ?>
              <?php echo $text; ?>
            <?php if ($link): ?>
            </a>
            <?php endif; ?>
          </p>
        <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</nav>
