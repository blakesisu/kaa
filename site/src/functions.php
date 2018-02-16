<?php

add_filter('show_admin_bar', '__return_false');

function admin_style() {
    wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
}

add_action('admin_enqueue_scripts', 'admin_style');

function getBackgroundVideoSrc($video) {
  $videoID = null;
  $videoSrc = null;

  // If vimeo video
  if (strpos($video, 'vimeo') !== false) {
    $videoID = getVimeoId($video);
    $videoSrc = 'https://player.vimeo.com/video/'.$videoID.'?background=1';
  // If youtube video
  } else {
    $videoID = getYoutubeId($video);
    $videoSrc = 'https://www.youtube.com/embed/'.$videoID.'?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1&playlist='.$videoID;
  }

  return $videoSrc;
}

function getForegroundVideoSrc($video) {
  $videoID = null;
  $videoSrc = null;

  // If vimeo video
  if (strpos($video, 'vimeo') !== false) {
    $videoID = getVimeoId($video);
    $videoSrc = 'https://player.vimeo.com/video/'.$videoID.'?title=0&byline=0&portrait=0';
  // If youtube video
  } else {
    $videoID = getYoutubeId($video);
    $videoSrc = 'https://www.youtube.com/embed/'.$videoID.'?modestbranding=1&showinfo=0&rel=0';
  }

  return $videoSrc;
}

// https://github.com/lingtalfi/video-ids-and-thumbnails/blob/master/function.video.php
function getVimeoId($url) {
  if (preg_match('#(?:https?://)?(?:www.)?(?:player.)?vimeo.com/(?:[a-z]*/)*([0-9]{6,11})[?]?.*#', $url, $m)) {
    return $m[1];
  }
  return false;
}

// https://github.com/lingtalfi/video-ids-and-thumbnails/blob/master/function.video.php
function getYoutubeId($url) {
  $parts = parse_url($url);
  if (isset($parts['host'])) {
    $host = $parts['host'];
    if (
      false === strpos($host, 'youtube') &&
      false === strpos($host, 'youtu.be')
    ) {
      return false;
    }
  }
  if (isset($parts['query'])) {
    parse_str($parts['query'], $qs);
    if (isset($qs['v'])) {
      return $qs['v'];
    }
    else if (isset($qs['vi'])) {
      return $qs['vi'];
    }
  }
  if (isset($parts['path'])) {
    $path = explode('/', trim($parts['path'], '/'));
    return $path[count($path) - 1];
  }
  return false;
}

function getPageURL() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  return $url;
}

// limit posts per type
/**
 * Change Posts Per Page for Event Archive
 *
 * @author Bill Erickson
 * @link http://www.billerickson.net/customize-the-wordpress-query/
 * @param object $query data
 *
 */
add_action('pre_get_posts', 'changePostsPerPage');
function changePostsPerPage($query) {
  if ($query->is_main_query() && !is_admin()) {
    if (is_post_type_archive('press')) {
      $query->set('posts_per_page', 9);
    }
  }
}

if (!function_exists('pagination_bar')) :

    function pagination_bar()
    {
        global $wp_query;

        // $total_pages = $wp_query->max_num_pages;
        $set_pages =  $wp_query->found_posts / $wp_query->max_num_pages;

        $adjusted_found =  $wp_query->found_posts - 1;

        $total_pages = floor($adjusted_found / $set_pages);

        if ($total_pages > 1) {
            $current_page = max(1, get_query_var('paged'));

            // make highlight current page
            echo paginate_links(array(
              'base' => get_pagenum_link(1) . '%_%',
              'format' => 'page/%#%',
              'current' => $current_page,
              'total' => $total_pages,
              'next_text' => (' <svg id="R_arrow" data-name="R arrow" xmlns="http://www.w3.org/2000/svg" width="12" height="22" viewBox="0 0 12 22">
              <defs>
              <style>
              .cls-1 {
              fill: #fff;
              fill-rule: evenodd;
            }
            </style>
              </defs>
              <g id="arrow">
              <path class="cls-1" d="M1867.9,2884.99l10.61,10.61-1.41,1.41-10.61-10.61Z" transform="translate(-1866.5 -2885)"></path>
              <path class="cls-1" d="M1867.9,2907.01l10.61-10.61-1.41-1.41-10.61,10.61Z" transform="translate(-1866.5 -2885)"></path>
              </g>
              </svg>'),
              'prev_text' => ('')
            ));
        }
    }
endif;

// Advanced Custom Fields Options Page
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
}

?>
