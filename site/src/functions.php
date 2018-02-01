<?php

add_filter('show_admin_bar', '__return_false');

function admin_style()
{
    wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
}

add_action('admin_enqueue_scripts', 'admin_style');


if (!function_exists('pagination_bar')) :

    function pagination_bar()
    {
        global $wp_query;

        $total_pages = $wp_query->max_num_pages;

        if ($total_pages > 1) {
            $current_page = max(1, get_query_var('paged'));

            echo paginate_links(array(
              'base' => get_pagenum_link(1) . '%_%',
              'format' => 'page/%#%',
              'current' => $current_page,
              'total' => $total_pages,
              // 'next_text' => ('>>'),
              'next_text' => ('... <svg id="R_arrow" data-name="R arrow" xmlns="http://www.w3.org/2000/svg" width="12" height="22" viewBox="0 0 12 22">
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
              'prev_text' => ('<svg id="L_arrow" data-name="L arrow" xmlns="http://www.w3.org/2000/svg" width="12" height="22" viewBox="0 0 12 22">
<defs>
    <style>
      .cls-1 {
        fill: #fff;
        fill-rule: evenodd;
      }
    </style>
  </defs>
  <g id="arrow">
    <path class="cls-1" d="M1836.1,2884.99l-10.61,10.61,1.41,1.41,10.61-10.61Z" transform="translate(-1825.5 -2885)"/>
    <path class="cls-1" d="M1836.1,2907.01l-10.61-10.61,1.41-1.41,10.61,10.61Z" transform="translate(-1825.5 -2885)"/>
  </g>
</svg> ...')
            ));
        }
    }
endif;

?>
