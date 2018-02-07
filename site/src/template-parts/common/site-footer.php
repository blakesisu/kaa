<footer class="site-footer">
  <div class="site-footer__container">
    <div class="site-footer__info">
      <div class="site-footer__section site-footer__section--copyright">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-footer__logo">
          <?php include(__DIR__ ."/../svgs/logo.svg"); ?>
        </a>
        <p class="site-footer__text"><?php the_field('footer_copyright', 'option'); ?></p>
      </div>
      <?php
        $address = get_field('footer_address', 'option');
      ?>
      <?php if ($address) : ?>
        <div class="site-footer__section site-footer__section--address">
          <p class="site-footer__text">
            <a class="site-footer__text-link" href="<?php echo $address['address_link']; ?>" target="_blank">
            <?php echo $address['address_text']; ?>
            </a>
          </p>
        </div>
      <?php endif; ?>
      <?php if( have_rows('footer_contact', 'option') ): ?>
        <div class="site-footer__section site-footer__section--contact">
        <?php while( have_rows('footer_contact', 'option') ): the_row(); ?>
          <?php
            $text = get_sub_field('text');
            $link = get_sub_field('link');
          ?>
          <p class="site-footer__text">
            <?php if ($link): ?>
            <a class="site-footer__text-link" href="<?php echo $link; ?>" target="_blank">
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
    <div class="site-footer__links">
      <?php if( have_rows('footer_links', 'option') ): ?>
        <ul class="site-footer__pages">
        <?php while( have_rows('footer_links', 'option') ): the_row(); ?>
          <?php
            $text = get_sub_field('text');
            $link = get_sub_field('link');
          ?>
          <li class="site-footer__page-item">
            <a class="site-footer__page-link" href="<?php echo $link; ?>"><?php echo $text; ?></a>
          </li>
        <?php endwhile; ?>
        </ul>
      <?php endif; ?>
      <?php if( have_rows('footer_social', 'option') ): ?>
        <ul class="site-footer__social">
        <?php while( have_rows('footer_social', 'option') ): the_row(); ?>
          <?php
            $link = get_sub_field('link');
            $icon = get_sub_field('icon');
          ?>
          <li class="site-footer__social-item site-footer__social-item--<?php echo $icon; ?>">
            <a class="site-footer__social-link" href="<?php echo $link; ?>" target="_blank">
              <?php include(__DIR__ ."/../svgs/".$icon.".svg"); ?>
            </a>
          </li>
        <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</footer>
