<div class="paginator">
  <div class="paginator__pages">
    <?php
      the_posts_pagination( array(
        'mid_size'  => 3,
        'prev_text' => ('<svg class="prev_arrow" xmlns="http://www.w3.org/2000/svg" width="12" height="22" viewBox="0 0 12 22">
        <path d="M1867.9,2884.99l10.61,10.61-1.41,1.41-10.61-10.61Z" transform="translate(-1866.5 -2885)"></path>
        <path d="M1867.9,2907.01l10.61-10.61-1.41-1.41-10.61,10.61Z" transform="translate(-1866.5 -2885)"></path>
        </svg>'),
        'next_text' => ('<svg class="next_arrow" xmlns="http://www.w3.org/2000/svg" width="12" height="22" viewBox="0 0 12 22">
        <path d="M1867.9,2884.99l10.61,10.61-1.41,1.41-10.61-10.61Z" transform="translate(-1866.5 -2885)"></path>
        <path d="M1867.9,2907.01l10.61-10.61-1.41-1.41-10.61,10.61Z" transform="translate(-1866.5 -2885)"></path>
        </svg>'),
      ) );
    ?>
  </div>
</div>
