<?php
  $permalink = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $encodedURL = urlencode($permalink);
  // $encodedURL = 'https%3A%2F%2Fwww.urlencoder.org%2F';
?>
<div class="share">
  <button href="#" target="_blank" class="share__btn">
    <?php include(__DIR__ ."/../svgs/share.svg"); ?> Share
  </button>
  <div class="share__drop-down">
    <ul class="share__list">
      <li class="share__item">
        <a
          href="http://pinterest.com/pin/create/link/?url=<?php echo $encodedURL; ?>"
          target="_blank"
          class="share__link share__link--pinterest"
        >
          <?php include(__DIR__ ."/../svgs/pinterest.svg"); ?>
        </a>
      </li>
      <li class="share__item">
        <a
          href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $encodedURL; ?>"
          target="_blank"
          class="share__link share__link--facebook"
        >
          <?php include(__DIR__ ."/../svgs/facebook.svg"); ?>
        </a>
      </li>
      <li class="share__item">
        <a
          href="https://www.houzz.com"
          class="share__link share__link--houzz"
        >
          <?php include(__DIR__ ."/../svgs/houzz.svg"); ?>
        </a>
      </li>
      <li class="share__item">
        <a
          href="https://twitter.com/home?status=<?php echo $encodedURL; ?>"
          target="_blank"
          class="share__link share__link--twitter"
        >
          <?php include(__DIR__ ."/../svgs/twitter.svg"); ?>
        </a>
      </li>
      <li class="share__item">
        <a
          href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $encodedURL; ?>"
          target="_blank"
          class="share__link share__link--linkedin"
        >
          <?php include(__DIR__ ."/../svgs/linkedin.svg"); ?>
        </a>
      </li>
    </ul>
  </div>
</div>
