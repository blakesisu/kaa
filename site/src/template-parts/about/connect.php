<div class="about-connect">
  <!-- Join Us -->
  <section class="about-connect__section">

    <div class='about-connect__image-column'>
      <?php $joinImage = get_field('about_join_image'); ?>
      <picture class="about-connect__picture">
        <source srcset="<?php echo $joinImage['mobile']; ?>" media="(max-width: 700px)">
        <source srcset="<?php echo $joinImage['desktop']; ?>">
        <img class="about-connect__img" srcset="<?php echo $joinImage['desktop']; ?>" alt="">
      </picture>
    </div>

    <div class="about-connect__text-column">
      <div class="about-connect__text-wrapper">
        <h1 class="about-connect__header"><?php the_field('about_join_header'); ?></h1>
        <h2 class="about-connect__message"><?php the_field('about_join_copy'); ?></h2>
        <?php $joinBtn = get_field('about_join_button'); ?>
        <a class="about-connect__button" href="<?php echo $joinBtn['link']; ?>"><?php echo $joinBtn['label']; ?></a>
      </div>
    </div>

  </section>

  <!-- Contact -->
  <section class="about-connect__section">

    <div class="about-connect__text-column">
      <div class="about-connect__text-wrapper">
        <h1 class="about-connect__header"><?php the_field('about_contact_header'); ?></h1>
        <div class="about-connect__wysiwyg">
          <?php the_field('about_contact_copy'); ?>
        </div>
      </div>
    </div>

    <div class="about-connect__image-column">
      <?php $contactImage = get_field('about_contact_image'); ?>
      <picture class="about-connect__picture">
        <source srcset="<?php echo $contactImage['mobile']; ?>" media="(max-width: 700px)">
        <source srcset="<?php echo $contactImage['desktop']; ?>">
        <img class="about-connect__img" srcset="<?php echo $contactImage['desktop']; ?>" alt="">
      </picture>
    </div>

  </section>
</div>
