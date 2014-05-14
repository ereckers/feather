<?php
/**
 * Page titles
 */
function feather_theme_title() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'feather');
    }
  } elseif (is_archive()) {
    $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
    if ($term) {
      return apply_filters('single_term_title', $term->name);
    } elseif (is_tag()) {
      return single_tag_title( __('Tag Archives: ', 'feather'), false );
    } elseif (is_post_type_archive()) {
      return apply_filters('the_title', get_queried_object()->labels->name);
    } elseif (is_day()) {
      return sprintf(__('Daily Archives: %s', 'feather'), get_the_date());
    } elseif (is_month()) {
      return sprintf(__('Monthly Archives: %s', 'feather'), get_the_date('F Y'));
    } elseif (is_year()) {
      return sprintf(__('Yearly Archives: %s', 'feather'), get_the_date('Y'));
    } elseif (is_author()) {
      $author = get_queried_object();
      return sprintf(__('Author Archives: %s', 'feather'), $author->display_name);
    } else {
      return single_cat_title('', false);
    }
  } elseif (is_search()) {
    return sprintf(__('Search Results for %s', 'feather'), get_search_query());
  } elseif (is_404()) {
    return __('Not Found', 'feather');
  } else {
    return get_the_title();
  }
}
